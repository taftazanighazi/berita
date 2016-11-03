@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			   <div class="col-md-6">
				    <div class="panel panel-default">
						<div class="panel-body">
							<h4>Edit Berita</h4>
							{!!Form::model($berita,['method'=>'PATCH','action'=>['BeritaController@update',$berita->id_berita]])!!}
							<div class="form-group">
							{!!Form::label('judul','Judul Berita')!!}
							{!!Form::text('judul',null)!!}
							</div>
							<div class="form-group">
							{!!Form::label('isi','Isi Berita')!!}
							{!!Form::textarea('isi_berita',null,array('class'=>'form-control'))!!}
							</div>
							<div class="form-group">
							{!!Form::label('kategori', 'pilih kategori')!!}
	                        {!!Form::select('id_kategori', $k ,null , array('class' => 'form-control'))!!}
	                            </br>
							</div>
							{!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
							{!! Form::close()!!}
						    </div>
						
							
						</div>
				    </div>
					
				</div>
			</div>
				
			
		</div>
		
	</div>
		@endsection
