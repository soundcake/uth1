<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\User;

class AdminDashboardController extends Controller
{
    /**
     * Return all users to admin dashboard.
     *
     * @return \Inertia\Response
     */
    public function __invoke()
    {
        $users = User::with('cards','accounts','roles')->get();

        return Inertia::render('AdminDashboard', [
            'users' => $users,
        ]);
    }
}
