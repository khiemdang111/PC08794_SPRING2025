<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CommentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Log::info('Người dùng có địa chỉ IP' . $request->ip() . 'đang submit form comment');

        // $starTime =  microtime(true);

        // $key_ip = 'comment_ip_' . $request->ip();
        // $key_count = 'comment_ip_count_' . $request->ip();
        // $key_first = 'comment_ip_first_' . $request->ip();

        // if (! Cache::has($key_first)){
        //     Cache::add($key_first, time());
        //     Cache::add($key_count, 1);
        //     return $next($request);
        // }
        // if(Cache::has($key_ip) && Cache::has($key_first)){
        //     if(time() - Cache::get($key_first) < 300 && Cache::get($key_count) < 5){

        //     }else{
        //         Cache::add($key_first, time());
        //         Cache::add($key_count, 5); 
        //         return $next($request);
        //     }
        // }
        return $next($request);
    }
}
