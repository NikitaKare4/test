<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    # поиск и страница с результатами поиска
    public function getResults(Request $request) 
    {
       $query = $request->input('query');
       if ( ! $query ) redirect()->route('home');

       $books = Book::where(DB::raw("CONCAT (name, ' ', opisanie)"),
                           'LIKE', "%{$query}%")
                      ->orWhere('cena', 'LIKE', "%{$query}%")
                      ->get();

       return view('search.results', compact('books'));
    }
}