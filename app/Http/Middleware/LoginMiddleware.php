<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
		//检测用户是否登录(假设登录时会添加session信息 isLogin)
		
		if(!$request->has('isLogin')){
			//跳转到制定页面
			return redirect('/home/index');
		}else{
			return $next($request);
		}
		
        
    }
}
