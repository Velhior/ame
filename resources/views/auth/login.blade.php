@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-50">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Log In</h1>
                <form action="{{route('login')}}" method="POST" role="form">
                {{csrf_field()}}
                <div class="field"><label for="email" class="label">Email Address</label>
                <p class="control"><input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}"></p>
                @if ($errors->has('email'))
                <p class="help is-danger">{{$errors->first('email')}}</p>
                @endif
                </div>
                <div class="field m-t-20"><label for="password" class="label">Password</label>
                <p class="control"><input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" placeholder="Type your password"></p>
                @if ($errors->has('password'))
                <p class="help is-danger">{{$errors->first('password')}}</p>
                @endif
                </div>
                <b-checkbox class="m-t-5" name="remember">Remember Me</b-checkbox>
                <button class="button is-primary is-outlined is-fullwidth m-t-20">Log In</button></form>
            </div>
            <a class="has-text-centered m-l-10" href="{{route('password.request')}}">Forgot password?</a>
        </div>

    </div>
</div>
@endsection
