@extends('layouts.main')
@section('main')
<div class="container-fluid d-flex justify-content-center">
    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h3 class="card-title">Halaman About</h3>
            <div class="d-flex justify-content-center container-fluid" style="width: 200px;">
                <img src="img/{{ $img }}" class="rounded-circle img-thumbnail">
            </div>
            <h4 class="card-text">{{ $name }}</h4>
            <p>{{ $email }}</p>
            <a href="#" class="btn btn-primary">Show Detail</a>
        </div>
    </div>
</div>
@endsection
