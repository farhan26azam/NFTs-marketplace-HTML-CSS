<?php
session_start();
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
    <title>My Account</title>
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
session_start();

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

echo "<div class='NFT_image' style='margin-left: 2vh; margin-top: 10vh'>" . $_SESSION['username'] . "</div>";
$query1 = "SELECT * from account where name='" . $_SESSION['username'] . "'";


$result = $conn->query($query1);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $account_ID = $row['account_ID'];
        $name = $row['name'];
        $email = $row['email'];
        $NFTs_owned = $row['NFTs_owned'];
        $account_credit = $row['account_credit'];
    }
}


$project_folder = "NFT_images/";
$ext = ".avif";
$id_array= [];
$name_array = [];
$cname_array =[];
$pname_array = [];
$images_array =[];
$query2 = "SELECT * from nfts where owner_name='" . $_SESSION['username'] . "'";
$result1 = $conn->query($query2);
$count = 1;
if($result1->num_rows > 0){
    while($row = $result1->fetch_assoc()){
        $id_array[$count] = $row['id'];
        $pname_array[$count] = $row['project_name'];
        $cname_array[$count] = $row["owner_name"];
        $name_array[$count] = $pname_array[$count]." ".substr($id_array[$count],1);
        $images_array[$count] = $project_folder.$name_array[$count].$ext;
        $count = $count+1;
    }
}


$in_count = 1;

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
        <a class="active" href="log_in.php">My Account</a>


    </div>
</div>
<div class="project_top">
    <img class="profile_picture" src="<?php echo $profile_picture; ?>"><br>
    <p class="project_name" id="nft_name">
        <?php echo $name;?>
    </p>
    <div class="project_owner" style="margin-left: 25vh">
        <a class="total_NFTs_price_text">
            <?php echo $account_ID;?></a>
    </div>
    <div class="total_NFTs_price" style="margin-left: 55vh">
        <p class="total_NFTs_price_text">
            <?php echo $NFTs_owned;?>
        </p>
    </div>
    <div class="floor_price" style="margin-left: 85vh">
        <p class="floor_price_text" >
            <?php echo $account_credit;?>
        </p>
    </div>

</div>
</div>
<div class="project_NFT">

    <?php
    while($count>1){
    echo "<div class=\"NFT\">";?>
    <html><body><img class="NFT_image" src= "<?php echo $images_array[$in_count]; ?>" >
    <?php echo "<p class=\"NFT_name\"> " . $name_array[$in_count] . " </p>";?>
    <?php echo "<p class=\"NFT_price\"> " . $cname_array[$in_count] . " </p>";?>
    <?php echo "</div>";
    $count = $count-1;
    $in_count = $in_count+1;
    }
    ?>

</div>
</body>

</html>
