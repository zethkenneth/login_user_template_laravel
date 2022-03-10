@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create user</div>
                    <div class="card-body">
                    <h5 class="card-title">User</h5>
                    <form action="/users/store" method="POST">
                    @csrf 
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="user_lastname" class="col-form-label">Last Name:</label>
                            <input type="text" class="form-control" id="user_lastname" name="user_lastname">
                            <span class="text-danger">@error('user_lastname') {{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                                <label for="user_firstname" class="col-form-label">First Name:</label>
                                <input type="text" class="form-control" id="user_firstname" name="user_firstname">
                                <span class="text-danger">@error('user_firstname') {{$message}} @enderror</span>
                         </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="user_middlename" class="col-form-label">Middle Name:</label>
                            <input type="text" class="form-control" id="user_middlename" name="user_middlename">
                            <span class="text-danger">@error('user_middlename') {{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="user_extname" class="col-form-label">Extension Name:</label>
                            <input type="text" class="form-control" id="user_extname" name="user_extname">
                            <span class="text-danger">@error('user_extname') {{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
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
                        <div class="col-md-12">
                            <label for="employee_name" class="col-form-label">User Type</label>
                            <select class="custom-select" id="user_type" name="user_type">
                                <option value="0" disabled="true" selected="true">Select User Type</option>
                                <option value="Admin">Admin</option>
                                <option value="Employee">Employee</option>
                            </select>
                            <span class="text-danger">@error('user_type') {{$message}} @enderror</span>
                      </div>
                    </div>
                    
                        <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>                       
                                </div>
                        </div>
                    </form>
                 </div>
                        <a class="add btn btn-primary btn-sm" href="/users">Back</a>                       
                </div>
            </div>
        </div>
    </div>
@endsection