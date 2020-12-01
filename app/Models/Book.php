<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

	protected $table = "book";
	public $timestamps = false;
	protected $fillable = [
		'id',
		'name',
		'opisanie',
		'cena',
		'date',
		'name_img',
	];

	public static $updValidation = array(
		'name' => 'required',
		'opisanie' => 'required',
		'cena' => 'required',
		'date'  => 'date_format:Y-m-d',
		'name_img' =>'required|max:5120|mimes:jpg,jpeg',
	);

}
