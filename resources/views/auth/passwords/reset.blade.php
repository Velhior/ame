@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-50">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Set the new password</h1>
                    @if (session('status'))
                            <div class="notification is-success">
                                {{ session('status') }}
                            </div>
                    @endif
                <form action="{{route('register')}}" method="POST" role="form">
                {{csrf_field()}}
                <input type="hidden" name="token" value="{{ $token }}">
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
                <button class="button is-primary is-outlined is-fullwidth m-t-20">Set The Password</button></form>
            </div>
            
        </div>

    </div>
</div>
@endsection
