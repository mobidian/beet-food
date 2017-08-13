<?php namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use App\Beety\Language;
use Closure;

/**
 * Class SetLanguage
 * @package App\Http\Middleware
 */
class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $lang = Auth::guard($guard)->check() ? session('lang') : $request->cookie('lang');

        if (in_array($lang, Language::$langs)) {
            app()->setLocale($lang);
        }

        return $next($request);
    }
}
