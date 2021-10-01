<?php

namespace App\Modules\Admin\Role\Services;

use Illuminate\Http\Request;
use App\Modules\Admin\Role\Models\Role;

class PermService
{
    public function save(Request $request)
    {

        $data = $request->except('_token');

        $roles = Role::all();

        foreach ($roles as $role) {

            if(isset($data[$role->id])) {
                $role->savePermissions($data[$role->id]);
            } else {
                $role->savePermissions([]);
            }
        }
        return true;
    }
}
