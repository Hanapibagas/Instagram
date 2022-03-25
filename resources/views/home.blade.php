@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Datang</div>

                <div class="card-body">
                    <img src="{{ asset('images/avatar/' . $user->avatar) }}" alt="Foto profil {{ $user->username }}" width="150">
                    <h1> User : {{ $user->username }} - {{ $user->fullname }} </h1>
                    <p>{{ $user->bio }}</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hallo
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
