
<?php
session_start();
$_SESSION['user'] =$_GET['username'];
$e=$_GET['username'];
$servername="localhost";
$username="root";
$passsword="12#itlamshiv";
$dbname="women";
$conn=mysqli_connect($servername,$username,$passsword,$dbname);
if (isset($_GET["sign"]))
{

$us= $_GET['username']; 
$dob= $_GET['dob']; 
$pass=$_GET['pass'];
$email = $_GET['email']; 
$phno= $_GET['phno']; 
$name=$_GET['name'];
$address= $_GET['address']; 
$reltel= $_GET['reltel']; 
$reladdress=$_GET['reladdress'];
$relation = $_GET['relation']; 
$relname= $_GET['relname']; 
$sql="INSERT INTO user(Email_ID,DOB,Phone_no,User_ID,password,Name,Address) VALUES('$email','$dob','$phno','$us','$pass','$name','$address')";
$sql1="INSERT INTO family(Phone_no,User_ID,Address,relation,Name) VALUES('$reltel','$us','$reladdress','$relation','$relname')";
if (mysqli_query($conn, $sql)&&mysqli_query($conn, $sql1)) {
  echo '<script type="text/javascript">alert("'.$name.'");</script>';
} 
else{
exit();
}
fun($us);
} 
elseif((isset($_GET["userlog"])))
{
  $us = $_GET['username'];  
  $pass=$_GET['pass'];
  $sql="SELECT * FROM user where User_ID='$us' AND password='$pass'";
  
  $result = mysqli_query($conn,$sql);
  $check = mysqli_fetch_array($result);
  if(isset($check)){
    $r="Welcome"." ".$us;
    echo '<script type="text/javascript">alert("'.$r.'");</script>';
  }
  else{
   exit();
   }
   fun($us);
}
elseif((isset($_GET["rellog"])))
{
  $us = $_GET['username'];  
  $name=$_GET['name'];
  $sql="SELECT * FROM family where User_ID='$us' AND name='$name'";
  $result = mysqli_query($conn,$sql);
  $check = mysqli_fetch_array($result);
  if(isset($check)){
    $r="Welcome"." ".$us;
    echo '<script type="text/javascript">alert("'.$r.'");</script>';
  }
  else{
   exit();
   }
   fun($us);
}
function fun($us)
{
  $_SESSION['user'] = $us;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>SAFETYFIRST</title>
<link rel="icon" href="https://st2.depositphotos.com/1823785/7267/i/600/depositphotos_72675443-stock-photo-many-people-hands-holding-colorful.jpg" type="image/png">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link href="https://fonts.googleapis.com/css2?family=Modern+Antiqua&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Gentium+Book+Plus:ital,wght@1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;background-color: white;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.9;cursor:pointer;border-radius:30px}
.w3-half img:hover{opacity:1}
#hd
{
 font-family:'Dancing Script';
 font-size: 60px;
 line-height: 50px;
 text-align:center;
 
}
#main
{
font-family: 'PlayFair';
padding-left: 110px;
}
#mySideBar
{
    box-shadow: 5px;
}
#red
{
  width:200px;
  height:200px;
  margin-left: 90px;
  border-radius: 50%;
  background-color: rgb(217, 111, 111);
  opacity:0.8;
}
#red:hover{opacity:1}
#green
{
  width:200px;
  height:200px;
  border-radius: 50%;
  
  background-color:rgb(92, 189, 92);
  opacity:0.8;
}
#green:hover{opacity:1}
#orange
{
  width:200px;
  height:200px;
  border-radius: 50%;
  margin-left: 90px;
  background-color: orange;
  opacity:0.8;
}
#orange:hover{opacity:1}
.mainn
          {   width:400px;
            height:fit-content;
            padding: 5px;
            background-color:#efd0cc;
            z-index:3;
            float:right;
            position:relative;
            top: -130px;
            left: -50px;
            border-radius: 5px;
            opacity:0.9;
            font-family: 'PlayFair';
            font-size:18px;
          }
      
        #box
        {
            position: absolute;
            top: 300px;
            text-align: left;
            font-family: 'PlayFair';
            font-size: 25px;
        }
        #story{
            position: relative;
            top: 350px;
            left: 10px;
            font-family: 'PlayFair';
        }
        #g{
          background-color: aqua;
        }
        #title{
            font-family: 'PlayFair';
            font-size: 25px;
        }
        #self-love{
          position: absolute;
        top: -120px;
          left: 70%;
          height:600px;
          width:600px;
        }
        .function{
          overflow: hidden;
          padding: 20px;
          font-family: 'PlayFair';
          font-size: 18px;
        }
        .image1{
          height: 300px;
          width: 100%;
          border-top-left-radius: 9px;
          border-top-right-radius: 9px;
        }
        @media only screen and (max-width: 900px) {
        #orange {
             margin-top:200px;
             float:left;
             margin-left:-200px;

        }
        #red {
          margin-top:400px;
             float:left;
             margin-left:-200px;
        }
        #self-love{
        position:relative;
        top:10px;
        left:20px;
          height:300px;
          width:300px;
        }
        .wk
        {
          position:relative;
          left:-150px;
        }
        .final
        {
          margin-left:50px;
        }
        .wk1
        {
          position:relative;
          left:-180px;
        }
        .fr
        {
          position:relative;
          left:-170px;
        }
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
      'red': () => {location.href="red.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>"},
      'orange': () => {location.href="orange.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>" },
      'green':()=>{location.href="green.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>"},
      'pharmacy':()=>{location.href="shopkeeper.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>"},
      'hospital':()=>{location.href="gyno.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>"},
      'safest route':()=>{location.href="safest.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>"}
    };
    // Add our commands to annyang
    annyang.addCommands(commands);
  
    // Start listening.
    annyang.start();
  }
  </script>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;background-color: #efd0cc;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h2 class="w3" id="hd"><b>Women Safety</b></h2>
  </div>
 
  <div  id="box"> 
    
    <a href="loginpage.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white" >Register</a> 
    <a href="right.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Know your Rights</a> 
</div>

    <div id="story">
    <h2 id="title">Story Time</h2>
    <form>
      <textarea rows="4" cols="20"></textarea>
      <br>
      <input type="submit" value="Upload">
    </form>
     <?php
    if (isset($_POST["story"]))
    {
      $us=$_SESSION['user'];
      $story=$_POST['text'];
      $sql="INSERT INTO story(User_ID,story) VALUES('$us','$story')";
      if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Successfully added!")</script>';
      }
    }
    ?>
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

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:60px" id="showcase">
    <h1 class="w3-jumbo" id="main"><b>Suraksha Saathi</b></h1>
    <img id="self-love" src="background.png" alt="">
    <div class="wk">
    <h2 style="position:relative; left:200px; font-family: 'Dancing Script'; "><b>Together We Can.</b></h2>
    <h2  style="position:relative; left:300px;font-family: 'Dancing Script';"><b>It's Time to Take Action.</b></h2>
    <hr style="width:700px;border:5px solid black" class="w3-round">
  </div>
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">

    
    <div class="w3-row" style="position:relative;top:50px;display: flex; flex-direction: row; 
    margin-left: 40px;
    margin-right: 40px; ">
      
      <a href="green.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>" name="green"
><div id="green" style="float:left">
        <p style="font-family:'PlayFair Display';position:relative;top:70px;left:70px;">Green</p>
      </div></a>
<a href="orange.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>" name="orange"
><div id="orange" style="float:left">

        <p style="font-family:'PlayFair Display';position:relative;top:70px;left:70px">Orange</p>
      </div></a>
<a href="red.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>" name="red"
><div id="red" style="float:left">
        <p style="font-family:'PlayFair Display';position:relative;top:70px;left:70px;">Red</p>
      </div></a>
    </div>
    <!-- <div class="mainn" >
                
      <h2 style="text-align:center; font-family: 'Dancing Script';">Functions</h2>
      <p id="g"><ul>
        <li>Green mode- the location of the user is shared with the registered emergency number.</li>
        <li>Orange mode- the location of the user is shared with the registered emergency number along with a call.</li>
        <li>Red Mode- A call to the women help centre is immediately sent along with the user’s location. An alert and the location are sent to the family members.</li>
      </ul>
       </p>
  </div> -->

  </div>

 

  
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:300px;position:relative;top:-200px">
  <div class="wk1">
    <h1 class="w3-xxxlarge final" style="font-family: 'PlayFair'; padding-left: 210px;"><b>Find Your Way</b></h1>
  </div>
    <hr style="width:700px;border:5px solid black" class="w3-round">
    <p style="font-family: 'PlayFair'; font-size: 18px; ">Our team aims to design a web-based application to help in providing safety for women across India. The application will have features such as finding the safest route to a place, sharing location and calling family members and emergency centres in case of an emergency, finding help in case of violence and more such features that ensure woman’s safety.
      Further, our application will also help women with their medical needs by providing locations of the nearest medical shops and hospitals with gynecologists. We also aim at expanding our application to assist in providing protection to children and senior citizens, if time permits.
    </p>
    
  </div>

  <!-- The Team -->
  <div class="w3-row-padding " style="position:relative;top:-200px">
    <div class="w3-col m4">
      <div style="background-color: #efd0cc; border-radius: 9px;">
        <img src="route.gif" alt="route" class="image1" >
       <a href="safest.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>">
<div class="function">
          <h3 style="text-align:center;">Safest Route</h3>
          <div style="text-align: center;">
          <input type="submit" value="Safest Route">
        </div>
        </div>
       </a>
      </div>
    </div>
    <div class="w3-col m4 ">
      <div style="background-color: #efd0cc; border-radius: 9px;">
        <img src="medicine.gif" alt="shop" class="image1">
        <a href="shopkeeper.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>"><div class="function">
          <h3 style="text-align:center;">Get Sanitary Napkin</h3>
          <div style="text-align: center;">
          <input type="submit" value="Nearest Chemist Shop">
        </div>
        </div>
      </div>
      </div>
    <div class="w3-col m4 ">
      <div style="background-color: #efd0cc; border-radius: 9px;">
        <img src="gynaecologist.gif" alt="gyno" class="image1"></a>
         <a href="gyno.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>">

        <div class="function">
          <h3 style="text-align:center;"> Gynecologist</h3>
          <div style="text-align: center;">
          <input type="submit" value="Gynecologist Center ">
          </div>
        </div>
      </div>
        </a>
    </div>
  </div>

  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:50px;border:1px dotted black;position:Relative;top:-150px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Contact Us.</b></h1>
    <hr style="width:50px;border:5px solid black" class="w3-round">
    <p>For more information Contact us anytime:)</p>
    <form  target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-grey w3-margin-bottom">Send Message</button>
    </form>  
  </div>

<!-- End page content -->
</div>
<?php
if (isset($_POST["consub"]))
{

$name = $_POST['Name']; 
$email= $_POST['Email']; 
$message=$_POST['Message'];

$sql="INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')";
if (mysqli_query($conn, $sql)) {
  echo '<script>alert("Your Message has been send!!")</script>';
} 
}
?>

<!-- W3.CSS Container -->
<div class="w3-container w3-padding-32" style="background-color: black;">
<div class="fr">
<p style="color: #efd0cc;position:relative;left: 50%; font-size: 18px;">Made with love: hello_world_ADS
</div>
</p></div>

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



