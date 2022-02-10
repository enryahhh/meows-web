@extends('home')
@section('section-header','Tambah Artikel')

@section('content-admin')
	<div class="row">
		<div class="col-lg-9">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('post-admin.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('POST')
							<div class="form-group">
									<label for="">Judul</label>
									<input class="form-control" type="text" name="title">
							</div>

							<div class="form-group">
								<label for="">Konten</label>
								<textarea name="content"></textarea>
							</div>

							<button type="submit" class="btn btn-primary">Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>	
@endsection

@push('script')
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
                        CKEDITOR.replace( 'content',options);
                </script>
@endpush