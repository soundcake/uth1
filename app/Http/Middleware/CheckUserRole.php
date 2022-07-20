<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Redirect user based on role.
     *
     */
    public function handle()
    {
        $user = Auth::user();
        if ($user->hasRole('BankAdmin')) {
            return redirect('/admin/dashboard');
        }
        if ($user->hasRole('BankUser')) {
            return redirect('/user/dashboard');
        }
        return redirect('/');
    }
}
