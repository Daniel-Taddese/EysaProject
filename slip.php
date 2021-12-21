<?php include "header.php" ?>
<html>
    <head></head>
    <body>
    <form action="search_slip.php" method="POST" >
                  <div class="card hello card-info text-center">
                        <div class="card-header"> <h3>Final result</h3></div>
                                    <div class="col float_right bg-dark">
                                        <br>
                                        <input type="search" class="form-control" name="id" placeholder="Enter id number">                          
                                        <br>
                                        <button class="btn btn-outline-success btn-block" type="submit" name="search_res">Search </button>  
                                       <br>
                                    </div>          
                    </div>
   </form>
   <?php
    if(!isset($_GET['slip'])){
  exit();
  }else{  
    if($_GET['slip']=="not_registered"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Student not registered.</strong>
    </div>
    </div>';
}elseif($_GET['slip']=="res_not_found"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>There is no result insereted!.</strong>
    </div>
    </div>';
}
}
?>








<script>
   $(document).ready(function(){
    $("#flash-msg").delay(3000).fadeOut();
   });
</script>    
       <script src="register.js"></script>
      <script src="resource/bootstrap/jquery.js"></script>
      <script src="resource/bootstrap/bootstrap.bundle.js"></script>
     
     

 </body>
</html>

