<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error-unauthorized', 'Silahkan Login Terlebih Dahulu');
        }

        $productCount = Product::count();
        $categoryCount = Category::count();
        return view('pages.dashboard.admin', compact('productCount', 'categoryCount'));
    }
}
