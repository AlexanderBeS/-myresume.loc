<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        //if (! $request->user()->hasRole('Admin')) {
            // Redirect...
        //}
        if ($request->user()) {

            $user = $request->user();
            $user->isPriveleged = false;

            if ($user) {
                foreach ($user->roles as $role) {
                    $userRoles[] = $role->name;
                }


                if ($userRoles) {
                    if ((array_intersect($userRoles, ['Admin', 'Moderator']))) {
                        $user->isPriveleged = true;
                    }
                }
            }
        }

        return $next($request);
    }
}
