
   <?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>

    <style type="text/css">

footer{
    margin-top: 80%;
background: gold;
position: sticky;
width: 100%;
}
body{
     background-image: url(image/farmer1.JPG);
     background-repeat: no-repeat;
     background-size: cover;
     background-attachment: fixed;
}
.container{
     background-image: url(image/farmer1.JPG);
     background-repeat: no-repeat;
     background-size: cover;
     background-attachment: fixed;
    }
    h1{
        text-align: center;
        margin-top: 5%;

    }
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}
body{
    min-height: 100vh;
}
a{
    text-decoration: none;
}
li{
    list-style: none;
}

h2{
    color: #444;
}
.btn{
    background: teal ;
    color: white;
    padding: 5px 10px;
    text-align: center;
}
.btn:hover{
    color: blue;
    background: gold;
    border: 2px solid;
}
.side-menu{
    position: fixed;
    background: darkgreen;
    width: 20vw;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    margin-top: 1%;
    width: 10%;
}
.side-menu .brand-name{
    height: 10vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.side-menu li a{
    font-size: 12px;
    padding: 20px 40px;
    color: white;
    display: flex;
    align-items: center;
    width: 7%;
}
.side-menu li a:hover {
background: powderblue;
color: #f05462;
}
.container{
    position: absolute;
    right: 0;
    width: 80vw;
    height: 100vh;
}
.container .header{
    position: fixed;
    top: 0;
    right: 0;
    width: 80vw;
    height: 10vh;
    background: darkgreen;
    display: flex;
    align-items: center;
    width: 100%;
    box-shadow: 0 4px 8px 0 rgb(0, 0, 0);

}
.container .header .nav{
    width: 90%;
    display: flex;
    align-items: center;

}
.container .header .nav .search{
    flex: 3;
    display: flex;
    justify-content: center;
}
.container .header .nav .search input[type=text]{
    border: none;
}
.container .header .nav .user{
    flex: 1;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.container .header .nav .search button{
    width: 40px;
    height: 40px;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
}
.container .header .nav .img-case{
    position: relative;
    width: 40px;
    height: 40px;
}
.container .header .nav .img-case img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
@media screen and (max-width: 1050px){
    .side-menu li{
        font-size: 18px;
    }
}
@media screen and (max-width: 1050px){
    .side-menu li span{
        display: none;
    }
}
.container .content{
    position: relative;
    margin-top: 10vh;
    min-height: 900vm;

}
.container .content .cards{
    padding: 20px 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.container .content .cards .card{
    width: 50px;
    height: 380px;
    background: white;
    
    display: flex;
    align-items: center;
    justify-content: space-around; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2) 0 6px 20px rgba(0, 0, 0, 0.9);
}
.submenu{
    display: inline;
    display: block;
    cursor: pointer;
}

 
    
    </style>
    <title>Farmer Portal</title>
    <link rel="stylesheet" href="style.cs" />
</head>
<body>
<div class="form">
      
        </div>

 
<!DOCTYPE html>
<html>
<head>

    </style>
    <meta charset="utf-8">
    <title>Dashboard -Farmer Portal</title>
</head>
<body>
   
    <div class="form2">
        
        </div>
        <div class="side-menu">
          <div class="brand-name">
          </div>
          <ul>
            <li><a href="#" style="text-decoration: none;"><img src="avatar.PNG" style="width: 30px; height: 30px; margin: 2px"><span>About Us</a></span></li>
            
            <li><a href="shop/index.php" style="text-decoration: none;"><img src="avatar.PNG" style="width: 30px; height: 30px; margin: 2px;"><span>Place order for the product</span></li>
             <li><a href="contact.php" style="text-decoration: none;"><img src="avatar.PNG" style="width: 30px; height: 30px; margin: 2px;"><span>Contact Us</a></span></li>
            
             </li>
            <li><a href="#" style="text-decoration: none;"><img src="avatar.PNG" style="width: 30px; height: 30px; margin: 2px"><span>Help</a></span></li>
            
          </ul>
        </div>
<div class="container">
    
<header>Farmer Tech lending System</header>
  <div class="header">
    <li><a href="admin.php" style="text-decoration: none;"><img src="image/logo.JPG" style="width: 30px; height: 30px; margin: 2px;"><span style="color: gold;">Farmer Dashboard</a></span></li>
    <div class="nav">
    <div class="search">
<input type="text" placehold="search">
<button type="submit"> <img src="avatar.PNG" style="width: 30px; height: 30px;"></button>
    </div>
     <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?>
    <div class="user">
       <img src="avatar.PNG" style="display: flex; width: 30px; height: 30px; margin-left:60%;">
      <div class="img-case">
        <p style="margin-left:45px;0px;"><strong style="margin-top: 100px;"><p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p><a href="farmer_login.php">Logout</a></p>
      </div>
    </div>

  </div>
</div>
<div class="cover"></div>
 <h1>Farmer Lending Platform</h1>
<center><p style="margin-top:10px; text-align: center; margin-top: 5%;">Welcome Farmer </p><center>
   
</body>
 <footer>
    &copy;<em id="date"></em>Paul Owuor De Developer
</footer>
</html>
