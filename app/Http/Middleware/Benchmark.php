<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use function microtime;

class Benchmark
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $sTime    = microtime(true);
        $response = $next($request);
        $runTime  = microtime(true) - $sTime;
        Log::info('runTime', [
            'url'   => $request->url(),
            'input' => $request->input(),
            'time'  => " $runTime ms",
        ]);
        return $response;
    }

}
