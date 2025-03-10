<?php

namespace Database\Seeders;

use App\Models\permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route as FacadesRoute;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routes = FacadesRoute::getRoutes();


        foreach ($routes as $route) {
            if(!$route->getName()==null){

                permission::create([
                    'url' => $route->uri(),
                    'name' => $route->getName(),
                ]);
            }
        }
    }
}
