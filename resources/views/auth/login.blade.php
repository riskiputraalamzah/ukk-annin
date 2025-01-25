@extends('layouts.auth', ['title' => 'Login'])

@section('content')
<div class="card card-authentication1 mx-auto my-5">
    <div class="card-body">
        <div class="card-content p-2">
            <div class="text-center">
                <img src="assets/images/logo-icon.png" alt="logo icon">
            </div>
            <div class="card-title text-uppercase text-center py-3">Sign In</div>
            <form action="{{route('login')}}" method="post">

                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="form-group">
                    <label for="exampleInputUsername" class="sr-only">Email</label>
                    <div class="position-relative has-icon-right">
                        <input autocomplete="off" name="email" type="email" id="exampleInputEmail" class="form-control input-shadow" placeholder="Enter Email">
                        <div class="form-control-position">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword" class="sr-only">Password</label>
                    <div class="position-relative has-icon-right">
                        <input autocomplete="off" name="password" type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password">
                        <div class="form-control-position">
                            <i class="icon-lock"></i>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-light btn-block">Sign In</button>

            </form>
        </div>
    </div>

</div>

@endsection