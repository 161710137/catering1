@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">	
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Kategori Paket
			  	<div class="panel-title pull-right"><a class="btn btn-success" href="{{ url()->previous() }}">Batal</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('kategori_paket.store') }}" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('kategori') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Paket</label>	
			  			<input type="text" name="kategori" class="form-control"  required> 
			  			@if ($errors->has('kategori'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
			  			<label class="control-label">Gambar</label>	
			  			<input type="file" name="gambar" class="form-control"  required>
			  			@if ($errors->has('gambar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gambar') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection