<?php

namespace App\Http\Middleware;

use Closure;

class XFrameOptions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * DENY
         *   表示该页面不允许在 frame 中展示，即便是在相同域名的页面中嵌套也不允许。
         * SAMEORIGIN
         *   表示该页面可以在相同域名页面的 frame 中展示。
         * ALLOW-FROM uri
         *   表示该页面可以在指定来源的 frame 中展示。
         * */
        $response = $next($request);
        $response->header('X-Frame-Options', 'SAMEORIGIN');
        return $response;
    }
}
