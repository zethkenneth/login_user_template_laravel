@extends('layouts.base')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                    <form action="/users/register" method="POST">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf 
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="user_lastname" class="col-form-label">Last Name:</label>
                                <input type="text" class="form-control" id="user_lastname" name="user_lastname" value={{old('user_lastname')}}>
                                <span class="text-danger">@error('user_lastname') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                    <label for="user_firstname" class="col-form-label">First Name:</label>
                                    <input type="text" class="form-control" id="user_firstname" name="user_firstname" value={{old('user_firstname')}}>
                                    <span class="text-danger">@error('user_firstname') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="user_middlename" class="col-form-label">Middle Name:</label>
                                <input type="text" class="form-control" id="user_middlename" name="user_middlename" value={{old('user_middlename')}}>
                                <span class="text-danger">@error('user_middlename') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="user_extname" class="col-form-label">Extension Name:</label>
                                <input type="text" class="form-control" id="user_extname" name="user_extname" value={{old('user_extname')}}>
                                <span class="text-danger">@error('user_extname') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="email" class="col-form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" value={{old('email')}}>
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="password" class="col-form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-6">
                                <label for="password_confirm" class="col-form-label">Confirm Password:</label>
                                <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                                <span class="text-danger">@error('password_confirm') {{$message}} @enderror</span>
                            </div>
                            <input type="hidden" name="user_type" value="Employee">
                        </div>
                        
                            <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>                       
                                    </div>
                            </div>
                        </form>
                    </div>
                        <a class="add btn btn-primary btn-sm" href="/">Back</a>                       
                </div>
            </div>
        </div>
    </div>
@endsection