@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-50">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Join the community</h1>
                <form action="{{route('register')}}" method="POST" role="form">
                {{csrf_field()}}
                <div class="field"><label for="name" class="label">Name</label>
                <p class="control"><input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="text" name="name" id="name" placeholder="John Doe" required value="{{old('name')}}"></p></div>
                <div class="field m-t-20"><label for="email" class="label">Email Address</label>
                <p class="control"><input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="name@example.com" required value="{{old('email')}}"></p>
                @if ($errors->has('email'))
                <p class="help is-danger">{{$errors->first('email')}}</p>
                @endif
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="field m-t-20"><label for="password" class="label">Password</label>
                         <p class="control"><input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" required placeholder="Type your password"></p>
                        @if ($errors->has('password'))
                        <p class="help is-danger">{{$errors->first('password')}}</p>
                        @endif
                    </div>
                </div>
                    <div class="column">
                        <div class="field m-t-20"><label for="password_confirmation" class="label">Confirm password</label>
                         <p class="control"><input class="input {{$errors->has('password-confirm') ? 'is-danger' : ''}}" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" required></p></div>
                    </div>
                
                </div>
                <button class="button is-primary is-outlined is-fullwidth m-t-20">Register</button></form>
            </div>
            <a class="has-text-centered m-l-10" href="{{route('login')}}">Already have an account?</a>
        </div>

    </div>
</div>

@endsection
