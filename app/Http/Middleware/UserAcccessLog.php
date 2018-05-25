<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserAcccessLog
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

        $ip = $request->getClientIp();
        $data = [
            'user_id' => $user->id,
            'ip' => $ip,
            'url' => $request->url(),
            'add_time' => time(),
        ];
        DB::table('user_access_log')->insert($data);
        return $next($request);
    }
}
