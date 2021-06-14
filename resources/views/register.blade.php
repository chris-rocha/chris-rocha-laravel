@extends('layouts.default')

@section('content')
<div class="app-wrap">
    <header id="header" class="landing-max-width">
    <div class="container">
        <h1>Register</h1>
        <x-menu />
    </div>
    </header>

    <main id="content" role="main" class="landing-max-width">
        <div class="container">
            <div class="inset">


            <form action="{{route('register')}}" method="post">
                @csrf
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
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
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}">
                </div>
                <div class="add-bottom">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}">
                </div>
                <div class="add-bottom">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="">
                </div>
                <div class="add-bottom">
                    <label for="password_confirmation">Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" value="">
                </div>



                <button type="submit" name="submit">
                    Register
                </button>
            </form>


            </div>
        </div>
    </main>

    <x-footer />
</div>
@stop
