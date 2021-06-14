@extends('layouts.default')

@section('content')
<div class="app-wrap">
    <header id="header" class="landing-max-width">
    <div class="container">
        <h1>Admin</h1>
        <ul class="menu">
            <li><a href="{{ route('spa') }}">Home</a></li>
            <li><a class="router-link-active {{ (request()->is('admin')) ? 'router-link-exact-active' : '' }}" href="{{ route('admin') }}">Admin</a></li>
            @guest
            <li><a class="router-link-active {{ (request()->is('register')) ? 'router-link-exact-active' : '' }}" href="{{ route('register') }}" class="">Register</a></li>
            <li><a class="router-link-active {{ (request()->is('login')) ? 'router-link-exact-active' : '' }}" href="{{ route('login') }}" class="">Login</a></li>
            @endguest
            @auth
            <li>
                <form class="remove-bottom" action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="unstyle">Logout</button>
                </form>
            </li>
            @endauth
        </ul>
    </div>
    </header>

    <main id="content" role="main" class="landing-max-width">
        <div class="container">
            <div class="inset">

        @auth
            <form action="{{route('admin')}}" method="post" enctype="multipart/form-data">
            <h3 >Upload File in Laravel</h3>
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
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type">
                </div>

    {{-- https://www.positronx.io/laravel-file-upload-with-validation/ --}}
                <div class="custom-file add-bottom">
                    <label class="custom-file-label" for="chooseFile">Thumb</label>
                    <input type="file" name="file" class="custom-file-input" id="chooseFile">
                </div>

                <button type="submit" name="submit">
                    Upload Files
                </button>
            </form>
        @endauth

        @guest
            <p>Users must <a href="{{ route('login') }}">login</a> to adminster site.</p>
        @endguest

            </div>
        </div>
    </main>

    <footer id="footer" class="landing-max-width">
    <div class="container">
        <hr />
    </div> <!--close sitewrap-->
    </footer> <!--close footer-->
</div>
@stop
