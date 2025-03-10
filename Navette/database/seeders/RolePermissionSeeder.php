<?php

namespace Database\Seeders;

use App\Models\permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route as FacadesRoute;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions=permission::all();
        foreach ($permissions as $permission) {

            DB::table('role_permissions')->insert([
                'role_id'=>'3',
                'permission_id'=>$permission->id,
            ]);
        }

    }

}
