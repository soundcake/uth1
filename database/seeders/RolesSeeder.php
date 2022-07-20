<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the roles seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'BankAdmin']);
        $userRole = Role::create(['name' => 'BankUser']);

        $adminRole->givePermissionTo([
            'view-own-name',
            'view-own-role',
            'view-own-bank-accounts',
            'view-own-credit-cards',
            'view-everyones-names',
            'view-everyones-roles',
            'view-everyones-bank-accounts',
            'view-everyones-credit-cards',
        ]);

        $userRole->givePermissionTo([
            'view-own-name',
            'view-own-role',
            'view-own-bank-accounts',
            'view-own-credit-cards',
        ]);
    }
}
