@extends('custom-auth::html')

@section('content')
<div class="row" style="justify-content:center; margin-top:105px;">
    <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
        <h4> Register User</h4>
        <hr>
        <form action="{{ route('register.attempt') }}" method="post">
            @csrf
            <div class="form-group">
            <input type="text"  class="form-control" name="name" value="{{ old('name') }}" placeholder="Name">
            <span> @error('name') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
            <input type="email"  class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
            <span>  @error('email') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
            <input type="password"  class="form-control" name="password" value="{{ old('password') }}" placeholder="Password">
            <span>@error('password') {{ $message }} @enderror </span>
            </div>
            <div class="form-group">
            <input type="password"  class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Password Confirm">
            </div>
            <div class="form-group">
            <button  class="btn btn-primary" type="submit">
                Register
            </button>
            </div>
            <a href="login"><u>Already User !! Login Here.</u> </a>
        </form>

    </div>
</div>

@endsection

