<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pokemons</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
    {{-- <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}
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
            <div class="col-3" id="pname">
                {{-- <h1>Players</h1> --}}
                <h1><img class="playericon" src="/img/favicon.png" alt=""></h1>
                <br>
                @foreach ($players as $player)
                <h4> <a
                        href='/{{$player->PlayerName}}'>{{$player->PlayerName}}</a>
                </h4>
                @endforeach
            </div>
            {{-- <div id="data"></div> --}}
            <div class="col-6">
                <div class="spinner-border text-primary" id="spinner">
                    <span class="sr-only">Loading...</span>
                </div>
                @if(@isset($name))
                <h2>{{$name}}</h2>
                <p>{{$desc->Description}}<br></p>
                @else
                <h2>Choose a Pokemon!<br>Add a Pokemon!</h2>
                <h4>The air temperature is <span id="data"></span> &#176C in
                    <br>
                    WEST Pokemon-land now!</h4>
                @endif
            </div>
            <div class="col-3" id="picpic">
                @if(@isset($name))
                <form method="post" action="{{route('deletePlayer')}}">
                    @csrf
                    <div class="mt-2">
                        {{-- <input class="btn btn-info" type="button"
                            value="Hide Pic." id="hidebtn"
                            onclick="changeVis()"> --}}
                        <input class="btn btn-info" type="button"
                            value="Toggle Picture" id="hidebtn">
                        <input class="btn btn-danger" type="submit"
                            name="delete" value="Delete Pokemon">
                    </div>
                    <img id="hide"
                        src="{{asset('uploads/player/' . $desc->Image)}}"
                        alt="Image" height="200">
                    <textarea style="visibility: hidden;"
                        name="nameDEL">{{$name}}</textarea>
                </form>
                @else

                @endif
            </div>
        </div>
    </div>

    <script type="text/javascript">
        // function changeVis() {
        //         document.getElementById("hide").style.visibility = "hidden";
        //         document.getElementById("hidebtn").value = "Show Pic";
        //         document.getElementById("hidebtn").onclick = function() { swapVis(); };
        //     }

            // function swapVis() {
            //     document.getElementById("hide").style.visibility = "visible";
            //     document.getElementById("hidebtn").value = "Hide Pic";
            //     document.getElementById("hidebtn").onclick = function() { changeVis(); };
            // }

            // var show = true;
            // $(document).ready(function(){
            //     if(show){
            //       $("input").click(function(){
            //         $("img").toggle();
            //         // document.getElementById("hidebtn").value = "Show Pic";
            //         $("#hidebtn").value = "Show Pic";
            //         var show = false;
            //       });
            //     }else{
            //         $("input").click(function(){
            //         $("img").toggle();
            //         // document.getElementById("hidebtn").value = "Hide Pic";
            //         $("#hidebtn").value = "Hide Pic";
            //         var show = true;
            //       });
            //     }
            // });

            $(document).ready(function() {
                  $("input").click(function(){
                    $("img").toggle()
                });
            });
    </script>

    <script src="{{ asset('js/apispinner.js') }}"></script>
    <script src="{{ asset('js/imgload.js') }}"></script>
</body>

</html>
