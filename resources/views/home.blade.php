@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Datang</div>

                    <h3>Feed</h3>
                    @foreach ( $user->posts as $post )
                        <li>
                            <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->caption }}" width="200" height="200">
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
