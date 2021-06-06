<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Chris Rocha</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Chris Rocha is a Tampa, Florida native that specializes in web development and graphic design.">
        <meta name="google-site-verification" content="AEtWKrxgD3wzvwVUHijRJ4-PhfhxqqUrbP9letoK_HM" />
        <link media="screen" href="https://fonts.googleapis.com/css?family=Noto+Sans+HK:400,900|Material+Icons&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
        <style><?php include public_path('css/style.css'); ?></style>
    </head>
    <body>

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
                <strong>{{ $message }}</strong>
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
            <div class="custom-file">
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



        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
