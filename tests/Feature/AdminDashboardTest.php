<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminDashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_bank_admin_can_access_admin_dashboard()
    {
        $this->artisan('db:seed');
        $user = User::factory()->create();
        $user->assignRole('BankAdmin');
        $user->save();
        $response = $this->actingAs($user)->get('/admin/dashboard');
        $response->assertStatus(200);
    }

    public function test_bank_user_cannot_access_admin_dashboard()
    {
        $this->artisan('db:seed');
        $user = User::factory()->create();
        $user->assignRole('BankUser');
        $user->save();
        $response = $this->actingAs($user)->get('/admin/dashboard');
        $response->assertStatus(403);
    }
}
