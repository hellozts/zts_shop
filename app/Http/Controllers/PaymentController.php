<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidRequestException;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payByAlipay(Order $order, Request $request) {
        //判断订单是否属于当前用户
        $this->authorize('own', $order);
        //判断已支付或者已关闭
        if($order->paid_at || $order->closed) {
            throw new InvalidRequestException('订单状态不正确');
        }
        return app('alipay')->web([
            'out_trade_no' => $order->no,
            'total_amount' => $order->total_amount,
            'subject' => "字符laravel shop 的订单: " . $order->no
        ]);
    }

    public function alipayReturn() {
        try {
            app('alipay')->verify();
        } catch (\Exception $e) {
            return view('pages.error', ['msg' => '数据不正确']);
        }
        return view('pages.success', ['msg' => '付款成功']);
    }

    public function alipayNotify() {
        $data = app('alipay')->verify();
        if(!in_array($data->trade_status, ['TRADE_SUCCESS', ' TRADE_FINISHED'])) {
            return app('alipay')->success();
        }
        $order = Order::where('no', $data->out_trade_no)->first();
        if(!$order) {
            return 'fail';
        }
        if($order->paid_at) {
            return app('alipay')->success();
        }
        $order->update([
            'paid_at' => Carbon::now(),
            'payment_method' => 'alipay',
            'payment_no' => $data->trade_no
        ]);
        return app('alipay')->success();
    }
}
