<?php

namespace App\Exceptions;

use Illuminate\Http\Request;
use Exception;

class InvalidRequestException extends Exception
{

    public function render(Request $request) {
        if($request->expectsJson()) {
            return response()->json(['msg' => $this->message], $this->code);
        } else {
            return view('pages.error', ['msg' => $this->message]);
        }
    }
}
