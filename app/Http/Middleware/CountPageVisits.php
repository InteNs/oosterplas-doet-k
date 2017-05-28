<?php

namespace App\Http\Middleware;

use Closure;
use App\PageCount;

class CountPageVisits
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
        $result = PageCount::find($request->url());
        PageCount::updateOrCreate(
            ['url' => $request->url()],
            ['count' => ($result === null ? 1 : $result->count + 1)]
        );

        return $next($request);
    }
}
