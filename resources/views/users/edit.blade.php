@extends('templates.main')
@section('title','Edit User')
@section('stylesheets')
   <link rel="stylesheet" href={{asset('assets/select2/css/select2.min.css')}}>
@endsection
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Edit User</h3>
			@include('templates.err-msg')
			<form method="post" action={{route('users.update',$user->id)}} data-toggle="validator">

				{{csrf_field()}} {{method_field('patch')}}

				<div class="form-group">
					<label>Nama:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" name="name" value="{{$user->name}}">
					</div>
				</div>

            <div class="form-group">
					<label>Username:</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" name="username" value="{{$user->username}}">
					</div>
				</div>

				<div class="form-group">
					<label>Email:</label>
					<div class="input-group">
						<span class="input-group-addon">@</span>
						<input type="text" class="form-control" name="email" value="{{$user->email}}">
					</div>
				</div>

				<div class="form-group">
					<label>Password : <sub>min 6</sub></label>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" name="password" placeholder="Kosongkan jika tidak mengganti password">
					</div>
				</div>

				<div class="form-group">
					<label>Konfirmasi Password:</label>
						<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" name="password_confirmation" placeholder="Kosongkan jika tidak mengganti password">
					</div>
				</div>

				<div class="form-group">
					<label>Level Akses:</label>
					<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
						<select name="roles[]" class="select2-multi form-control" multiple>
                     @foreach($roles as $role)
                        <option value={{$role->id}}>{{$role->name}}</option>
                     @endforeach
						</select>
					</div>
				</div>

				<button type="submit" class="btn btn-success">Update</button>
				<a href={{route('users.index')}} class="btn btn-warning">Kembali</a>
			</form>
		</div>
	</div>

   <div style="margin-bottom:15px;"></div>
@endsection

@section('scripts')
   <script type="text/javascript" src={{asset('assets/select2/js/select2.min.js')}}></script>
   <script type="text/javascript">
      $(document).ready(function() {
	        $('.select2-multi').select2();
           $('.select2-multi').select2().val({!! json_encode($user->roles()->allRelatedIds()) !!}).trigger('change');
      });
	</script>
@endsection
