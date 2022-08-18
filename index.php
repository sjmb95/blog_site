

<?php
include 'connect.php';

?>
<?php

session_start();


?>


<?php


   // set question No
   
   // $number = (int) $_GET['n'];

  

   $query = "SELECT *  FROM  blogs"; 
   
   /*  get result*/
   $result = $conn -> query($query) or die($conn->error.__LINE__);
   $length = $result->num_rows; 
   
 

  $query = "SELECT * FROM blogs
    WHERE id=$length";
   $blog1 = $result -> fetch_assoc();
   

   $length = $result->num_rows - 1;
  $query = "SELECT * FROM blogs
  WHERE id=$length";
  $blog2 = $result-> fetch_assoc();

  $length = $result->num_rows - 1;
  $query = "SELECT * FROM blogs
  WHERE id=$length";
  $blog3 = $result-> fetch_assoc();

  $length = $result->num_rows - 1;
  $query = "SELECT * FROM blogs
  WHERE id=$length";
  $blog4 = $result-> fetch_assoc();
  

  
   
 
   

   ?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <!-- // -->

    <div class ="row f ">
      <div class="col-md-12">
     
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#"> 
            <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                <a class="nav-link" href="index.php"  style="color: #cfa165">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="blogs.php" style="color: #cfa165">Blog</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="#"  style="color: #cfa165">Ask Aurenda</a>
              </li>

              
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    

      </div>

     

    </div>

     <br>
     <br>    
   
    <title>blog shit </title>
   
  </head>

  <body class="f " Style="background-color: white ">
    <div class="row">
      <div class= "col-md-12">
        <div id="slide-container" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                   <a href="#"> <img class="d-block w-100" style="height: 500px"; src="sliders/banner.png" alt="First slide"></a>
                  </div>
                 
                
                </div>
              </div>

      </div> 
      
         <br> 
      
      
    </div>
  
    <div class="row " >
      <div class= "col-md-12" style="align-content: center;">
  
      </div> 
      
          
      
      
    </div>


  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        
 
    <!--start of web body-->


  <div class= "container-fluid">  
     
<div  class= "row  ">
                            <!--first left column containing blogs -->
    <div class="col-md-8">
      <div class="row card " Style="background-color: white;color:black">  
          
        <div class= "col-md-12">
        <br><br><br><br><br>
        </div>

   <div class="col-md-1">

   </div>

   <div class="col-md-10">    <!--div of blogs -->

   <form action="blogclick.php" method="post"> </form>    <!--put to remove form error -->

   <form action="blogclick.php" method="post"> 
   <table style="width :100%; table-layout:fixed ">
    <tr style="height: 200px;">
    <td style="text-align:center">
        <img src="images/arrow.jpg" alt="." style ="width:100%; height:200px">
     </td>
              
     
     <td style="text-align:center">
     <?php echo' <h1>'. $blog1['title'].'<br></h1> 
           '. $blog1['summary']. ' <input  class="btn btn-outline-info  " type="submit" name="selected" value="read more"> ';
          ?>
       <input type="hidden" name="id" value="<?php echo ''.$blog1['id'].'';?>">
     
     </td>

    </tr>


   </table>
   
   </form>

    <div><br><br><br><br> .</div>

 <form action="blogclick.php" method="post"> 
    <table style="width :100%; table-layout:fixed ">
    <tr style="height: 200px;">
    <td style="text-align:center">
    <img src="<?php echo' '. $blog2['image'].''; ?>" alt="." style ="width:100%; height:200px"> 
     </td>
              
     
     <td style="text-align:center">
     <?php echo' <h1>'. $blog2['title'].'</h1><br> 
           '. $blog2['summary'].'';
          ?>
      <input type="hidden" name="id" value="<?php echo ''.$blog2['id'].'';?>">
      <input class="btn btn-outline-info  " type="submit" name="selected" value="read more">

    </td>
     
    </tr>


   </table>
   </form>
    
   </div>

      
<div class="col-md-1"></div>
      
<div><br><br><br>.</div>
    </div> 

    </div>  <!--end of first column-->

    <!--begin second column contain subscribe -->

 <div class="col-md-4 row">

    <div class="col-md-12" >
 <!-- Material form subscription -->
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4" style="background-color: #b5d9d6;"> 
      <strong>Subscribe</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5">

      <!-- Form -->
      <form class="text-center" style="color: #757575;" action="#!">

          <p>Join our mailing list. We write rarely, but only the best content.</p>

          <p>
              <a href="" target="_blank">See the last newsletter</a>
          </p>

          <!-- Name -->
          <div class="md-form mt-3">
            <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name">
          </div>

          <!-- E-mai -->
          <div class="md-form">
            
            <input type="email" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="E-mail">
          </div>

          <!-- Sign in button -->
          <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 " type="submit">Sign in</button>

      </form>
      <!-- Form -->

  </div>

</div>
<!-- Material form subscription -->

    </div>

 </div>    

    <!--begin second row one full  ask aurenda column-->
      <div class= "col-md-12">
          <br><br>
        </div>  

        <div class="col-md-12 card" style="text-align: center;" >
          <br><br><br><br><br>
           <h1 style="color:black">ASK AURENDA</h1>  
           <br><br><br><br>
           <input type="text" id="askAurenda" class="form-control mb-4" placeholder="Whats on your mind">

</div>  

<!--end second row one full  ask aurenda column-->

<!--begin third row first column  more blogs column-->

      <div class="col-md-8">
        <div class="row card " Style="background-color: white;color:black">  
          
          <div class= "col-md-12">
          <br><br><br><br><br>
          </div>
     <div class="col-md-1">
  
     </div>
  
     <div class="col-md-10">

     <form action="blogclick.php" method="post"> 
     <table style="width :100%; table-layout:fixed ">
    <tr style="height: 200px;">
    <td style="text-align:center">
    <img src="<?php echo' '. $blog3['image'].''; ?>" alt="." style ="width:100%; height:200px"> 
     </td>
              
     
     <td style="text-align:center">
     <?php echo' <h1>'. $blog3['title'].'</h1><br> 
           '. $blog3['summary'].'';
          ?>
     <input type="hidden" name="id" value="<?php echo ''.$blog2['id'].'';?>">
     <input class="btn btn-outline-info" type="submit" name="selected" value="read more">
    </td>
    </tr>


   </table>
  </form>
      <div><br><br><br><br> .</div>

     <form action="blogclick.php" method="post">  
      <table style="width :100%; table-layout:fixed ">
    <tr style="height: 200px;">
    <td style="text-align:center">
    <img src="<?php echo' '. $blog4['image'].''; ?>" alt="." style ="width:100%; height:200px"> 
          
     </td>
              
     
     <td style="text-align:center">
     <?php echo' <h1>'. $blog4['title'].'</h1> <br> 
           '. $blog4['summary'].'';
          ?>
      <input type="hidden" name="id" value="<?php echo ''.$blog4['id'].'';?>">
      <input class="btn btn-outline-info  " type="submit" name="selected" value="read more">
     </td>
    </tr>


   </table>
   </form>
      
     </div>
  
        
 <div class="col-md-1">
        
  <div><br><br><br>.</div>
      </div>  
    
</div>  

</div>        
    
<!-- end third row first column  more blogs column-->


<div class="col-md-1">
        
  <div><br><br><br>.</div>
      </div>  

<!-- begin third row first second column  social media-->

     <div class="col-md-3 row card">
      

     <div class= "col-md-12">
        <br><br>
      </div>  
        <div class="col-md-12">
          <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #3B5998"> <a  href="#" style="color:whitesmoke;"><i class="fa fa-facebook-official fa-2x"></i></a>facebook</button>
        </div>
        <div class= "col-md-12">
          <br>
        </div>  
          <div class="col-md-12">
            <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #00ACEE;"> <a  href="#" style="color:whitesmoke;"><i class="fa fa-twitter fa-2x"></i></a>twitter</button>
          </div>
          
          <div class= "col-md-12">
            <br>
          </div>  
          
            <div class="col-md-12">
              <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color:#DD2A7B;"> <a  href="#" style="color:whitesmoke;"><i class="fa fa-instagram fa-2x" ></i></a>instagram</button>
            </div>
            <div class= "col-md-12">
                <br><br><br>
              </div>   
     </div>

     <div class="col-md-12">
        
  <div><br><br><br>.</div>
      </div> 
</div>         


<!-- Footer -->
<footer class="page-footer font-small ft">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a class ="footerfont" href="#!">Very long link 1</a>
          </li>
          <li>
            <a class ="footerfont" href="#!">Very long link 2</a>
          </li>
          <li>
            <a class ="footerfont"  href="#!">Very long link 3</a>
          </li>
          <li>
            <a class ="footerfont"  href="#!">Very long link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a class ="footerfont" href="#!" >Link 1</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 2</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 3</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a class ="footerfont" href="#!" >Link 1</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 2</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 3</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 ">Links</h5>

        <ul class="list-unstyled ">
          <li>
            <a class ="footerfont" href="#!" >Link 1</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 2</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 3</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class=" row footer-copyright text-center py-3 " style="background-color: blue;">

    <div class="col-md-6">
    powered by:Sparex <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>

    <div class="col-md-3"></div>
 

    <div class= "col-md-3">
    <a  href="#" style="color:whitesmoke;"><i class="fa fa-facebook-official fa-1x"></i></a> &nbsp;&nbsp;
    <a  href="#" style="color:whitesmoke;"><i class="fa fa-twitter fa-1x"></i></a>&nbsp;&nbsp;
    <a  href="#" style="color:whitesmoke;"><i class="fa fa-instagram fa-1x" ></i></a>
    </div>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



</div>

</body>
<style>
.myImage{
width : 100%;
height: 250px;
border-color:  black;
border-width:20px;

}
span.myImage{

border :  black;
border-width:20px;

}
.links{
  color:red;
}

.bord{
    border: 30px solid  rgb(158, 15, 15);;
    padding:50px;
    background-color :black

  }

  .ft{
    background-color:#0d1e33;
  
    color: #cfa165 ;
    
  }

 .centerCon{

  align-content: center; 
 }

 table, th, td {
  border: 1px solid black;
}


.btn{
transition-duration: :0.4s;

}

.btn:hover{
background-color: #b5d9d6;

}

.nav-link{
transition-duration: :0.4s;

}

.nav-link:hover{
 background-color : white;

}

.card-header{

background-color: #BE9DEF;
}


.a:hover{
  background-color:#BE9DEF;
}

.footerfont{

  color:#b5d9d6;
}

.f{
 font-family: "yeseva";

}

</style>

</html>