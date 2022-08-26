<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        if (auth()->user()->role == Role::ADMIN) {
            return redirect()->route('admin.dashboard');
        } elseif (auth()->user()->role == Role::INSTITUTION) {
            return redirect()->route('institution.dashboard');
        }
    }
}
