@extends('layouts.default')

@section('content')
<div class="app-wrap">
    <header id="header" class="landing-max-width">
    <div class="container">
        <h1>Admin</h1>
        <x-menu />
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

    <x-footer />
</div>
@stop
