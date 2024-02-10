<?php @include("../system/header.php"); ?>

<div class="container">
  <div>
    <?php include("Navbar.php");?>
  </div>
  <div id="home">
<img src="../img/two.jpg" alt="Image" width="100%" style="height: 530px;">
  </div>
  <div id="aboutus">
    
  <?php include("aboutus.php");?>
  
  </div>
  <div id="services">
  <?php include("services.php");?>
    
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
</style>