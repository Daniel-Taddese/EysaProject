<?php require 'update_db.php' ?> 
<?php require 'profil_db.php' ?> 
<?php include 'header.php'?>


<!DOCTYPE html>
<html>

<head>
    <title>Registeration</title>
    <script src="resource/vue/vue.js"></script>
    <link rel="stylesheet" href="resource/bootstrap/bootstrap.min.css">
    
</head>

<div class="card hello card-info text-center">
        <div class="card-header  bg-light">
            <h2><strong>search for updating user information</strong></h2>
        </div>

        <div class="card-body">
              <form action="update_db.php" method="POST" >
                  <div class="card hello card-info text-center">
                                    <div class="col float_right bg-dark">
                                        <br>
                                        <input type="search" class="form-control" name="id" placeholder="Enter id number">                          
                                        <br>
                                        <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <button class="btn btn-outline-success btn-block" type="submit" name="search_stud">Search</button>  
                                        </div>
                                        </div>
                                        <br>
                                    </div>          
                            </form>
         </div>


         <?php
if(!isset($_GET['update'])){
  exit();
  }else{  
    if($_GET['update']=="not_found"){
       echo '<br><div  class="container" >
         <div class="alert alert-info" id="flash-msg">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong> sutudent is not registered.</strong>
         </div>
         </div>';
    }elseif($_GET['update']=='success'){
      echo '<br><div  class="container" >
        <div class="alert alert-success" id="flash-msg">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data updated successfuly!</strong>
        </div>
        </div>';
    }
  }
?>

    <script src="register.js"></script>
    <script src="resource/bootstrap/jquery.js"></script>
    <script src="resource/bootstrap/bootstrap.bundle.js"></script>
    <?php include "footer.php"?>
</body>

</html>
