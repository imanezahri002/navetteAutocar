<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class AuthPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $permission): Response
    {
        if (!Auth::check()) {
            return redirect("connexion");
        }

        $user = Auth::user();

        $role_id = $user->role_id;

        $user = DB::table("role_permission")
                    ->join('permissions', 'permissions.id', '=', 'role_permission.permission_id')
                    ->where('role_permission.role_id', '=', $role_id)
                    ->where('permissions.name', '=' ,$permission)
                    ->exists();

        //SELECT *
        // FROM `role_permissions` rp
        // inner join permissions p ON rp.permission_id=p.id
        // WHERE rp.role_id=3 AND p.name='login';


        if(empty($user)){
            return redirect("connexion");
        }
        return $next($request);
    }
}
