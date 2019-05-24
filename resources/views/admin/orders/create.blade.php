@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col">
			<h4>Memasukan Alamat</h4>

			<br />
			@if(count($errors))
			<div class="form-group">
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			</div>
			@endif
			<br />

			<form action="{{ route('admin.orders.store') }}" method="POST">
            {{ csrf_field() }}
				<div class="form-group">
					<label>Alamat Pengiriman</label>
					<textarea name="shipping address" class="form-control" id="ckview" rows="3" placeholder="Alamat Pengiriman"></textarea>
				</div>
				<div class="form-group">
					<label>Kode Pos</label>
					<input type="number" name="zip_code" class="form-control" placeholder="Kode Pos">
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
@endsection

<script src="{{url('plugins/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{url('plugins/tinymce/tinymce.min.js')}}"></script>
<script>tinymce.init({ selector: '#ckview' });</script>