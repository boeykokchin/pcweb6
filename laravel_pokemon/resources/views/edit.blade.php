<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pokemon - Edit</title>
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <link rel="stylesheet" href="<?php echo asset('style.css')?>"
        type="text/css">
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js">
    </script>

</head>

<body id="index-body" class="container">
    <?php include("navbar.php"); ?>

    <div class="container text-center">
        <div class="row">
            <div class="col-3">
                {{-- <h1>Players</h1><br> --}}
                <h1><img class="playericon" src="img/favicon.png" alt="">
                </h1>
                <br>
                @foreach ($players as $player)
                <h4> <a
                        href='/edit/{{$player->PlayerName}}'>{{$player->PlayerName}}</a>
                </h4>
                @endforeach
            </div>
            <div class="col-9">
                <div class="container">
                    @if(@isset($name))
                    <form class="container text-center" method="post"
                        enctype="multipart/form-data"
                        action="{{ route('editPlayer')}}">
                        @csrf
                        <h2>Pokemon</h2>
                        <input class="player" type="text" name="player"
                            value="{{$name}}">
                        <h2>Characteristics</h2>
                        <textarea class="desc"
                            name="description">{{$desc->Description}}</textarea>
                        <input class="btn btn-info" type="file" name="image">
                        <input class="btn btn-primary" type="submit"
                            value="Submit" name="upload">
                        <textarea name="oldplayer"
                            style="visibility: hidden;">{{$name}}</textarea>
                    </form>
                    @else
                    <h2>Choose a Pokemon to edit!</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/imgload.js') }}"></script>
</body>

</html>
