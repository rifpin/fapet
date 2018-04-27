@extends('templates.main')
@section('title','Tambah User')
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@include('templates.err-msg')
			<h3>Tambah User</h3>
			<form method="post" action={{route('register')}}>
				{{csrf_field()}}

				<div class="form-group">
			      	<label>Nama Lengkap:</label>
				    <div class="input-group">
				        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				        <input type="text" class="form-control" name="name" required="" autofocus="">
				    </div>
				</div>

			   	<div class="form-group">
			      	<label>Username:</label>
				    <div class="input-group">
				        <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
				        <input type="text" class="form-control" name="username" required="">
				    </div>
				</div>

			    <div class="form-group">
			      	<label>Email:</label>
				    <div class="input-group">
				        <span class="input-group-addon">@</span>
				        <input type="text" class="form-control" name="email" required="">
				    </div>
				</div>

		    	<div class="form-group">
		      		<label>Password:</label>
		      		<div class="input-group">
		        		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		        		<input type="password" class="form-control" name="password" required="" placeholder="min 6">
		      		</div>
		    	</div>

		  	    <div class="form-group">
		      		<label>Konfirmasi Password:</label>
		      		<div class="input-group">
		        	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		        		<input type="password" class="form-control" name="password_confirmation" required="">
		      		</div>
		    	</div>

		    	<button type="submit" class="btn btn-success" name="submit">Submit</button>
		    	<a href={{url('/')}} class="btn btn-warning">Batal</a>

			</form>
		</div>
	</div>
@endsection

@section('scripts')
<script>
	$('#datepicker').datepicker({
		    dateFormat:'yy-mm-dd',
		    inline : true,
		    changeMonth:true,
		    changeYear:true,
		    yearRange:'1945:2050',
		    altField : '#hiddenFieldID',
	});
</script>
@endsection
