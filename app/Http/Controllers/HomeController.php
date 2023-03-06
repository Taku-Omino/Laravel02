<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use Log;

class HomeController extends Controller
{
    /**
     * トップページ
     */
    public function top()
    {
      //return view('front.page.template.top');
      $companies = Company::all();
      return view('front.page.top.top', compact('companies'));

    }

    /**
     * aboutページ
     */
    public function about()
    {
      //return view('front.page.template.about');
      $users = User::with('company')->get();
      return view('front.page.top.about', compact('users'));

    }
}