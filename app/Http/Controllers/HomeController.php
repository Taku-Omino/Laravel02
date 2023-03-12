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
      $companies = Company::all();
      return view('front.page.template.top', compact('companies'));

    }

    /**
     * aboutページ
     */
    public function about()
    {
      $companies = Company::get();
      return view('front.page.template.about')->with(['companies' => $companies]);
      //$users = User::with('company')->get();
      //return view('front.page.template.about', compact('users'));

    }
}