@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Update Profil {{ $user->username }}</div>
                <div class="card-body">
                    <form method="POST" action="/user/edit">
                        @csrf
                        @method('PUT')

                        <x-input label="Username" name="username" :object="$user" />
                        <x-input label="Fulllname" name="fullname" :object="$user" />
                        <x-input label="Biodata" name="bio"  :object="$user" />

                        <p>
                            todo : avatar
                        </p>

                        <x-submitbtn text="Update Profil" />

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
