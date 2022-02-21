@extends('home')
@section('section-header','Tambah Artikel')

@section('content-admin')
	<div class="row">
		<div class="col-lg-9">
			<div class="card">
				<div class="card-body">
					 <table class="table table-bordered">
					 		<thead>
					 			<th>No</th>
					 			<th>Judul</th>
					 			<th>User</th>
					 			<th>Created At</th>
					 			<th>Aksi</th>
					 		</thead>
					 		<tbody>
					 			@foreach($posts as $value)
					 			<tr>
					 				<td>{{ $loop->iteration }}</td>
					 				<td>{{ $value->title }}</td>
					 				<td>{{ $value->name }}</td>
					 				<td>{{ Carbon\Carbon::parse($value->created_at)->format('Y-m-d') }}</td>
					 				<td></td>
					 			</tr>
					 			@endforeach
					 		</tbody>
					 </table>
				</div>
			</div>
		</div>
	</div>	
@endsection

@push('script')
@endpush