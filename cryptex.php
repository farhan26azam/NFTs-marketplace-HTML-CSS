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
    <title>Cryptex NFTs</title>
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
    <script>
        function account_dropdown() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        window.onclick = function(event) {
            if (!event.target.matches('.account_button')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

</head>
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
        <a class="search_button" style="float: right" href="upload.php">Upload</a>
    </div>
</div>
<div class="front">
    <p style="
    font-family: 'Kombu';
    font-size: 120px;
    margin-top: 5vh;
    color: white;
    text-align:center">
        Cryptex NFTs
    </p>
    <img class="center_gif"
         style="border-style: groove;border-color: transparent;
             border-radius: 30px;width: 15vw;
             height: 15vw; margin-right: 15vw; float: right;
             margin-top: 10vh" src="videos/ape_gif.webp">

    <p style="font-family: PoppinsBold;
    opacity: 1;color: white;margin-left: 10vw;
     margin-top:20vh;font-size:6vh;font-size: 4vw; line-height: 8vh">
        Be at the front-line of the NFT revolution
    </p>
    <button class="dashboard_button">
        Open dashboard
    </button>
</div>
<?php
$host = "localhost";
$db = "cryptex";
$username = "root";
$password = "";
$conn = mysqli_connect($host, $username, $password, $db);
$query1 = 'SELECT * from projects LIMIT 1';
$result = $conn->query($query1);
$project_name = "";
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $project_name = $row['pname'];
    }
}
$query2 = "SELECT * from projects where cname='dori_deployer'";
$result = $conn->query($query2);
$creator_name = "";
$pname = "";
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $creator_name = $row['cname'];
        $pname = $row['pname'];
    }
}
$query3 = "SELECT * from nfts";
$result = $conn->query($query3);
$pnames_array = [];
$names_array = [];
$ids_array = [];
$images_array = [];
$count = 1;
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $ids_array[$count] = $row["id"];
        $names_array[$count] = $row['name'];
        $pnames_array[$count] = $row['project_name'];
        $images_array[$count] = $pnames_array[$count]." ".substr($ids_array[$count],1).".avif";
        $count = $count+1;
    }
}
$in_count=1;
$new_count=1;
?>
<div class="side">
    <p class="sidet">Projects</p>
        <div class="collection_contain">
                <img style="margin: auto;
                width: 90%;
                height: 30vh;
                border-style: groove;
                border-radius: 30px;
                border-color: transparent";
                     src="<?php echo "NFT_Projects_data/".strtolower($project_name)."/profile_pic.avif" ?>">
                <p class="NFT_description"><?php echo $pnames_array[$in_count]?></p>
        </div>
    <button class="more_projects" style="float: left">
        More
    </button>
</div>
<div class="project_NFT"
     style="width: 50vw; margin-left: 24.5vw; height: 56vh;
margin-top: 72vh">
    <p class="sidet">NFTs</p>
    <?php
    while($new_count<3){
        echo "<div class=\"NFT\" 
            style='height: 70%; width: 40%; margin-left: 6.5%; margin-top: -2%'>";?>
        <html><body><img class="NFT_image" style="width: 90%; height: 80%"
                         src= "<?php echo "NFT_images/".$images_array[$in_count] ?>" >
        <?php echo "<p class=\"NFT_price\"> " . $names_array[$in_count] . " </p>";?>
        <?php echo "</div>";
        $count = $count-1;
        $in_count = $in_count+8;
        $new_count += 1;
    }
    ?>
        <button class="more_projects" style="float: left; margin-left: -75%; margin-right: -30%">
            More
        </button>
</div>

<div class="side" style="right:0%">
    <p class="sidet">Creators</p>
        <div class="collection_contain">
                <img style="margin: auto;
                width: 90%;
                height: 30vh;
                border-style: groove;
                border-radius: 30px;
                border-color: transparent";
                     src="<?php echo "NFT_projects_profile_pictures/".$pname.".avif" ?>">">
                <p class="NFT_description"><?php echo $pname?></p>

        </div>
    <button class="more_projects">
        More
    </button>
</div>

<div class="front" style="position:absolute; top:140vh; height: 80vh">
    <div style="margin-top: 0;margin-left: 5%; margin-right: 50%; background-color:transparent">
        <p style="font-size:4vw;
         font-family: LeagueSpartan">Try it out with<br><br> these projects</p>
    </div>

    <div class="proj" >
        <div class="img">
            <img style='height: 100%; width: 100%; object-fit: cover; margin-top: 25px; border-radius: 20px; border-style: none'
                 src="NFT_project_images/nft-supducks-preview.jpg" alt="p2" />  </div>
        <p class="sidet" style="position:absolute; top: 82%; left: 27%; font-size: 2.5vw">SupDucks</p>
        <a href="project.php?project_name=<?php echo $name; ?>" >   <button name='view' type="button" class="more">Details</button>

    </div>
    <div class="proj" style="right: 34%;">

        <div class="img">
            <img style='height: 100%; width: 100%; object-fit: cover; margin-top: 25px; border-radius: 20px; border-style: none'
                 src="NFT_project_images/nft-decentraland-preview.jpg" alt="p2" />  </div>
        <p class="sidet" style="position:absolute; top: 82%; left: 23%; font-size: 2.5vw">Decentraland</p>

    </div>
    <div class="proj" style="right: 63%;">

        <div class="img">
            <img style='height: 100%; width: 100%; object-fit: cover; margin-top: 25px; border-radius: 20px; border-style: none'
                 src="NFT_project_images/nft-cryptokitties-preview_27108.jpg" alt="p2" />  </div>
        <p class="sidet" style="position:absolute; top: 82%; left: 23%; font-size: 2.5vw">Crypto Kitties</p>

    </div>
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
