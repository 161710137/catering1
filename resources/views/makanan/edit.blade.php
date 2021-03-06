@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Makanan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Batal</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('makanan.update',$makanan->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}

			  		<div class="form-group {{ $errors->has('makanan') ? ' has-error' : '' }}">
			  			<label class="control-label">makanan</label>	
			  			<input type="text" name="makanan" class="form-control" value="{{ $makanan->makanan }}" required>
			  			@if ($errors->has('makanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('makanan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('id_kategori_makanan') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Makanan</label>	
			  			<select name="id_kategori_makanan" class="form-control">
			  				@foreach($kategori_makanan as $data)
			  				<option value="{{ $data->id }}" {{ $selectedKategori_Makanan == $data->id ? 'selected="selected"' : '' }} >{{ $data->kategori_makanan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_kategori_makanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kategori_makanan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Perbarui</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection