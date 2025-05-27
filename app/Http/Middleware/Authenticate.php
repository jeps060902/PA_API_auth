<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo(Request $request): ?string
    {
        // Hindari redirect, balas error langsung
        return $request->expectsJson() ? null : abort(401, 'Unauthorized');
    }
}
