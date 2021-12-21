<?php include "header.php"?>
<?php include "perfo_db.php"?>
<html>

<head>

</head>

<body>
    <div class="card hello card-info text-center">
        <div class="card-header  bg-light">
            <h2><strong>Student performanc Tracking</strong></h2>
        </div>

        <div class="card-body">
        <form action="perfo_db.php" method="POST" >
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
                    </div>
   </form>

<?php
    if(!isset($_GET['perfo_db'])){
      
  exit();
  }else{  
    if($_GET['perfo_db']=="not_found"){
       echo '<br><div  class="container" >
         <div class="alert alert-info" id="flash-msg">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong> sutudent not found.</strong>
         </div>
         </div>';
    }elseif($_GET['perfo_db']=='all_data_inserted'){
      echo '<br><div  class="container" >
        <div class="alert alert-info" id="flash-msg">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong> all student tests are inserted</strong>
        </div>
        </div>';
    }elseif($_GET['perfo_db']=='success'){
      echo '<br><div  class="container" >
        <div class="alert alert-success" id="flash-msg">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data inserted successfuly!</strong>
        </div>
        </div>';
    }
  }
?>


<!-- elseif($_GET['perfo_db']=="all_data_inserted"){
        echo '<div  class="container" >
          <div class="alert alert-info" id="flash-msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>All student data insereted!.</strong>
          </div>
          </div>';
     }elseif($_GET['perfo_db']=="semester_data_exists"){
        echo '<div  class="container" >
          <div class="alert alert-info" id="flash-msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Semester data exist!.</strong>
          </div>
          </div>';
  }elseif($_GET['perfo_db']=="success"){
    echo '<div  class="container" >
      <div class="alert alert-success" id="flash-msg">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Data insereted successfuly!.</strong>
      </div>
      </div>';
}elseif($_GET['perfo_db']=="invalid_input"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>please Enter the correct values!.</strong>
    </div>
    </div>';
}elseif($_GET['perfo_db']=="someerror"){
  echo '<div  class="container" >
    <div class="alert alert-danger" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>data insertion falild please try again!.</strong>
    </div>
    </div>';
}elseif($_GET['perfo_db']=="incorrect_seme"){
  echo '<div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Previos test result is not insereted!.</strong>
    </div>
    </div>';
}
} -->
<script>
   $(document).ready(function(){
    $("#flash-msg").delay(3000).fadeOut();
   });
</script> 
</body>
</html>


