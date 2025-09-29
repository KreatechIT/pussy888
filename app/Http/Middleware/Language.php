<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // ✅ Skip static assets and storage files
        if (
            $request->is('assets/*') ||
            $request->is('storage/*') ||
            $request->is('images/*') ||
            $request->is('css/*') ||
            $request->is('js/*')
        ) {
            return $next($request);
        }

        $lang = $request->segment(1);
        $language = ['en', 'bm', 'zh'];

        if (! in_array($lang, $language)) {
            $lang = 'en';

            return redirect()->to('/'.$lang.$request->getRequestUri());
        }

        App::setLocale($lang);

        // 👇 Inject locale into all route() calls automatically
        \Illuminate\Support\Facades\URL::defaults(['lang' => $lang]);

        return $next($request);
    }
}
