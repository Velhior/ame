@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-50">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Reset password</h1>
                @if (session('status'))
                        <div class="notification is-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="{{route('password.email')}}" method="POST" role="form">
                {{csrf_field()}}
                <div class="field"><label for="email" class="label">Email Address</label>
                <p class="control"><input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}"></p>
                @if ($errors->has('email'))
                <p class="help is-danger">{{$errors->first('email')}}</p>
                @endif
                </div>
                
                <button class="button is-primary is-outlined is-fullwidth m-t-20">Send Password Reset Link</button></form>
            </div>
            <div class="field is-grouped is-grouped-centered"><a class="is-small m-b-10" href="{{ route('login') }}"><i class="fa fa-chevron-circle-left"></i> Back to login</a></div>
            
        </div>

    </div>
</div>
@endsection
