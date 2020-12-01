@extends('layouts')
@section('main_contets')

<?php $disabled = 'disabled' ?>
@if( $disabled == 1 && Auth::user()->isInput() )
<?php $disabled = '' ?>
@endif



<img width="1000" src="{{ asset('storage/' . $book->name_img) }}" /> 

@if( isset( $book ) )

<div class="form-group">
	<label for="name" class="col-sm-3 control-label text-white">Наименование</label>
	<div class="col-sm-7">
		{{ Form::text('name',    $book->name,   array('class' => 'form-control','disabled')) }}
	</div>

	<label for="opisanie" class="col-sm-3 control-label text-white">Описание</label>
	<div class="col-sm-7">
		{{ Form::text('opisanie',    $book->opisanie,   array('class' => 'form-control','disabled')) }}
	</div>

	<label for="cena" class="col-sm-3 control-label text-white">Цена</label>
	<div class="col-sm-7">
		{{ Form::text('cena',    $book->cena,   array('class' => 'form-control','disabled')) }}
	</div>

	<label for="date" class="col-sm-3 control-label text-white">Дата создания</label>
	<div class="col-sm-7">
		{{ Form::date('date',    $book->date,   array('class' => 'form-control','disabled')) }}
	</div>

	{{ Form::hidden('id',  $book->id) }}


	{{ Form::close() }}
	@endif
	@endsection
