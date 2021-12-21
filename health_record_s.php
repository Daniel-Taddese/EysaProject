<?php include 'db_connection.php'; ?>
<?php include "header.php" ;?>

<div class="card hello card-info text-center">
        <div class="card-header  bg-light">
            <h2><strong>Search health record</strong></h2>
        </div>

        <div class="card-body">
              <form action="health_db.php" method="POST" >
                  <div class="card hello card-info text-center">
                                    <div class="col float_right bg-dark">
                                        <br>
                                        <input type="search" class="form-control" name="id" placeholder="Enter id number">                          
                                        <br>
                                        <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <button class="btn btn-outline-success btn-block" type="submit" name="health_record">Search</button>  
                                        </div>
                                        </div>
                                        <br>
                                    </div>          
                            </form>
         </div>
         
         <?php
    if(!isset($_GET['health_s'])){
      
  exit();
  }else{  
    if($_GET['health_s']=="not_registered"){
       echo '<br><div  class="container" >
         <div class="alert alert-info" id="flash-msg">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong> sutudent not found.</strong>
         </div>
         </div>';
    }elseif($_GET['health_s']=='res_not_found'){
      echo '<br><div  class="container" >
        <div class="alert alert-info" id="flash-msg">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>No health record found!</strong>
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