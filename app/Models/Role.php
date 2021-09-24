<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    //
    protected $fillable = ['name', 'guard_name'];


    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'role_user');
    }

    static function getAllRoles()
    {
        return self::pluck('name', 'id');
    }

    static function getRoleNames()
    {
        return self::pluck('name')->toArray();
    }


    static function getAuthUserCanCreateRoles(){
        $roles = self::getRoleNames();
        if (auth()->user()->hasAnyRole("superAdmin")){
            return $roles;
        }
        elseif (auth()->user()->hasAnyRole("admin")){
            unset($roles[array_search("superAdmin",$roles)]);
            return $roles;
        }
        else{
            unset($roles[array_search("superAdmin",$roles)]);
            unset($roles[array_search("admin",$roles)]);
            unset($roles[array_search("company",$roles)]);
            return $roles;
        }
    }


}
