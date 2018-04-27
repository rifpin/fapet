@extends('templates.main')
@section('title','Login')
@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default" style="margin-top: 30px;">
			<div class="panel-body">
			<h3 style="margin-top: 0px;">Login</h3>
			<form method="post" action={{route('login')}}>

				{{csrf_field()}}

			   	<div class="form-group">
				    <div class="input-group">
				        <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
				        <input type="text" class="form-control" name="email" placeholder="Username / E-mail" required="" autofocus="">
				    </div>
				</div>

		    	<div class="form-group">
		      		<div class="input-group">
		        		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		        		<input type="password" class="form-control" name="password" placeholder="Password" required="">
		      		</div>
		    	</div>

		  	    <button class="btn btn-primary" name="submit">Submit</button>

			</form>
			</div>
			</div>
		</div>
	</div>

@endsection
