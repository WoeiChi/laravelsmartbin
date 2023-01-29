<!DOCTYPE html>
<html>
<meta http-equiv="refresh" content="10" > 

<head>
    <title>Smart Bin System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>

<body>
    <div class="containter">
        
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand">
                <img src="https://as1.ftcdn.net/v2/jpg/04/95/41/16/1000_F_495411688_V72v2znLN7H0KzMLnHtvLiuQM1dHhOoA.jpg"
                    width="30" height="30" class="d-inline-block align-top" alt="">
                Smart Bin System
            </a>
    </div>
    </nav>

    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://img.freepik.com/free-vector/trash-bins-separate-recycle-garbage-containers-sort-plastic-glass-paper-metal-organic-waste-recycling-flat-different-colors-rubbish-cans-sorting-segregation-litter_88138-895.jpg?w=1800&t=st=1669570794~exp=1669571394~hmac=440c7ec0adbad121f69583edfafa132df394bfa1f24d622083c9403ade969bcc"
                    class="d-block w-100" height="500" alt="...">
                <br><br><br><br><br>
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="text-muted"><b>What is Recycle</b></h4>
                    <h5 class="text-muted">Recycling is the process of collecting and processing materials that
                        would
                        otherwise be thrown away as trash and turning them into new products. Recycling can benefit
                        your community and the environment.</h5>
                    <p class="text-muted"></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://wallpapercave.com/wp/wp2529207.jpg" class="d-block w-100" height="500" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="text-body"><b>The Impact of Paper Waste</b></h4>
                    <br>
                    <h6 class="text-body">The costs of using paper inefficiently in the workplace are too
                        significant to be ignored. The expenses from supplies such as toner and paper, as well as
                        equipment maintenance can add up fast. Perhaps more significant than these costs is all the
                        staff time wasted adjusting printers and copiers, filing documents, and then trying to find
                        them again—often just to throw them away. </h6>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://wallpapercave.com/wp/wp5075828.jpg" class="d-block w-100" height="500" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4><b>Plastic In The Ocean</b></h4>
                    <br>
                    <h6>The problem of plastic in nature, particularly in our oceans, is a global crisis. Every
                        minute, about a dump-truck load of plastic goes into the oceans, sullying beaches, hurting
                        wildlife, and contaminating our food supply. </h6>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br><br><br>
    @yield('content')
    <br><br><br>

    <div class="p-1 mb-2 bg-dark text-white">
        <p class="text-center">CopyRight © 2022 UMP All Right Reserved</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
</html>