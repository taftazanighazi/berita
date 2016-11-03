@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
	<div class="col-md-10 col-md-offset-1">
	  <div class="panel panel-default">
	  <div class="table-responsive">
	  	<h4>Tambah Kategori</h4>
	  	{!! Form::open(['route'=>'kategori.store'])!!}
	  	{!! Form::text('kategori',null,['placeholder'=>'Masukkan nama kategori'])!!}
	  	{!! Form::submit('simpan')!!}
	  	{!! Form::close()!!}
	  </div>
</div>
</div>
</div>
</div>
@endsection