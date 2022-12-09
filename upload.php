<?php
$background = "tech_back.jpg"?>
<html style="background-image: url('<?php echo $background;?>');
    scroll-behavior: auto;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    ">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/x-icon" href="icon.png">
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
            background-color: transparent;
            border-color: royalblue;
        }
        .upload{
            font-family: LeagueSpartan;
            color: white;
            height: 6vh;
            width: 60vw;
            padding-top: 5px;
            padding-bottom: 5px;

            font-size: 2vh;
            cursor: pointer;
            background: royalblue;
            border: none;
            text-align: center;
            border-radius: 30px;
        }
    </style>
</head>

<?php
session_start();
    $host = "localhost";
    $db = "cryptex";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($host, $username, $password, $db);
if(isset($_POST['complete'])){
    $creator_name = 'dippiestash';
    $id = $_POST['nft_id'];
    $type = $_POST['nft_type'];
    $price = $_POST['nft_price'];
    $project = $_POST['pname'];
    $name = $project." ".$id;
    $filename = $_POST['filename'];
    $query = "INSERT INTO NFTS VALUES 
                     ('$id','$name','$type','$price',curdate(),'$creator_name','$project')";
    $result = $conn->query($query);
    echo "NFT added successfully!";
    header('Location: cryptex.php');
}

?>
<body style="background-image: url('<?php echo $background; ?>')">

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
z-index: 10 !important;"
>
    <div class="topnav" style="padding-left: 34vw">
        <p style="padding-top: 12px;
        color: white;font-size: 40px;
        font-family: Kombu;float: left;
        margin-left: -48%">CRYPTEX</p>
        <a class="active" href="cryptex.php">Home</a>
        <a class="active" href="#Trending">Trending</a>
        <a class="active" href="projects.php">Projects</a>
        <div class="dropdown">
            <button onclick="account_dropdown()" class="account_button">My Account</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">My Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>


        <a class="search_button" style="float: right" href="explore.php">Search</a>
    </div>
</div>
<p class="NFT_name"
   style="margin-top: 6vh; text-align: center"
>Upload NFTs from your computer</p>
<div class="project_NFT" style="margin-top: 5vh;height:fit-content;">
<form action="upload.php" method="post" style="padding: 20px 20px 20px 25pc">
    <input class="in" ; type="text" required id="pname" name="pname" placeholder="Project name" />
    <br>
    <input class="in" ; type="text" required id="nft_id" name="nft_id" placeholder="NFT ID" /><br>
    <input class="in" ; type="text" required id="nft_type" name="nft_type" placeholder="NFT type" /><br>
    <input class="in" ; type="text" required id="nft_price" name="nft_price" placeholder="NFT Price" /><br>
    <input class="upload" type="file" required id="filename" name="filename"></input>
    <input style="margin-left:3%;width: 15vw" class="more_projects" type="submit" id='complete' name="complete" value="Upload" />
</form>
</div>



</html>
