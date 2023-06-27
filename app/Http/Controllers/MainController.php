<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class MainController extends Controller
{
    public function index()
    {

        $categories=Category::all();
       return view('frontend.index',compact('categories'));
    }

    public function AboutUs()
    {
       return view('frontend.about-us');
    }

    public function TeamMembers()
    {
       return view('frontend.team-members');
    }

    public function PrivacyPolicy()
    {
       return view('frontend.privacy-policy');
    }

    public function TermsConditions()
    {
       return view('frontend.terms-and-conditions');
    }

    public function RefundPolicy()
    {
       return view('frontend.refund-policy');
    }


}
