<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'create-baptism',
            'edit-baptism',
            'delete-baptism',
            'manage-baptism',
            'create-marriage',
            'edit-marriage',
            'delete-marriage',
            'manage-marriage',
            'generate-report',
            'access-all-records',
            'can-download-pdf',
            'view-data-report',
         ];

         // Looping and Inserting Array's Permissions into Permission Table
         foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
          }
    }
}
