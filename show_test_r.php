<?php include "header.php" ?>
<?php include "test_res_db.php"?>

<!-- <script src="resource/chart/Chart.min.js"></script> -->
<script src="charts.js"></script>



<html>
    <head>
      <style>
      </style>
    </head>
    <body>
    <form action="test_res_db.php" method="POST" >
                  <div class="card hello card-info text-center">
                        <div class="card-header"> <h3>Search final result</h3></div>
                                    <div class="col float_right bg-dark">
                                        <br>
                                        <input type="search" class="form-control" name="id" placeholder="Enter id number">                          
                                        <br>
                                        <button class="btn btn-outline-success btn-block" type="submit" name="search_res">Search </button>  
                                       <br>
                                    </div>          
                    </div>
   </form>
   <script>
   $(document).ready(function(){
    $("#flash-msg").delay(2500).fadeOut();
   });
</script>
  
   <?php
    if(!isset($_GET['show_test_r'])){
  exit();
  }else{  
    if($_GET['show_test_r']=="not_registered"){
  echo '<br><br><div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Student not registered.</strong>
    </div>
    </div>';
}elseif($_GET['show_test_r']=="res_not_found"){
  echo '<br><br><div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>There is no result insereted!.</strong>
    </div>
    </div>';
}
}
?>

   <?php
    if(!isset($_GET['slip'])){
  exit();
  }else{  
    if($_GET['slip']=="not_registered"){
  echo '<br><br><div class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Student not registered.</strong>
    </div>
    </div>';
}elseif($_GET['slip']=="res_not_found"){
  echo '<br><br><div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>There is no result insereted!.</strong>
    </div>
    </div>';
}
}

?>

