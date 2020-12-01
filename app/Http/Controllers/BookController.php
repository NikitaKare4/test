<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Models\Book;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Response;
use Input;
use Str;
use Session;

class BookController extends Controller
{
	// api
	public function book(){
		return response()->json(Book::get(),200);
	}

	public function bookByid($id){
		return response()->json(Book::find($id),200);
	}

	public function bookSave(Request $req){
		$country = Book::create($req->all());
		return response()->json($country,201);
	}
	// api
// главная станица
	public function getIndex()
	{
		$books = Book::all();
		return view('book.index', compact('books', $books));

	} 
// страница подробно
	public function getSelect($id)
	{
		$book = Book::find($id);
		return View::make('book.select')->with('book',$book);
	}
// страница добавить
	public function getAdd()
	{
		return View::make('book.add');
	}
// добавление обьяления в базу
	public function postAdd()
	{
		$data       = Input::all();
		$validation = Validator::make($data, Book::$updValidation);
		if ($validation->fails()) {
			return Redirect::back()->withErrors($validation)->withInput();
		}
		$extension        = Input::file('name_img')->getClientOriginalExtension();
		$destination_path = public_path() . '/storage/';
		$file_name        = Str::random(40) . '.' . $extension;
		Input::file('name_img')->move($destination_path, $file_name);
		$data['name_img']    = $file_name;
		$books       = book::create($data);
		$books->save();
		return Redirect::action('BookController@getIndex');
	} 
}
