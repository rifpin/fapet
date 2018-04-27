@extends('templates.main')
@section('title','Home')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Halaman Utama</h3>
            {{DateId::getDayDateId(date('Y-m-d'))}}
        </div>
    </div>
@endsection
