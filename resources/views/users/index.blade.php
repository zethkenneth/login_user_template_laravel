@extends('layouts.base')

@section('content')
<div class="container"><br />
        <h4>Users</h4>
        <div>
            <p style="color:green;">{{ session('mssg') }}</p>
        </div>
        <a class="add btn btn-primary btn-sm" href="/users/create">Add New User</a>
</div>
@endsection