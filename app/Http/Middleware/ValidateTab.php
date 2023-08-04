<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\User\StorePersonalRequest;

class ValidateTab
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('contact', 'education', 'training', 'experience')) {
            $personalRequest = new StorePersonalRequest();

            $validator = app('validator')->make(
                $request->all(),
                $personalRequest->rules(),
                $personalRequest->messages()
            );

            if ($validator->fails()) {
                // Redirect to the personal tab with validation errors
                return redirect()->route('personal')->withErrors($validator);
            }
        }

        return $next($request);
    }
}
