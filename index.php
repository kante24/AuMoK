<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");
?>

    <!DOCTYPE html>
    <html lang="en">

    <style>
        #load {
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 9999;
            background: url("/dashboard/AuMoK/Images/Infinity.gif") no-repeat center center
        }
        
        div {
            border: solid
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap');
        /* body {
        background: #262626;
        font-family: raleway;
        color: white;
        margin: 0;
    } */
        
        .popup .content {
            position: absolute;
            top: 50%;
            left: 50%;
            /* transform: translate(-50%, -150%) scale(0); */
            width: 300px;
            height: 450px;
            z-index: 2;
            text-align: center;
            padding: 20px;
            border-radius: 20px;
            /* background: #262626; */
            background: <? echo color() ?>;
            box-shadow: 10px 10px 10px <? echo color() ?>, -10px -10px 15px <? echo color() ?>;
            /* z-index: 1; */
        }
        
        .popup .close-btn {
            position: absolute;
            right: 20px;
            top: 20px;
            width: 30px;
            height: 30px;
            color: white;
            font-size: 30px;
            border-radius: 50%;
            padding: 2px 5px 7px 5px;
            background: red;
            /* background: #292929; */
            box-shadow: 5px 5px 15px #1e1e1e, -5px -5px 15px #1e1e1e;
        }
        
        .popup.active .content {
            transition: all 300ms ease-in-out;
            transform: translate(-50%, -50%) scale(1);
        }
        
        h1 {
            text-align: center;
            font-size: 32px;
            font-weight: 600;
            padding-top: 20px;
            padding-bottom: 10px;
        }
        
        a {
            font-weight: 600;
            color: white;
        }
        
        .input-field .validate {
            padding: 20px;
            font-size: 16px;
            border-radius: 10px;
            border: none;
            margin-bottom: 15px;
            color: #bfc0c0;
            background: #262626;
            box-shadow: inset 5px 5px 5px #232323, inset -5px -5px 5px #292929;
            outline: none;
        }
        
        .first-button {
            color: white;
            font-size: 18px;
            font-weight: 500;
            padding: 30px 50px;
            border-radius: 40px;
            border: none;
            position: absolute;
            top: 50%;
            left: 20%;
            transform: translate(-50%, -50%);
            background: #262626;
            box-shadow: 18px 18px 25px #1e1e1e, -15px -15px 25px #1e1e1e;
            transition: box-shadow .35s ease !important;
            outline: none;
        }
        
        .first-button:active {
            background: linear-gradient(145deg, #222222, #292929);
            box-shadow: 5px 5px 10px #262626, -5px -5px 10px #262626;
            border: none;
        }
        
        .second-button {
            color: white;
            font-size: 18px;
            font-weight: 500;
            margin-top: 20px;
            padding: 20px 30px;
            border-radius: 40px;
            border: none;
            background: #262626;
            box-shadow: 8px 8px 15px #202020, -8px -8px 15px #2c2c2c;
            transition: box-shadow .35s ease !important;
            outline: none;
        }
        
        .second-button:active {
            background: linear-gradient(145deg, #222222, #292929);
            box-shadow: 5px 5px 10px #262626, -5px -5px 10px #262626;
            border: none;
            outline: none;
        }
        
        #p {
            color: #bfc0c0;
            padding: 20px;
        }
    </style>
    <script>
        document.onreadystatechange = function() {
            var state = document.readyState
            if (state == 'complete') {
                setTimeout(function() {
                    document.getElementById('interactive');
                    document.getElementById('load').style.visibility = "hidden";
                    document.getElementById('content').style.visibility = "visible";
                }, 50);
            }
        }

        function togglePopup() {
            document.getElementById("popup-1")
                .classList.toggle("active");
        }
    </script>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME PAGE</title>

    </head>

    <body>
        <div id="load"></div>

        <div id="content">
            <div class="popup" id="popup-1">
                <div class="content">
                    <div class="close-btn" onclick="togglePopup()">
                        <!-- <button class="btn btn-danger""> -->
                        <img style="width: 30px;height:30px;left: 20px;bottom:20px;vertical-align:top" src="https://cdn-icons-png.flaticon.com/512/70/70287.png" ; />
                        <!-- </button> -->
                    </div>

                    <h1>Sign in</h1>
                    <div class="input-field"><input placeholder="Email" class="validate"></div>
                    <div class="input-field"><input placeholder="Password" class="validate"></div>
                    <button class="second-button">Sign in</button>
                    <p id="p">Don't have an account? <a href="/signup.html">Sign Up</a></p>


                </div>
            </div>
            <button onclick="togglePopup()" class="first-button">Sign In</button>
            <script>
                function togglePopup() {
                    document.getElementById("popup-1")
                        .classList.toggle("active");
                }
            </script>
        </div>

        <div class="container justify-content-center" style="border:solid;width: 300px;">

            <div class="row justify-content-center">
                <h1>Sign IN</h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 form-floating">
                    <input class="form-control " id="Login " style="width: 200px;height:50px; " type="text" name="Login " placeholder="Login " required>
                    <label for="floatingInput ">Username or eMail</label>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 form-floating">
                    <input class="form-control " style="width: 200px;height:50px; " type="password" name="Password" placeholder="Password" required>
                    <label for="floatingInput ">Password</label>
                </div>
            </div>

            <div class="row justify-content-center">
                Log In
            </div>

            <div class="row justify-content-center">
                No account? signup
            </div>



        </div>

    </body>

    </html>


    <?



?>