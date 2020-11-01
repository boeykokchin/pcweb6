<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pokemon - Upload</title>
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <link rel="stylesheet" href="style.css" type="text/css">
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

    <div class="container">
        <div class="row">
            {{-- <div class="col-2"></div> --}}
            <div class="text-center">
                <form method="post" enctype="multipart/form-data"
                    action="{{ route('addUpload')}}">
                    @csrf
                    <h2>Pokemon</h2>
                    <input class="player" type="text" name="player">
                    <h2>Characteristics</h2>
                    <textarea class="desc" name="description"></textarea>
                    <input class="btn btn-info" type="file" name="image">
                    <input class="btn btn-primary" type="submit" value="Submit"
                        name="upload">
                </form>
            </div>
            {{-- <div class="col-2"></div> --}}
        </div>
    </div>

</body>

</html>
