@extends('layouts.app')
@section('content')

<div class="container">
 <div class="row">
   <div class="col-md-10 col-md-offset-1">
        <div class="col-md-6">
 		  <div class="panel panel-default">
 			<div class="panel-body">

 				<h4>Tambah Berita</h4>
 				{!! Form::open(['route'=>'berita.store'])!!}
 				<div class="form-group">
 				{!!Form::label('judul','Judul Berita')!!}
 				{!!Form::text('judul',null, array('class'=>'form-control','placeholder'=>'Masukkan Judul Berita'))!!}
 				</div>
 				<div class="form-group">
 				{!!Form::label('isiber','Isi Berita')!!}
 				{!!Form::textarea('isi',null, array('class'=>'form-control','placeholder'=>'masukkan isi berita'))!!}
 				</div>
 				<div class="form-group">
 				{!!Form::label('kategori','Pilih Kategori')!!}
 				{!!Form::select('kategori',$kategori,null, array('class'=>'form-control'))!!}
 				<br/>
 				</div>
                {!! Form::button('<i class="fa fa-plus-square"></i>'. ' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
                 {!! Form::button('<i class="fa fa-times"></i>'. ' Reset', array('type' => 'reset', 'class' => 'btn btn-danger'))!!}
 				
 				</div>
 				{!!Form::close()!!}
 			</div>
 		</div> 
 		</div>	
   </div>
 </div>
</div>
@endsection