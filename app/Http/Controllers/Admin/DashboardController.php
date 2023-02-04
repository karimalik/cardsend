<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $allCars = Car::count();
        $allUsers = User::count();
        return view('admin.dashboard', compact('allCars', 'allUsers'));
    }
}
