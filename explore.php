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
    <title>Search</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="icon" type="image/x-icon" href="icon.png">
    <link rel="stylesheet" href="NFT_project_profile.css">
</head>
</html>
<?php
session_start();
$host = "localhost";
$db = "cryptex";
$username = "root";
$password = "";
$conn = mysqli_connect($host, $username, $password, $db);
if($conn->error){echo "Cannot connect";}
$project_folder = "NFT_images/";
$ext = ".avif";
$id_array= [];
$name_array = [];
$cname_array =[];
$pname_array = [];
$price_array=[];
$images_array =[];
$query2 = "SELECT * from nfts";
$result = $conn->query($query2);
$count = 1;
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $id_array[$count] = $row['id'];
        $pname_array[$count] = $row['project_name'];
        $cname_array[$count] = $row["owner_name"];
        $price_array[$count] = $row['price'];
        $name_array[$count] = $pname_array[$count]." ".substr($id_array[$count],1);
        $images_array[$count] = $project_folder.$name_array[$count].$ext;
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
        <a class="active" href="#account">My Account</a>


    </div>
</div>
<form action="search_result.php" method="POST">
<input style="position: absolute;
    padding: 0px 0px 0px 10px;
    font-family: LeagueSpartan;
    font-size: 150%;
    border: solid;
    height: 5vh;
    width: 29vw;
    color: white;
    margin-top: 10vh;
    margin-left: 35%;
    border-radius: 60px;
    background-color:#282828;
    border-color:royalblue;" ; type="search" ; id="search" name="search" ; placeholder="  Search NFTs" />
    <input
            style="
    position: absolute;
    padding: 0px 0px 0px 10px;
    font-family: LeagueSpartan;
    font-size: 130%;
    border: solid;
    height: 5vh;
    width: 10vw;
    color: white;
    margin-top: 10vh;
    margin-left: 66%;
    border-radius: 60px;
    background-color:royalblue;
    border-color:royalblue;"
           id="searchb" type="submit">
</form>
<div class="project_NFT" style="margin-top: 20vh;height:fit-content;">
    <?php
    while($count>1){
        echo "<div class=\"NFT\">";?>
        <html><body><img class="NFT_image" src= "<?php echo $images_array[$in_count]; ?>" >
        <?php echo "<p 
        style='text-align:center;font-family: LeagueSpartan;color: white;
        background-color: transparent; font-size: 1.6vw; height: 3vh; 
        margin-top: 1vh; padding-top: 1vh; padding-left: 1vw;padding-right:1vw;width: fit-content;margin-left: 2%;
        border: royalblue;border-style: solid;border-radius: 15px;
        
        '> " . $name_array[$in_count] . " </p>";?>
        <?php echo "<p style='font-family: LeagueSpartan;color: white;
        background-color: royalblue; font-size: 1.2vw; height: 3vh; 
        margin-top: 1vh; padding-top: 1vh; padding-left: 1vw;padding-right:1vw;width: fit-content;margin-left: 2%;
        border: royalblue;border-style: solid;border-radius: 15px;display: flex'> " . $cname_array[$in_count] . " </p>";?>
        <?php echo "<div style='display: flex'>"  ?>
        <?php echo "<p style='font-family: LeagueSpartan;color: white;
        background-color: royalblue; font-size: 1.2vw; height: 3vh; 
        margin-top: 1vh; padding-top: 1vh; padding-left: 1vw;padding-right:1vw;width: fit-content;margin-left: 2%;
        border: royalblue;border-style: solid;border-radius: 15px;display: flex'> " . $price_array[$in_count] . " </p>";?>
        <?php echo "<button style='font-family: LeagueSpartan;color: white;padding-left: 4vw;
        background-color: royalblue; font-size: 1.2vw; height: 4.5vh; 
        margin-top: 1vh; padding-top: 1vh; padding-left: 1vw;padding-right:1vw;width: 8vw;margin-left: 2%;
        border: royalblue;border-style: solid;border-radius: 15px;display: flex'> " . "Buy Now" . " </button>";?>
        <?php echo "</div>"?>

        <?php echo "</div>";
        $count = $count-1;
        $in_count = $in_count+1;
    }
    ?>

</div>
</body>

</html>
