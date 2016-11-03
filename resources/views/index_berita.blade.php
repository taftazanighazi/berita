@extends('layouts.app')
@section('content')

<div class="container">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
		 <div class="table-responsive">
		 	<table class="table table-bordered">
		 		<thead class="center">
		 			<tr>
		 				<th>No</th>
		 				<th>Judul Berita</th>
		 				<th>Isi Berita</th>
		 				<th>Kategori</th>
		 				<th>Tanggal</th>
		 				<th>Aksi</th>

		 			</tr>
		 		</thead>
		 		<tbody>
		 		
		 			@foreach($berita as $ber)
		 			<tr>
		 				<td width="10px">{{++$i}}</td>
		 				<td width="70px">{{$ber->judul}}</td>
		 				<td width="150px">{{$ber->isi_berita}}</td>
		 				<td width="20px">{{$ber->kategori}}</td>
		 				<td width="40px">{{$ber->created_at}}</td>
		 				<td width="50px">
		 				   <form method="POST" action="{{route('berita.destroy', $ber->id_berita)}}"     accept-charset="UTF-8">
		 					<input type="hidden" name="_method" value="DELETE">
		 					<input type="hidden" name="_token" value="{{csrf_token()}}">
		 					<a href="{{route('berita.edit',$ber->id_berita)}}" type="submit" button type="button" class="btn btn-warning">Edit</a>
		 					<input type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data?');" class="btn btn-danger" value ="Hapus"/>
		 				  </form>
		 				</td>
		 			</tr>
		 			@endforeach
		 	
		 		</tbody>
		 	</table>
                	
        {!! $berita->links('pagination') !!}
		 	<a href="{{route('berita.create')}}" button type="button" class="btn btn-info">Tambah Berita</a>
		 </div>
			

		</div>
	</div>
	
</div>
@endsection