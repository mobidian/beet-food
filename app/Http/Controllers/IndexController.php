<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beety\Language;
use Illuminate\Support\Facades\Cookie;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return redirect('login');
    }

    /**
     * @param string $lang
     * @return mixed
     */
    public function setLang($lang = 'en')
    {
        if (in_array($lang, Language::$langs)) {
            session(['lang' => $lang]);
            Cookie::queue('lang', $lang, config('app.cookie_lang_lifetime'));
        }

        return redirect()->back();
    }
}
