<?php

namespace Database\Seeders;

use App\Models\BankAccount;
use App\Models\CreditCard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the users seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 20 records of users
        User::factory()
            ->count(20)
            ->create()
            ->each(function ($user) {
                $randomRole = rand(0, 1) ? 'BankUser' : 'BankAdmin';
                $user->assignRole($randomRole);
                $user->save();

                BankAccount::factory()
                    ->count(rand(1, 3))
                    ->create(['user_id' => $user->id]);

                CreditCard::factory()
                    ->count(rand(2, 5))
                    ->create(['user_id' => $user->id]);
            });
    }
}
