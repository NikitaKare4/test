@extends('layouts')
@section('main_contets')

<div class="d-flex flex-wrap">			

  @foreach($books as $book)

  <div class="card mb-4 shadow-sm">
    <div class="card-body ">

      <img width="300" src="{{ asset('storage/' . $book->name_img) }}" /> 

      <ul class="list-unstyled mt-3 mb-4">
        <li>Название: {{{ $book->name }}}</li>
        <li>Описание: {{{ $book->opisanie }}}</li>
        <li>Цена: {{{ $book->cena }}}</li>
      </ul>

      <button type="button" class="btn btn-lg btn-block btn-outline-primary">
        {{ link_to_action('BookController@getSelect', 'Подробно', array('id' => $book->id)) }}
      </button> 
    </div>
  </div>

  @endforeach
</div>
@endsection
