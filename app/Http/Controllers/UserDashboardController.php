<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class UserDashboardController extends Controller
{
    /**
     * Return user dashboard.
     *
     * @return \Inertia\Response
     */
    public function __invoke()
    {
        return Inertia::render('UserDashboard');
    }
}
