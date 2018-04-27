@extends('templates.main')
@section('title','Daftar User')
@section('content')
<div class="row">
	<div class="col-md-12">
		@include('templates.err-msg')
		<h3>Daftar User</h3>
		<div class="table-responsive">
		<table class="table table-striped table-hover table-condensed cf">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Email</th>
					<th>Level</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->username}}</td>
						<td>{{$user->email}}</td>
						<td>
		              @foreach($user->roles as $role)
		                  {{$role->name}}
		              @endforeach
		            </td>
						<td>
							<a href={{route('users.edit',$user->id)}} class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit / Reset Password / Level">
								<span class="fa fa-edit"></span>
							</a>
							<a href={{route('users.delete',$user->id)}} class="btn btn-xs btn-danger" data-toggle="tooltip" title="Delete / Hapus user">
								<span class="glyphicon glyphicon-trash"></span>
							</a>
					</tr>
				@endforeach
			</tbody>
		</table>
		</div>

		<a href={{route('register')}} class="btn btn-default">
			<i class="fa fa-plus"></i> Tambah User
		</a>

	</div>
</div>
@endsection
