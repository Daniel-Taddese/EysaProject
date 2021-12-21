<?php include 'header.php' ?>
<?php require 'insert_db.php'?>
<html>
    <head><title>insert restult></title>
  </head>

    <body>
        <br>
      
   <form action="#"" method="POST" >
                  <div class="card hello card-info text-center">
                        <div class="card-header"> <h3> Insert student result</h3></div>
                                    <div class="col float_right bg-dark">
                                        <br>
                                        <input type="search" class="form-control" name="id" placeholder="Enter id number">                          
                                        <br>
                                        <div class="container">
                                        <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <button class="btn btn-outline-success btn-block" type="submit" name="search_stud">Search</button>  
                                        </div>
                                        </div>
                                        </div>
                                        <br>
                                    </div>          
                    </div>
   </form>
<?php
    if(!isset($_GET['insert_db'])){
  exit();
  }else{  
    if($_GET['insert_db']=="not_found"){
       echo '<div  class="container" >
         <div class="alert alert-info" id="flash-msg">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong> sutudent not registered!.</strong>
         </div>
         </div>';
    }elseif($_GET['insert_db']=="all_semester_data_exist"){
        echo '<div  class="container" >
          <div class="alert alert-info" id="flash-msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>All student data insereted!.</strong>
          </div>
          </div>';
     }elseif($_GET['insert_db']=="semester_data_exists"){
        echo '<div  class="container" >
          <div class="alert alert-info" id="flash-msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Semester data exist!.</strong>
          </div>
          </div>';
  }elseif($_GET['insert_db']=="success"){
    echo '<div  class="container" >
      <div class="alert alert-success" id="flash-msg">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Data insereted successfuly!.</strong>
      </div>
      </div>';
}elseif($_GET['insert_db']=="invalid_input"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>please Enter the correct values!.</strong>
    </div>
    </div>';
}elseif($_GET['insert_db']=="someerror"){
  echo '<div  class="container" >
    <div class="alert alert-danger" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>data insertion falild please try again!.</strong>
    </div>
    </div>';
}elseif($_GET['insert_db']=="incorrect_seme"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Previos semester result is not insereted!.</strong>
    </div>
    </div>';
}elseif($_GET['insert_db']=="updated_successfully"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Result updated successfully!.</strong>
    </div>
    </div>';
}elseif($_GET['insert_db']=="error_in_updating"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>error happens in updating  Please try again!.</strong>
    </div>
    </div>';
}elseif($_GET['insert_db']=="not_registered"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Student not registered.</strong>
    </div>
    </div>';
}elseif($_GET['insert_db']=="res_not_found"){
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
</div>
</form>
    </body>
</html>