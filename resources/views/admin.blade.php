@extends('layouts.default')

@section('content')
<div class="app-wrap">
    <header id="header" class="landing-max-width">
    <div class="container">
        <h1>Admin</h1>
    </div>
    </header>

    <main id="content" role="main" class="landing-max-width">
        <div class="container">
            <div class="inset">


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

    {{-- https://www.positronx.io/laravel-file-upload-with-validation/ --}}
                <div class="custom-file add-bottom">
                    <label class="custom-file-label" for="chooseFile">Select file</label>
                    <input type="file" name="file" class="custom-file-input" id="chooseFile">
                </div>

                <button type="submit" name="submit">
                    Upload Files
                </button>
            </form>


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
