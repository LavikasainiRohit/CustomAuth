@extends('custom-auth::html')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <h1> User Dashboard </h1>
    </div>
    <a href="{{route('logout')}}">logout</a>
</div>

<div class="row">
    <div class="col-sm-12">
      <h1> If you see this... You are logged in!</h1>

    </div>
</div>

@endsection

