@extends('custom-auth::html')

@section('content')

<div class="row" style="justify-content:center; margin-top:105px;">
    <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
        <h4> Log In</h4>
        <hr>
       <form action="{{route('login-user')}}" method="post">
         @if(Session::has('success'))
         <div class="alert alert-success">{{Session::get('success')}}</div>
         @endif
         @if(Session::has('fail'))
         <div class="alert alert-danger">{{Session::get('fail')}}</div>
         @endif
         @csrf
           <div class="form-group">
             <label for="email">Email</label>
             <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email Address"
             value="{{old('email')}}" required>
         </div>
         <div class="form-group">
             <label for="password">Password</label>
             <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password"
             value="" required>
         </div>
         <br>
         <div class="form-group">
            <button class="btn btn-block btn-primary" type="submit">Log In</button>
         </div>
         <br>
         <a href="register"><u>New User !! Register Here.</u> </a>

       </form>
    </div>
</div>
@endsection

