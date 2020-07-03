<?php
return [
    'alipay' => [
        'app_id' => '2016082100306226',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA54Bj8WMMx8D6+C8vQyszD0H9MBCg7J3H3FQ0+uXEvy4gvyZ+OunXy8Pn/r0nRl225xfNXlTKBTYLwupuN4T/X/8KWrVvGuWHLWdR0Jn+6LId9DRuOlcJ5ZmEZOyfjiHrCC84D+recbgsXIZVO/o6ydOoWZD2yp/ujxpLtGbvXevLtgDZpEdnrfxydexBWZHbU/tWwForpLSlkmWzXb2YFThVsol83JqkZgQECnUdmK24sjxOwiqiFzvXpbKWvAyIAcWIquTprFQXPUiTc1SWwBGLTS3A+w2qjBj8JoIFHFVYdJLLGeGucpSc8mAXhOcU+6ySApQFmvxeEvPEckGJywIDAQAB',
        'private_key' => 'MIIEpQIBAAKCAQEAy0/UUBR/WOUiUTsegjmSP6QCOaa5ZoiYBNv9SUQHSfozLy/q/xlT77WD8lGrM0y21kMOkde46lYiaxo8zZA5MZ2uWh0PB70hRH1gQuzXQW+jMvq3b46GUd2JFd1YqtNf+/V2Lp4Hf0/13zvz87dg35jJ2NNHNSjpdu5qoRPComVSc8rVFvZMVBzzwx7psNIOs7FvXBkNqQ43hc1iVcgd7xTMVMmle/00BBX4uBUngwctrigS8gfs8tbim9jSJMOSqpl7pjGaHWYKVqm0bChyKkW/5EEDAvlXo+Z/C3z71SWr7Etn4GRB/aqfvV9fI+VoqdI9IcirQUy7lRcaH7YfTQIDAQABAoIBAQCOTAAwUDhVUoHzUqpmwL6gdjzsdsl6fw3PEN204r0rRMeANkyGYQbDVkrUVd66F+48BlDzOIX+1Wxfg8ycn124YUE/Zuk3JGNdWVb/YF7EOMuDicDLfnh6YdBpkjNV1H1wjns543ch3ygaJw72PBm8RWa4sB89kLXefL36oSbvmzUPUbHsxE2T0bKNaOLuieX9KczOTnNNq0rGJFt1i2phf+fLpQfwUPh2WsaIrsqMh+j1NbFn67QQEfkQvkBQrfReGS/c5HWez/iFPJdhfe0Uw7CmhihvxDt5QyxQl9TgOxlqmJP9hja3SASVb5yQMv9cFLEqv2CbMQE/8DeufL9hAoGBAPB9VKhe7rUDZ/n2jG0j8WogSpFV9aKSh4z30BzEzzxHN9wRIGR6hgg7Y6Zww7i9ZCzV4YMInZ1rW7WcmXE8Ax+rVBQn7uBzrV2qQswaYrVQcIZNXAfuKYjjFFMQ0DjPx/1BPm5zxA9B+IZBhKXZLYrMwjNp2KJYmFU7ub1ig36VAoGBANhsqlQsvCkSJY+8LZP/8EuBqSBcSAhXOXuJdO1rNJxmcfr/0XC0nqRSsC84l+MqD4lUioDPuvrqTkIbPZvoUgyJ77IDAtuT71ypVlsme80wRNQAN3hG9yig8CUMe72DFhFECkZ+SfJDVFC3sDquCVvidCaK4NdOdjC1lwdG8sfZAoGBALBIrs3dCM3XeVhZygYW2tgYY5C1miFZl9NVtE/iVKay7dd7FmuRBL70Cc/vyQiai9vxzCTpI+BI2ij+adv/SarlQ/SicRBGu0Z1kBFdJg4SsOlBu7x0cC3Phw58vKVoagjS0pjUc1tb2HlRfZK06BVektxtMkeO+dtAtJ6GoC0hAoGBALkNaTKiMZ0YlB9rsrkanXeifV9bKIhhNJhp9x3OjeSxQAJzXLz247LztQwbYtvtKe2t6OOtO16ym4mwyyQVKJrqEpbuNjJUMtXTQTCdHjxbam6vZL6mR01pFw1GuENZ47ONrw+JimbopR6Dgd8a0ovLfK88DnZq82pAysuBIbQ5AoGAIgW6RwyPA0VhmziuYamkB9ueWXM43vkmnBWo1DrgaEYScoxVuCjZ5j70jv9AArVRZ7L33jafWvaxM8LhEBqNexAuWJgMpwPwGCMI+G0sFZl22dLWshwbP5/GsK9wOf3111pCqh6KUhvhNlXEuXS+UEXPIpZRma6e7K2dnXCTAHo=',
        'log' => [
            'file'  =>storage_path('logs/alipay.log')
        ]
    ],
    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' => [
            'file' => storage_path('logs/wechat.log')
        ]
    ]
];
