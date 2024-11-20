<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * このアプリケーションで信頼するプロキシ
     *
     * @var string|array
     */
    /**
     * このアプリケーションで信頼するプロキシ
     *
     * @var string|array
     */
    protected $proxies = '*';

    /**
     * プロキシを検出するために使用すべきヘッダ
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_FOR | Request::HEADER_X_FORWARDED_HOST | Request::HEADER_X_FORWARDED_PORT | Request::HEADER_X_FORWARDED_PROTO;
}