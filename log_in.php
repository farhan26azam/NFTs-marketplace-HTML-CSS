<!DOCTYPE html>
<html style="background-image: url('tech_back.jpg');
    scroll-behavior: auto;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    ">
<head>

<?php
session_start();
      $connect = mysqli_connect("localhost", "root", "") or die(mysqli_error($connect));
    	mysqli_select_db($connect,"cryptex") or die(mysqli_error($connect));
     if(isset($_POST['Login']))
    {

   		$password = $_POST['password'];
   		$email = $_POST['email'];
   		$query = "select email,password from account where account.email = '$email' and account.password = '$password';";

	 
   		$result = mysqli_query($connect,$query) or die(mysqli_error($connect));

		if (mysqli_num_rows($result) == 0) { 
		echo '<script type="text/JavaScript"> alert("Incorrect Email or Password.");</script>';

		} else {
            while($row = $result->fetch_assoc()) {
                $name = $row['name'];
            }
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $name;
            header("Location: cryptex.php");
		}  
	}



?>

    <meta charset="UTF-8">
    <title>Cryptex NFTs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">

    <!--        <link rel="stylesheet" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.rtl.css">
    <link rel="stylesheet" href="css/bootstrap-grid.rtl.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.rtl.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.rtl.min.css">
    <!--        <link rel="stylesheet" href="good_folder/css/bootstrap-utilities.css">-->
    <link rel="stylesheet" href="css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.rtl.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.rtl.min.css">
    <style>
        @font-face {
            font-family: LeagueSpartan;
            src: url(LeagueSpartan-VariableFont_wght.ttf);
        }

        @font-face {
            font-family: Kombu;
            src: url(gomarice_sio_kombu.ttf);
        }

        @font-face {
            font-family: Hammersmith;
            src: url(HammersmithOne-Regular.ttf);
        }

        @font-face {
            font-family: PoppinsBold;
            src: url(Poppins-Bold.ttf);
        }

        .active {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 25px;
            text-decoration: none;
            font-size: 25px;
            font-family: 'LeagueSpartan',serif;
            font-weight: bold;
        }

        div.front {
            position: absolute;
            top: 55px;
            height: 700px;
            width: 98%;
            margin: 15px 15px 0 15px;
            background-color: transparent;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border: solid thin;
            border-style: none;
            border-color: royalblue;
            border-radius: 20px;
        }

        .dashboard_button {
            font-size: 4vh;
            font-size: 2vw;
            font-family: LeagueSpartan;
            font-weight: bold;
            color: white;
            text-decoration: none;
            text-align: center;
            margin-top: 10vh;
            margin-left: 40vw;
            background-color: slateblue;
            width: 300px;
            height: 60px;
            border-radius: 10px;
            border-style: none;
        }

        button.dashboard_button:hover {
            border: solid thin;
            background-color: black;
            border-color: steelblue;
            transform: scale(1.1,1.1);
        }

        div.front {
            padding-top: 2vh;
            position: absolute;
            height: 60vh;
            width: 98%;
            margin: 15px 15px 0 15px;
            background-color: transparent;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border: solid thin;
            border-style: none;
            border-color: royalblue;
            border-radius: 20px;
        }

        div.side {
            margin: 15px 15px 15px 15px;
            position: absolute;
            top: 70vh;
            height: 60vh;
            width: 22vw;
            background-color: transparent;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border: solid thin;
            border-color: royalblue;
            border-radius: 20px;
        }

            div.side:hover {
                border: solid;
                background-color: black;
                border-color: royalblue;
                transform: scale(1.01,1.01);
            }

        div.middle {
            margin: 15px 15px 15px 15px;
            position: absolute;
            top: 15vh;
            height: 70vh;
            width: 30vw;
            padding: 15px 30px;
            background-color: transparent;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border: solid thin;
            border-color: royalblue;
            border-radius: 20px;
        }

        p {
            color: white;
            font-family: sans-serif;
        }

            p.sidet {
                font-family: LeagueSpartan;
                font-weight: bold;
                text-align: center;
                font-size: 3vw;
                padding-top: 4vh;
                padding-bottom: 4vh;
            }


        input.next{
            position: absolute;
            margin-left: 0%;
            bottom: 2vh;
            font-size: 2pc;
            font-family: LeagueSpartan;
            color: white;
            text-decoration: none;
            text-align: center;
            background-color: royalblue;
            width: 40%;
            height: 5vh;
            border-radius: 10px;
            border: solid thin;
            border-color: royalblue;
            margin: 2% 0%;
        }

            input.next:hover {
                background-color: black;
                transform: scale(1.1,1.1);
            }

        input.in {
            padding: 0px 0px 0px 10px;
            font-family: LeagueSpartan;
            font-size: 140%;
            border: solid thin;
            border-color: silver;
            height: 5vh;
            width: 29vw;
            color: white;
            margin: 0px 0px 10px 0px;
            border-radius: 5px;
            background-color:transparent;
            border-color:royalblue;
        }

            input.in:focus {
                border: solid;
                border-color: dodgerblue;
            }

        div.img {
            position: absolute;
            left: 10%;
            top: 2%;
            position: absolute;
            height: 75%;
            width: 80%;
            border: none;
            border-radius: 20px;
        }

        center_gif {
            margin-top: 2px;
            margin-left: 40%;
            width: 20px;
            float: right;
        }

        .NFT1 {
            border-style: groove;
            border-color: transparent;
            border-radius: 20px;
            background-color: black;
            width: 40%;
            height: 40%;
            float: none;
            margin-top: -5%;
            margin-left: 30%;
        }


    </style>

</head>
<body>

    <div class=”top_nav”
        style="background-color: slateblue;
        border-style: groove;
        border-color: transparent;
        border-radius: 30px;
        position: fixed;
        top: 0;
        height: 50px;
        width: 99.5%;
        float: left;
        z-index: 10 !important;">
        <div class="topnav" style="padding-left: 34vw">
            <p style="padding-top: 12px;
        color: white;font-size: 40px;
        font-family: Kombu;float:none;
        margin-left: 12%">CRYPTEX</p>
        </div>
    </div>

    <div class="middle" style="left:30%">
        <p class="sidet">LOG IN</p>




        <<div class="NFT1">
                <img style="width: 100%; height: 100%; border-style: groove; border-radius: 30px; border-color: transparent" ;
                     src="https://i.seadn.io/gae/5j5EIAn77bETPT7rK7U5uNxfu3NDhyc-39WP-g9ERCjkJb27Q8NM_z4poKhqkUvkDnxmLp7weK_7h-zOX1J_fvh8EhtjqH33Ty1EHA?auto=format&w=384">
        </div>>




        <form action="log_in.php" method="post">
            <input class="in" ; type="text" ; id="email" name="email" ; placeholder="Email or phone" />
            <input class="in" ; type="password" ; id="password" name="password" placeholder="Password" /><br /><br />
            <a style="font-family:LeagueSpartan ; font-size:140%; text-decoration:none" href="sign_up.php">Create account</a>
            <input style="margin-left:5%" class="next" type="submit" name="Login" value="Log In" />
        </form>


    </div>

    

    <nav class="foot">
        <!--     background-color: transparent;-->
        <!--     bottom: 0;-->
        <!--     height: 50vh;"-->
        <!--    <p style="padding-top: 4vh;-->
        <!--        color: white;font-size: 50px;-->
        <!--        font-family: Kombu;float: left;-->
        <!--        margin-left: 6vw">CRYPTEX</p>-->
    </nav>


</body>
</html>