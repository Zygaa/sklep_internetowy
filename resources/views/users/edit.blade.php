@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edycja danych użytkownika {{ $user->email }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Miasto</label>

                            <div class="col-md-6">
                                <input id="name" type="text" maxlength="500" class="form-control @error('name') is-invalid @enderror" name="address[city]" value="@if($user->hasAddress()){{ $user->address->city }}@endif" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-end">Kod pocztowy</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" maxlength="500" class="form-control @error('zip_code') is-invalid @enderror" name="address[zip_code]" value="@if($user->hasAddress()){{ $user->address->zip_code }}@endif" required autocomplete="zip_code" autofocus>

                                @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="street" class="col-md-4 col-form-label text-md-end">Ulica</label>

                            <div class="col-md-6">
                                <input id="street" type="text" maxlength="500" class="form-control @error('street') is-invalid @enderror" name="address[street]" value="@if($user->hasAddress()){{ $user->address->street }}@endif" required autocomplete="street" autofocus>

                                @error('street')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="street_no" class="col-md-4 col-form-label text-md-end">Numer ulicy</label>

                            <div class="col-md-6">
                                <input id="street_no" type="text" maxlength="500" class="form-control @error('street_no') is-invalid @enderror" name="address[street_no]" value="@if($user->hasAddress()){{ $user->address->street_no }}@endif" required autocomplete="street_no" autofocus>

                                @error('street_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="home_no" class="col-md-4 col-form-label text-md-end">Numer domu</label>

                            <div class="col-md-6">
                                <input id="home_no" type="text" maxlength="500" class="form-control @error('home_no') is-invalid @enderror" name="address[home_no]" value="@if($user->hasAddress()){{ $user->address->home_no }}@endif" required autocomplete="home_no" autofocus>

                                @error('home_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0" style="">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Zapisz
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
