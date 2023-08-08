<?php

namespace App\Http\Middleware;

use App\Utilities\Constant;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Nếu chưa đăng nhập chuyển tới trang đăng nhập
        if (Auth::guest()) {
            return redirect()->guest(route('admin.login'));
        }

        //Nếu đăng nhập nhưng sai level: đăng xuất và đăng nhập lại
        if (Auth::user()->level != Constant::user_level_host && Auth::user()->level != Constant::user_level_admin) {
            Auth::logout();
            return redirect()->guest(route('admin.login'));
        }

        return $next($request);
    }
}
