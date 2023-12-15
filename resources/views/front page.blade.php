<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        header {
            height: 360px;
            z-index: 10;
        }

        .header-banner {
            background-color:white;
            background-image:;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 20%;
            width: 100%;
            height: 300px;
        }

        header h1 {
            background-color: rgba(18, 72, 120, 0.8);
            border-bottom-left-radius: 15px;
            border-top-right-radius: 15px;
            color: #fff;
            padding: 0 1rem;
            position: absolute;
            top: 2rem;
            left: 2rem;
        }



        nav {
            width: 100%;
            height: 60px;
            background: #292f36;

            z-index: 10;
        }





        nav ul {
            list-style-type: none;
            margin: 0 2% auto 0;
            padding-left: 0;
            text-align: right;
            max-width: 100%;
            position: relative;
        }

        nav ul li {
            display: inline-block;
            line-height: 60px;
            margin-left: 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #a9abae;
            padding: 10px;
        }


        body {
            color: #292f36;
            font-family: 'Times New Roman', Times, serif;
            line-height: 1.6;
        }

        nav ul li a:hover {
            background-color: #ccc;
            border-radius: 5em;
            color: #292f36;
        }

        nav ul li ul {
            position: absolute;
            background-color: #ccc;
            border-radius: 1em;
            text-align: center;
            z-index: 1;
        }

        nav ul li ul li {
            display: block;
            width: 200px;
            line-height: 30px;


        }

        nav ul li ul li a {
            color: #292f36;
            display: none;

        }

        nav ul li ul li a:hover {
            background-color: #292f36;
            border-radius: 1em;
            color: #ccc;

        }

        nav ul li:hover ul li a {
            display: block;
        }

        .products h5 a b:hover {
            color: rgb(90, 88, 88);
            text-decoration: underline;
        }
    </style>
</head>

<body>



    <header>
        <div class="header-banner"   img src="{{asset('image/mechanic logo.jpg')}}">
            <h1>THARIK BIKE SERVICE</h1>
        </div>
        <div class="clear"></div>
        <nav>

            <ul>
                <li><a href="index.html"><b>HOME</b></a></li>
                <li><a href=""><b>PRODUCTS</b></a>
                    <ul>
                        <li><a href="Baby Kit Box.html"><b>Baby Kit Box</b></a></li>
                        <li><a href="baby soaps and oils.html"><b>Baby Soaps & Oils</b></a></li>
                        <li><a href="baby diaper.html"><b>Baby Diapers & Wet Tissue</b></a></li>
                        <li><a href=""><b>Baby Cloths </b></a></li>
                    </ul>
                </li>
                <li><a href="/REVIEW"><b>REVIEW</b></a></li>
                <li><a href="baby contect.html"><b>CONTACT</b></a></li>
            </ul>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="products">
            <div class="row  py-3 mt-5">

                <center>
                    <h2><b>AVAILABLE SERVICES</b></h2>
                </center>
                <br><br>
                <hr>
                <div class=col-sm-3>
                    <br><br>
                    <center><img src="{{url('/image/bike water service.jpeg')}}"style="width:250px;height:200px"></center>
                    <br>
                    <center>
                        <h5><a href="bike water service.html"style="text-decoration:none;color:black"><b>Bike Water Service</b></a>
                        </h5>
                    </center>
                    <p style="text-align:justify"></p>
                </div>

                <div class=col-sm-3>
                    <br><br>
                    <center> <img src="{{url('/image/Motorcycle-Engine-Oil.avif')}}"style="width:250px;height:200px"></center>
                    <br>
                    <center>
                        <h5><a href="Motorcycle-Engine-Oil"style="text-decoration:none;color:black"><b>Oil Change</b>
                                  </a></h5>
                    </center>
                    <p style="text-align:justify"></p>
                </div>
                <div class=col-sm-3>
                    <br><br>
                    <center> <img src="{{url('/image/general service.jpg')}}"style="width:250px;height:200px"></center>
                    <br>
                    <center>
                        <h5><a href="general service"style="text-decoration:none;color:black"><b>General Service
                                     </b> </a></h5>
                    </center>
                    <p style="text-align:justify"></p>
                </div>

                <div class=col-sm-3>
                    <br><br>
                    <center><img src="{{url('/image/bike puncture.webp')}}"style="width:250px;height:200px"></center>
                    <br>
                    <center>
                        <h5><a href=""style="text-decoration:none;color:black"><b>Bike Puncture</b></a></h5>
                    </center>
                    <p style="text-align:justify"></p>
                </div>




            </div>
        </div>
    </div>

    <div class="container-fluid"style="background-color:#292f36;height:40px">
        <fooder>
            <p style="color:#ccc;text-align:center;padding-top:20px;font-size:10px;"></p>
        </fooder>
    </div>
</body>





</html>
