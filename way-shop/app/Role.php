<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Permission;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['name', 'display_name'];

    public function permissions(){
        return $this->belongsToMany(Permission::class, 'role_permission', 'role_id', 'permission_id');
    }

    public $timestamps = false;
}
