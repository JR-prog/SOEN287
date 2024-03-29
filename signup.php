<!DOCTYPE html>
<html lang="en">

<Head>
    <title>Signup</title>

    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo&family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet">

    <!--link to stylesheet -->
    <link rel="stylesheet" href="resources\css\style.css">
    <style>
        .container {
            width: 600px;
            margin-top: 6%;
            border-style: solid;
            padding: 20px;
            border-width: 2px;
        }

        .container h1 {
            text-align: center;
            font-size: 40px;
            margin-bottom: 40px;
        }

        .container input[type="text"],
        input[type="password"],
        input[type="email"] {
            text-align: center;
            width: 100%;
            border: 1px solid;
            background: transparent;
            color: white;
            height: 40px;
            border-radius: 0px;
        }

        .container input[type="text"]::placeholder,
        input[type="Password"]::placeholder,
        input[type="email"]::placeholder {
            text-align: center;
            color: #d3d3d3;


        }

        .container input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            border: none;
            outline: none;
            height: 40px;
            background-color: #EE4F3E;
            color: #ffff;
            border-radius: 0px;
        }

        .container input[type="submit"]:hover {
            cursor: pointer;
            box-shadow: 1px 1px 10px #696969;
        }

        .container a:hover {
            color: #d3d3d3;

        }

        .container input:focus {

            background-color: #99442B;

        }

        .container a {

            display: block;
            text-align: left;
            text-decoration: none;
            color: white;
            font-size: 12px;
            margin-top: 10px;
        }

        .error {
            color: red !important;
            text-align: center !important;
        }
    </style>

</head>


</Head>

<body>
    <div class="content-container">
        <div class="content-without-footer">
            <?php include "includes/header.php"; ?>


            <div class="container">
                <h1>Signup</h1>
                <form action="registration.inc.php" method="post">
                    <div class="row jumbotron">
                        <?php
                        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if (strpos($fullUrl, "signup=invalidemail") == true) {
                            echo "<p class='error'> The Email you enterd is already in use!</p>";
                        }
                        ?>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">First Name</label>
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter your first name." required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-l">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter your last name." required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-l">Confirm Email</label>
                            <input type="email" class="form-control" name="email" id="cemail" placeholder="Confirm Email." required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-l">Postal Code</label>
                            <input type="text" class="form-control" name="postal-code" id="postal-code" placeholder="Enter your Postal Code Here." required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" name="province" id="province" placeholder="Enter your Province." required>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="province">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter your Province." required>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label for="province">Confirm Address</label>
                            <input type="text" class="form-control" name="addressC" id="addressC" placeholder="Enter your Province." required>
                        </div>


                        <div class="col-sm-6 form-group">
                            <label for="pass">Password</label>
                            <input type="Password" name="password" class="form-control" id="password" placeholder="Enter your password." required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="pass2">Confirm Password</label>
                            <input type="Password" name="cnf-password" class="form-control" id="password2" placeholder="Re-enter your password." required>
                        </div>
                        <div class="col-sm-12 form-group mb-0">
                            <input type="submit" name="signup" value="SIGNUP">
                        </div>
                        <a href="login.php">Already a Member? Login!</a>

                    </div>
                </form>

            </div>
        </div>
        <?php include "includes/footer.html"; ?>

    </div>
    <script type="text/Javascript" src="signup-validation.js"></script>
    <script type="text/Javascript" src="signup-validation-eventhandling.js"></script>
</body>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>


</html>