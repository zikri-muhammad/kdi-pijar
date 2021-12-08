<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use App\Helpers\APIHelper;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $uri          = request()->segments();
        $user         = Session::get('users');

        if ( ! $user) {
            return redirect('login');
        } else {
            $userRoleCode = ! empty($user['data']['role_code']) ? $user['data']['role_code'] : null;
            $firstSegment = $uri[0];
    
            if ($this->validate($firstSegment, $userRoleCode)) {
                return $next($request);
            } else {
                return redirect($userRoleCode);
            }
        }
    }

    /**
     * Validation for user roles to access feature.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private function validate($role, $userRoleCode) {
        if ( ! $userRoleCode) {
            return false;
        }

        $request = new APIHelper('roles');        

        $roles = $request->all;

        if ( ! empty($roles['results'])) {
            $roles = $roles['results'];

            foreach ($roles as $key => $value) {
                if ($role === $value['code']) {
                    return ($userRoleCode == $value['code']);
                }
            }
        } else {
            return false;
        }
    }
}
