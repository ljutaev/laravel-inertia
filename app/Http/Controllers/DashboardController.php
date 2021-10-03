<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Sasha',
            'last_name' => 'Ljut'
        ];

        return Inertia::render('Dashboard/Index', $data);
    }
}
