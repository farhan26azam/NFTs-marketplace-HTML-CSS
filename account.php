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
    <title>Beanz</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="icon" type="image/x-icon" href="icon.png">
    <link rel="stylesheet" href="NFT_project_profile.css">
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
        .active{
            float: left;
            color: white;
            text-align: center;
            padding: 14px 25px;
            text-decoration: none;
            font-size: 25px;
            font-family: 'LeagueSpartan',serif;
            font-weight: bold;
        }
        .project_top{
            border-style: solid;
            border-width: 1vh;
            border-radius: 35px;
            border-color: slateblue;
            background-color: transparent;
            width: 70vw;
            margin-left: 15vw;
            height: 40vh;
            margin-top: 30vh;
            position: absolute;
            backface-visibility: visible;
        }
        .profile_picture{
            height: 28vh;
            border-style: groove;
            border-width: 5px;
            border-radius: 180px;
            margin-left: 39%;
            margin-top: -14vh;
        }
        .project_name{
            font-family: PoppinsBold;
            font-size: 3vw;
            color: white;
            margin-top: 3.5vh;
            margin-left: 20vw;
            text-align: center;
            background-color: transparent;
            border-style: hidden;
            width: 30vw;
        }
        .project_owner{
            background-color:darkslateblue;
            border-style: hidden;
            border-radius: 20px;
            width: 20%;
            height: 6vh;
            margin-top: 6vh;
            margin-left: 3vw;
            text-align: center;
            padding-top: 4vh;
        }
        .owner_name{
            font-family: LeagueSpartan;
            font-size: 2vw;
            color: white;
            text-align: center;
        }
        .owner_name:hover{
            color: aliceblue;
            cursor: auto;
        }
        .total_NFTs_price{
            float: left;
            background-color:darkslateblue;
            border-style: hidden;
            border-radius: 20px;
            width: 20%;
            height: 6vh;
            margin-top: -10vh;
            margin-left: 18vw;
            text-align: center;
            padding-top: 4vh;
        }
        .total_NFTs_price_text{
            font-family: LeagueSpartan;
            font-size: 2vw;
            color: white;
            text-align: center;
        }
        .floor_price{
            float: left;
            background-color:darkslateblue;
            border-style: hidden;
            border-radius: 20px;
            width: 20%;
            height: 6vh;
            margin-top: -10vh;
            margin-left: 33vw;
            text-align: center;
            padding-top: 4vh;
        }
        .floor_price_text{
            font-family: LeagueSpartan;
            font-size: 2vw;
            color: white;
            text-align: center;
        }
        .launch_date{
            float: left;
            background-color:darkslateblue;
            border-style: hidden;
            border-radius: 20px;
            width: 26%;
            height: 6vh;
            margin-top: -10vh;
            margin-left: 48vw;
            text-align: center;
            padding-top: 4vh;
        }
        .launch_date_text{
            font-family: LeagueSpartan;
            font-size: 2vw;
            color: white;
            text-align: center;
        }
        .project_NFT{
            border-style: groove;
            border-radius: 30px;
            border-color: slateblue;
            background-color: transparent;
            width: 70vw;
            margin-left: 15vw;
            height: 95vh;
            margin-top: 74vh;
            position: absolute;
        }
        .NFT{
            border-style: groove;
            border-color: transparent;
            border-radius: 20px;
            background-color: darkslateblue;
            width: 22%;
            height: 45%;
            float: left;
            margin-top: 2%;
            margin-left: 2%;
        }
        .NFT:hover{
            transform: scale(1.3);
        }
        .NFT_image{
            width: 90%;
            margin-left: 5%;
            margin-top: 5%;
            border-style: hidden;
            border-radius:20px;
        }
        .NFT_name{
            font-family: LeagueSpartan;
            font-size: 2vw;
            line-height: 28px;
            color: white;
            padding-top: 3vh;
            padding-left: 2vw;

        }
        .NFT_price{
            text-align: center;
            font-family: LeagueSpartan;
            font-size: 2vw;
            line-height: 28px;
            color: white;
            padding-top: 1vh;
            padding-left: 1.2vw;
        }
    </style>
</head>
</html>
<?php
$filename = basename($_SERVER["SCRIPT_FILENAME"],'.php');
$host = "localhost";
$db = "cryptex";
$username = "root";
$password = "";
$conn = mysqli_connect($host, $username, $password, $db);
$project_name="";

if(isset($_GET['pn']))
{
    $project_name = $_GET["pn"];
    //header("Location:". show . ".php");
}
$query1 = "SELECT * from nfts where owner_name=' .......  '";
$query2 = "SELECT * from account";


$result = $conn->query($query1);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $account_ID = $row['account_ID'];
        $name = $row['account_ID'];
        $email = $row['account_ID'];
        $account_ID = $row['account_ID'];
        $account_ID = $row['account_ID'];


        $launch_date = $row["launch_date"];
        //echo "\n\n\n\n". $launch_date;
        $creator_name = $row["cname"];
        //echo $creator_name;
        $owner_name = $row["oname"];
        //echo $owner_name;
    }
}

$profile_picture = "NFT_Projects_data/".$project_name."/profile_pic.avif";
$launch_date ="";
$creator_name ="";
$owner_name = "";



$project_folder = "NFT_Projects_data/".$project_name."/";
$ext = ".avif";
$id_array = [];
$name_array =[];
$price_array = [];
$c_date_array =[];
$images_array =[];
$query2 = "SELECT * from nfts where project_name='$project_name'";
$result = $conn->query($query2);
$count = 1;
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $id_array[$count] = $row["id"];
        $name_array[$count] = $row["name"];
        $price_array[$count]= $row["price"];
        $c_date_array[$count]= $row["creation_date"];
        $price_array[$count]= $row["price"];
        $images_array[$count] = $project_folder.substr($id_array[$count],1).$ext;
        $count = $count+1;
    }
}
$in_count = 1;
$query3 = "SELECT COUNT(*) AS NFT_COUNT FROM NFTS WHERE project_name='$project_name'";
$result = $conn->query($query3);
$NFTs_count = 0;
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $NFTs_count = $row["NFT_COUNT"];
    }
}
?>

<html>
<body style="overflow-y: scroll;background-image: url('<?php echo $background; ?>')">
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
        <a class="active" href="#account">My Account</a>


    </div>
</div>
<div class="project_top">
    <img class="profile_picture" src="<?php echo $profile_picture; ?>"><br>
    <p class="project_name" id="project_name">
        <?php echo $project_name;?>
    </p>
    <div class="project_owner">
        <a class="owner_name">
            <?php echo $owner_name;?></a>
    </div>
    <div class="total_NFTs_price">
        <p class="total_NFTs_price_text">
            <?php echo $NFTs_count;?>
        </p>
    </div>
    <div class="floor_price">
        <p class="floor_price_text">
            <?php echo $owner_name;?>
        </p>
    </div>
    <div class="launch_date">
        <p class="launch_date_text">
            <?php echo $launch_date?>
        </p>
    </div>
</div>
<div class="project_NFT">
    <div class="NFT">
        <img class="NFT_image" src="<?php echo $images_array[$in_count];?>">
        <p class="NFT_name" id="NFT_name1"><?php echo $name_array[$in_count]?></p>
        <p class="NFT_price"><?php echo $price_array[$in_count]; $in_count = $in_count+1;?></p>
    </div>

    <div class="NFT">
        <img class="NFT_image" src="<?php echo $images_array[$in_count];?>">
        <p class="NFT_name" id="NFT_name2"><?php echo $name_array[$in_count]?></p>
        <p class="NFT_price"><?php echo $price_array[$in_count]; $in_count = $in_count+1;?></p>
    </div>

    <div class="NFT">
        <img class="NFT_image" src="<?php echo $images_array[$in_count];?>">
        <p class="NFT_name" id="NFT_name3"><?php echo $name_array[$in_count]?></p>
        <p class="NFT_price"><?php echo $price_array[$in_count]; $in_count = $in_count+1;?></p>

    </div>

    <div class="NFT">
        <img class="NFT_image" src="<?php echo $images_array[$in_count];?>">
        <p class="NFT_name" id="NFT_name4"><?php echo $name_array[$in_count]?></p>
        <p class="NFT_price"><?php echo $price_array[$in_count]; $in_count = $in_count+1;?></p>
    </div>
    <br>
    <div class="NFT">
        <img class="NFT_image" src="<?php echo $images_array[$in_count];?>">
        <p class="NFT_name" id="NFT_name5"><?php echo $name_array[$in_count]?></p>
        <p class="NFT_price"><?php echo $price_array[$in_count]; $in_count = $in_count+1;?></p>
    </div>
    <div class="NFT">
        <img class="NFT_image" src="<?php echo $images_array[$in_count];?>">
        <p class="NFT_name" id="NFT_name6"><?php echo $name_array[$in_count]?></p>
        <p class="NFT_price"><?php echo $price_array[$in_count]; $in_count = $in_count+1;?></p>
    </div>

    <div class="NFT">
        <img class="NFT_image" src="<?php echo $images_array[$in_count];?>">
        <p class="NFT_name" id="NFT_name7"><?php echo $name_array[$in_count]?></p>
        <p class="NFT_price"><?php echo $price_array[$in_count]; $in_count = $in_count+1;?></p>
    </div>

    <div class="NFT">
        <img class="NFT_image" src="<?php echo $images_array[$in_count];?>">
        <p class="NFT_name" id="NFT_name8"><?php echo $name_array[$in_count]?></p>
        <p class="NFT_price"><?php echo $price_array[$in_count]; $in_count = $in_count+1;?></p>
    </div>
</div>
</body>

</html>
