<?php

$servername="localhost";
$username="root";
$passsword="12#itlamshiv";
$dbname="women";
$conn=mysqli_connect($servername,$username,$passsword,$dbname);
$us=$_GET['id'];
$sql="INSERT INTO location(lat,lon,acc,User_ID,red,green,orange) values(0,0,0,'$us',1,0,0)";
$phone= "SELECT Phone_no from family where User_ID='$us'";
mysqli_query($conn,$sql);
$retval=mysqli_query($conn,$phone);
//while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
  //echo '<script type="text/javascript">alert("'.$row['Phone_no'].'");</script>';
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>RED ALERT</title>
<link rel="icon" href="https://st2.depositphotos.com/1823785/7267/i/600/depositphotos_72675443-stock-photo-many-people-hands-holding-colorful.jpg" type="image/png">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link href="https://fonts.googleapis.com/css2?family=Modern+Antiqua&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

<style>
h1,h2,h3,h4,h5 {font-family: "Playfair Display", sans-serif}
body {font-size:16px;background-color:white;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.9;cursor:pointer;border-radius:30px;background-color:#efd0cc}
.w3-half img:hover{opacity:1}
#hd
{
 font-family:'Playfair Display';
 font-size: 40px;

}
#main
{
font-family: 'Playfair Display';
}
#mySideBar
{
    box-shadow: 5px;
}
.success {
  background-color:#efd0cc;
  border-left: 6px solid #E8B9AB;
}

.mainn
          {   width:500px;
            height:400px;
            background-color:white;
            z-index:3;
            float:right;
            position:relative;
            left:-20px;
            top:-300px;
            border-radius: 5px;
            background-image:url("https://wallpaperaccess.com/full/3025501.jpg") ;
            border:2px firebrick solid;
            opacity:0.9;
            font-family: 'Amatic SC';
            font-size:20px;
          }
          #g
           {
            padding-top:-20px;
           }
           body {
            margin: 0;
            padding: 0;
        }

        #map {
            width: 700px;
            height: 500px;
        }
        #call{
          position:Relative;
            top:-200px;
        }
        
</style>
</head>
<body>
<!--Add correct page-->
<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.1/annyang.min.js"></script>
  <script>
  if (annyang) {
    // Let's define a command.
    const commands = {
      'home': () => {location.href="upload.php?username=<?php 
                            echo $us;                        
                            ?>"}
    };
    // Add our commands to annyang
    annyang.addCommands(commands);
  
    // Start listening.
    annyang.start();
  }
  </script>
<!-- Sidebar/menu -->
<nav class="w3-sidebar  w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:280px;font-weight:bold; background-color:#efd0cc;font-family:Playfair Display" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">CLOSE MENU</a>
  <div class="w3-container">
    <h2 class="w3" id="hd"><b>Suraksha Saathi</b></h2>
  </div>
  <div class="w3-bar-block">
    <br>
    <br>
    <br>
    <a href="loginpage.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">DIFFERENT MEMBER?</a> 
    <a href="upload.php?username=<?php 
                            echo $us;                        
                            ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
    <hr>
    <hr>
   
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-white w3-margin-right" onclick="w3_open()">☰</a>
  <span>SAFETY FIRST</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:340px;margin-right:40px">
    <div class="w3-container" style="margin-top:60px" id="showcase">
        <h1 class="w3-jumbo" id="main"><b>Red Alert</b></h1>
        <h2 style="font-family: 'Dancing Script'">Don't Worry,We are with you</h2>
        <p>A call to the women help centre is being done along with sharing your location.An alert message and location will also be send to your Registered Number!! </p>
    </div>
    <div class="w3-row-padding">

        <div class="w3-half Container">

          <div id="map"></div>
          <div id="call">
          <p style="float:right;position:relative;top:-300px;left:500px"><a href="tel:9315813617"><img src="loc2.jpg" style="width:300px; border-radius:0px;box-shadow: 0px 1px 20px 10px rgba(0, 0, 0, 0.2);"></a></p>
          <p style="float:right;position:relative;top:-250px;left:500px"><a href="tel:9087823017">
          <!-- <?php
                                                                             
                                                                             $sql="SELECT Phone_no from family where User_ID='$us'";
                                                                             echo $sql;
                                                                             ?> -->
          <!-- "> -->
          <img src="loc2.jpg" style="width:300px; box-shadow: 0px 1px 20px 10px rgba(0, 0, 0, 0.2);"></a></p>
        </div>
      </div>
    </div>
    <div class="success" style="position:relative; top:-300px;height:80px;padding:10px;">
        <p><strong>Location and alert message have been send</strong></p>
      </div>
    
</div>
  
 

 

 
  

  

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Follow us:abc._def</p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
<!-- leaflet js  -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    // Map initialization 
    var map = L.map('map').setView([14.0860746, 100.608406], 6);

    //osm layer
    var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });
    osm.addTo(map);

    if(!navigator.geolocation) {
        console.log("Your browser doesn't support geolocation feature!")
    } else {
        setInterval(() => {
            navigator.geolocation.getCurrentPosition(getPosition)
        }, 5000);
    }

    var marker, circle;

    function getPosition(position){
        // console.log(position)
        var lat = position.coords.latitude
        var long = position.coords.longitude
        var accuracy = position.coords.accuracy
        <?php
        //$d=$_SESSION['user'];
        $sql="INSERT INTO location(lat,lon,acc,User_ID) values(lat,long,accuracy,'$us')";
        ?>
        if(marker) {
            map.removeLayer(marker)
        }

        if(circle) {
            map.removeLayer(circle)
        }

        marker = L.marker([lat, long])
        circle = L.circle([lat, long], {radius: accuracy})

        var featureGroup = L.featureGroup([marker, circle]).addTo(map)

        map.fitBounds(featureGroup.getBounds())

        console.log("Your coordinate is: Lat: "+ lat +" Long: "+ long+ " Accuracy: "+ accuracy)
    }

</script>
<?php
mysqli_query($conn,"UPDATE location set red=0 WHERE User_ID='$us'");
?>


