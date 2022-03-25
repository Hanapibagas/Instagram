@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Update Profil {{ $user->username }}</div>
                <div class="card-body">
                    <form method="POST" action="/user/edit" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <x-input label="Username" name="username" :object="$user" />
                        <x-input label="Fulllname" name="fullname" :object="$user" />
                        <x-input label="Biodata" name="bio" :object="$user" />

                        <div class="row mb-3">
                            <label for="avatar" class="col-md-4 col-form-label text-md-end"> Avatar </label>

                            <div class="col-md-6">
                                <input type="file" name="avatar" id="avatar" />
                            </div>

                        </div>

                        <x-submitbtn text="Update Profil" />

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
