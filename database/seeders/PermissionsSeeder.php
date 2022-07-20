<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the permissions seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'view-own-name',
            'view-own-role',
            'view-own-bank-accounts',
            'view-own-credit-cards',
            'view-everyones-names',
            'view-everyones-roles',
            'view-everyones-bank-accounts',
            'view-everyones-credit-cards',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
