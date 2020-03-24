<?php

namespace App\Http\Middleware;

use App\Permission;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckPermissionAcl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission = null)
    {
        //Gel all role of user login
        $curentUser = Auth::id();
        $roleOfUser = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'roles.id', '=', 'role_user.role_id')
            ->where('users.id', $curentUser)
            ->select( 'roles.*')
            ->get()->pluck('id')->toArray();

        //Get all permission of role

        $permissionOfRole = DB::table('roles')
            ->join('role_permission', 'roles.id', '=', 'role_permission.role_id')
            ->join('permissions', 'permissions.id', '=', 'role_permission.permission_id')
            ->whereIn('roles.id', $roleOfUser)
            ->select( 'permissions.*')
            ->get()->pluck('id')->unique();

        //Get Perrmission from middle where
        $checkPermission = Permission::where('name', $permission)->value('id');

        //Check Perrmission

        if ($permissionOfRole->contains($checkPermission)){
            return $next($request);
        } else{
            abort('401');
        }
    }
}
