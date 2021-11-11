<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['name'=>'View Category','guard_name'=>'view-category'],
            ['name'=>'Create Category','guard_name'=>'create-category'],
            ['name'=>'Edit Category','guard_name'=>'edit-category'],
            ['name'=>'Delete Category','guard_name'=>'delete-category'],

            ['name'=>'View Product','guard_name'=>'view-product'],
            ['name'=>'Create Product','guard_name'=>'create-product'],
            ['name'=>'Edit Product','guard_name'=>'edit-product'],
            ['name'=>'Delete Product','guard_name'=>'delete-product'],

            ['name'=>'View Slider','guard_name'=>'view-slider'],
            ['name'=>'Create Slider','guard_name'=>'create-slider'],
            ['name'=>'Edit Slider','guard_name'=>'edit-slider'],
            ['name'=>'Delete Slider','guard_name'=>'delete-slider'],

            ['name'=>'View Page','guard_name'=>'view-page'],
            ['name'=>'Create Page','guard_name'=>'create-page'],
            ['name'=>'Edit Page','guard_name'=>'edit-page'],
            ['name'=>'Delete Page','guard_name'=>'delete-page'],

            ['name'=>'View User','guard_name'=>'view-user'],
            ['name'=>'Create User','guard_name'=>'create-user'],
            ['name'=>'Edit User','guard_name'=>'edit-user'],
            ['name'=>'Delete User','guard_name'=>'delete-user'],

            ['name'=>'View Role','guard_name'=>'view-role'],
            ['name'=>'Create Role','guard_name'=>'create-role'],
            ['name'=>'Edit Role','guard_name'=>'edit-role'],
            ['name'=>'Delete Role','guard_name'=>'delete-role'],

            ['name'=>'View Permission','guard_name'=>'view-permission'],
            ['name'=>'Create Permission','guard_name'=>'create-permission'],
            ['name'=>'Edit Permission','guard_name'=>'edit-permission'],
            ['name'=>'Delete Permission','guard_name'=>'delete-permission'],
            ['name'=>'Manage Customers','guard_name'=>'manage-customers'],



        ];

        DB::table('permissions')->insert($permissions);
    }
}
