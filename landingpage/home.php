<?php @include("../system/header.php"); ?>

<div>
  <div  style="position:sticky; top:0; z-index:1;">
    <?php include("Navbar.php");?>
  </div>
  <div id="home">
<img src="../img/five.jpg" alt="Image" width="100%" style="height: 560px;">
  </div>
  <div class="container">
    
 
  <div id="aboutus">
    
  <?php include("aboutus.php");?>
  
  </div>
  <div id="services" style="margin-bottom: 50px;">
  <?php include("services.php");?>
    
  </div>
  </div>
</div>

<?php @include("../system/footer.php"); ?>

<style>
*{
    padding:0;
    margin:0;
    box-sizing: border-box;
  font-family: "Roboto Condensed", sans-serif;
}
a{
    text-decoration: none;
}
.d-flex{
    display:flex;
}
nav{
    padding:25px 70px;
    background-color: green;
    color:#fff;
}
nav a{
    color:#fff;
}
.justify-content-between{
    justify-content: space-between;
}
.gap-3{
    gap:30px;
}
.container{
    padding:0px 60px;
}
h1{
    text-align:center;
    padding:40px 0px 20px 0px;
}
</style>