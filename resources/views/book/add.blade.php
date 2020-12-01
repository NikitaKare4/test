@extends('layouts')
@section('main_contets')

<h2 class="my-0 mr-md-auto text-warning font-weight-normal">Добавление книги</h2>

{{ Form::open(array('url' => action('BookController@postAdd'), 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal','files'=>true)) }}

<div class="form-group">

  <label for="name" class="col-sm-2 text-white control-label">Название</label>
  <div class="col-sm-5">
    {{ Form::text('name', null, array('class' => 'form-control','maxlength'=>200)) }}
  </div>

  <label for="opisanie" class="col-sm-2 text-white control-label">Описание</label>
  <div class="col-sm-5">
    {{ Form::text('opisanie', null, array('class' => 'form-control','maxlength'=>1000)) }}
  </div>

  <label for="cena" class="col-sm-2 text-white control-label">Цена</label>
  <div class="col-sm-5">
    {{ Form::text('cena', null, array('class' => 'form-control','maxlength'=>1000)) }}
  </div>

  <label for="date" class="col-sm-2 text-white control-label">Дата</label>
  <div class="col-sm-5">
    {{ Form::input('date', 'date', date("Y-m-d"), array('class' => 'form-control input-sm', 'required')) }}
  </div>

<br>

<div class="form-group">
  <div class="col-sm-offset-2 text-warning col-sm-5">
    {{ Form::file('name_img', array('accept'=>".jpg,jpeg")) }}
  </div>
</div>

<div class="form-group">
  <div class="col-sm-3">&nbsp;</div>
  <div class="col-sm-5">
    <button type="submit" class="btn btn-outline-warning" >Сохранить</button>
    {{ link_to_action('BookController@getIndex', 'Отмена', null, array('class' => "btn btn-outline-warning")) }}
  </div>
</div>
{{ Form::close() }}

@endsection
