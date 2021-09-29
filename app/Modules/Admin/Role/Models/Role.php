<?php

namespace App\Modules\Admin\Role\Models;

use App\Modules\Admin\User\Models\User;
use App\Modules\Admin\Role\Models\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'alias',
        'title',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function perms()
    {
        return $this->belongsToMany(Permission::class);
    }
    public function savePermissions($perms)
    {
        if (!empty($perms)) {
            $this->perms()->sync();
        } else {
            $this->perms()->detach();
        }
    }
}
