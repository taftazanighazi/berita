@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="table-responsive">
						<h4>EDIT</h4>
						{!!Form::model($kategori,['route'=>['kategori.update',$kategori->id_kategori],'method'=>'PATCH'])!!}
						{!!Form::text('kategori',null)!!}
						{!!Form::submit('Ubah')!!}
						{!!Form::close()!!}
						@endsection
					</div>
				</div>
			</div>
		</div>
	</div>