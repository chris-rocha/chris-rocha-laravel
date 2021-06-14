@extends('layouts.default')

@section('content')
<div class="app-wrap">
    <header id="header" class="landing-max-width">
    <div class="container">
        <h1>Login</h1>
        <x-menu />
    </div>
    </header>

    <main id="content" role="main" class="landing-max-width">
        <div class="container">
            <div class="inset">


            <form action="{{route('login')}}" method="post">
                @csrf
                @if ($message = Session::get('status'))
                <div class="alert alert-danger">
                    <ul>
                    <li>{{ $message }}</li>
                    </ul>
                </div>
                @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <div class="add-bottom">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}">
                </div>
                <div class="add-bottom">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="">
                </div>

                <div class="add-bottom" style="display:flex;">
                    <input type="checkbox" name="remember" id="remember">
                    <label style="margin-left: 10px" for="remember">Remember me</label>
                </div>

                <button type="submit" name="submit">
                    Login
                </button>
            </form>


            </div>
        </div>
    </main>

    <x-footer />
</div>
@stop
