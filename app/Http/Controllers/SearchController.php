<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
class SearchController extends Controller
{
    public function search(Request $request)
    {
      $search = $request->search;

        $results = Result::orWhere('code', 'like', '%'.$search.'%')
        ->orWhere('register_no', 'like', '%'.$search.'%')
        ->orWhere('session_year', 'like', '%'.$search.'%')
        ->orderBy('id', 'desc')
        ->paginate(9);

        return view('search', compact('search', 'results'));
    }
}
