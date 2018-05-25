<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserAccessLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        $user_id = $user ? $user->id : 0;

        $ip = $request->getClientIp();
        $data = [
            'user_id' => $user_id,
            'ip' => $ip,
            'url' => $request->getRequestUri(),
            'add_time' => time(),
//            'url' => $request->url(),
        ];
        DB::table('user_access_log')->insert($data);
        return $next($request);
    }
}
