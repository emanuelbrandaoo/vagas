<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\User;
use App\Models\Company;

class WelcomeController extends Controller
{
    public function index() {

        $companies = Company::all();
        $users = User::all();
        $categories = Category::all();

        return view('welcome', [
            'companies' => $companies,
            'categories' => $categories,
            'users' => $users
        ]);
    }
    
}
