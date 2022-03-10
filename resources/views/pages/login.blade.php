@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                    <form action="/users/login" method="POST">
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf 
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value={{old('email')}}>
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="password" class="col-form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
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