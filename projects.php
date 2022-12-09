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
    <title>Projects</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="icon" type="image/x-icon" href="icon.png">
    <link rel="stylesheet" href="NFT_project_profile.css">
</head>
</html>
<?php
$host = "localhost";
$db = "cryptex";
$username = "root";
$password = "";
$conn = mysqli_connect($host, $username, $password, $db);
if($conn->error){echo "Cannot connect";}
$project_folder = "NFT_projects_profile_pictures/";
$ext = ".avif";
$pname_array = [];
$cname_array =[];
$images_array =[];
$query2 = "SELECT * from projects";
$result = $conn->query($query2);
$count = 1;
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $pname_array[$count] = $row["pname"];
        $pname_array[$count] = strtolower($pname_array[$count]);
        $cname_array[$count] = $row["cname"];
        $images_array[$count] = $project_folder.$pname_array[$count].$ext;
        $count = $count+1;
    }
}
//$count = $count-1;
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
        <a class="active" href="account.php">My Account</a>


    </div>
</div>
<div class="project_top">

    <p class="project_name" id="project_name">
        Explore Projects
    </p>
    <p class="project_name" style="font-size: 1vw">
        The way we value internet-native items is changing with the development of blockchain technology. Kittens, punks, and memes are now trading digital wallets for cryptocurrencies,
        and the online collectibles market is taking shape before our eyes.Scarce digital property is cropping up in all kinds of industries around the world,
        and OpenSea is on a mission to house internet goods from all corners of the ecosystem.
        Own, buy, and sell rare and exclusive NFTs from CryptoKitties, Axie Infinity, and beyond.
    </p>
</div>
<div class="project_NFT">
    <?php
    while($count>1){
        echo "<div class=\"NFT\">";?>
        <html><body>
        <img class="NFT_image" src= "<?php echo $images_array[$in_count]; ?>" >
        <div style="
    position: absolute;
    padding: 0px 0px 0px 0px;
    font-family: LeagueSpartan;
    border:solid;
    height: 2vh;
    width: 10vw;
    margin-top: 6vh;
    margin-left: 5.5%;
    border-radius: 5px;
    background-color:transparent;">
            <a style="color:transparent" href="project_profile.php?pn=<?php echo $pname_array[$in_count]; ?>" >

            </a>
        </div>
        </body></html>
        <?php echo "<p class=\"NFT_price\"> " . $cname_array[$in_count] . " </p>";?>
        <?php echo "</div>";
        $count = $count-1;
        $in_count = $in_count+1;
    }
    ?>
</div>
</body>

</html>