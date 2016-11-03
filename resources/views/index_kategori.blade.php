@extends('layouts.app')
@section('content')

<div class="container">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
					   <tr>
						<th>No</th>
						<th>Nama Kategori</th>
		 				<th>Aksi</th>

						</tr>
					</thead>
					<tbody>
					<?php
					$no=1;
					?>
						@foreach($kategori as $kategori)
						<tr>
							<td width="10px">{{$no++}}</td>
							<td width="150px">{{$kategori->kategori}}</td>
							<td width="150px"><form method="POST" action="{{route('kategori.destroy',$kategori->id_kategori)}}" accept-charset="UTF-8">
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<a href="{{route('kategori.edit', $kategori->id_kategori)}}" type="submit" button type="button" class="btn btn-warning">Edit</a>
							<input type="submit" onclick="return confirm('Anda yakin akan menghapus data?');" button type="button" class="btn btn-danger" value="Hapus"/>
							</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<a href="{{route('kategori.create')}}" button type="button" class="btn btn-info">Tambah Kategori</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection