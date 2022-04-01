@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Datang</div>

                <div class="card-body">
                    <x-avatar :user="$user" />
                    <h1> User : {{ $user->username }} - {{ $user->fullname }} </h1>
                    <p>{{ $user->bio }}</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/post/create">Upload</a>
                    <br>

                    <h3>Feed</h3>
                    @foreach ( $user->posts as $post )
                        <li>
                            <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->caption }}" width="200" height="200">
                            <a href="/post/{{ $post->id }}/edit">Edit</a>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
