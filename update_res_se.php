<?php include 'header.php' ?>
<form action="update_res_db.php" method="POST" >
                  <div class="card hello card-info text-center">
                        <div class="card-header"> <h3> Update result</h3></div>
                                    <div class="col float_right bg-dark">
                                        <br>
                                        <input type="search" class="form-control" name="id" placeholder="Enter id number" autofocus>                          
                                        <br>
                                        <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <button class="btn btn-outline-success btn-block" type="submit" name="search_stud" >search </button>  
                                        </div>
                                        </div>
                                        <br>
                                    </div>          
                    </div>
   </form>  

    
<!-- <?php
    if(!isset($_GET['update'])){
  exit();
  }else{  
    if($_GET['update']=="not_found"){
       echo '<div  class="container" >
         <div class="alert alert-info" id="flash-msg">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong> sutudent not found.</strong>
         </div>
         </div>';
    }elseif($_GET['update_res']=="all_data_inserted"){
        echo '<div  class="container" >
          <div class="alert alert-info" id="flash-msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>All student data insereted!.</strong>
          </div>
          </div>';
     }elseif($_GET['update_res']=="semester_data_exists"){
        echo '<div  class="container" >
          <div class="alert alert-info" id="flash-msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Semester data exist!.</strong>
          </div>
          </div>';
  }elseif($_GET['update_res']=="success"){
    echo '<div  class="container" >
      <div class="alert alert-success" id="flash-msg">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Data insereted successfuly!.</strong>
      </div>
      </div>';
}elseif($_GET['update_res']=="invalid_input"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>please Enter the correct values!.</strong>
    </div>
    </div>';
}elseif($_GET['update_res']=="someerror"){
  echo '<div  class="container" >
    <div class="alert alert-danger" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>data insertion falild please try again!.</strong>
    </div>
    </div>';
}elseif($_GET['update_res']=="res_not_found"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>No result found !.</strong>
    </div>
    </div>';
}elseif($_GET['update_res']=="updated_successfully"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Result updated successfully!.</strong>
    </div>
    </div>';
}elseif($_GET['update_res']=="error_in_updating"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>error happens in updating  Please try again!.</strong>
    </div>
    </div>';
}elseif($_GET['update']=='not_registered'){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Student not registered.</strong>
    </div>
    </div>';
}elseif($_GET['update_res']=="res_not_found"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>There is no result insereted!.</strong>
    </div>
    </div>';
}
}
?> -->


<?php
    if(!isset($_GET['update'])){
  exit();
  }else{  
    if($_GET['update']=="not_registered"){
  echo '<br><div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Student not registered.</strong>
    </div>
    </div>';
}elseif($_GET['update']=="res_not_found"){
  echo '<br><div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>There is no result insereted!.</strong>
    </div>
    </div>';
}elseif($_GET['update']=="success"){
  echo '<br><div  class="container" >
    <div class="alert alert-success" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Data successfully updated !.</strong>
    </div>
    </div>';
}elseif($_GET['update']=="error"){
  echo '<br><div  class="container" >
    <div class="alert alert-danger" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong> unknown error occured pleas try again!.</strong>
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
</body>