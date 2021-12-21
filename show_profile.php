<?php include "header.php" ?>
<?php require 'profil_db.php' ?>


<html>
    <head>
      <script src="jquery.js"></script>
      <script src="resource/vue/vue.js"></script>
    <link rel="stylesheet" href="resource/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="header.css">

  <style>
  .btn_all{
      margin-left: 30px;
  }
  </style>
    </head>
    <body>

    <div id="v_app">
           <br>
              <div class="card-header  bg-dark">
                      <form class="form-inline navbar-form " action="#" method="POST">
                        <div class="row">
                          <!-- <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"> -->
                          <div class="col float-left">
                            <div class="btn_all">
                              <input type="search" class="form-control" placeholder="Enter Name or Id number" name="full_name">
                              <button class="btn btn-outline-success" type="submit" name="search">Search</button>
                            </div>
                          </div>
                          <!-- </div> -->

                          <!-- <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"> -->
                          <div class="col float-right">
                            <div class="btn_all">
                                <div class="input-group">
                                  <select name="dep_name" class="custom-select">
                                      <option value="0" >select Departement</option>
                                        <?php while($row=mysqli_fetch_array($res)):?>
                                            <option><?php echo $row [1];?></option>
                                        <?php endwhile ;?>
                                  </select>
                            <input type="search" class="form-control" name="year" placeholder="Enter year">
                            <!-- <button type="submit" class="btn btn-outline-success" name="year" >Search</button> -->
                            <div class="input-group-append">
                              <button class="btn btn-outline-success" type="submit" name="dep_year">Search</button>
                              <!-- <button class="btn btn-outline-success" type="submit" name="filter_dep">Search</button> -->
                            </div>
                           </div>
                          </div>
                        </div>
                        <!-- </div> -->
                        </form>
                 </div>
</div>

    <div class="card-body">
           <h2><strong>Student information</strong></h2>
                <?php if($res_all): ?>
                <table class = "table table-striped">
                  <thead>
                    <tr>
                      <th>Student Id</th>
                      <th>Full name</th>
                      <th>Sex</th>
                      <th>Departement</th>
                      <th>Birth Date</th>
                      <th>Height</th>
                      <th>Weight</th>
                      <th>Result</th>
                      <th>show more</th>
                    </tr>
                  </thead>
                    <?php foreach($res_all as $res): ?>
                    <tr>
                            <td><?php echo $res['stud_id'];?></td>
                            <td><?php echo $res['f_name'].' '.$res['m_name'].' '.$res['l_name'];?></td>
                                <td><?php echo $res['sex'];?></td>
                                <td><?php echo $res['dep_name'];?></td>
                                <td><?php echo $res['birth_date'];?></td>
                                <td><?php echo $res['height'];?></td>
                                <td><?php echo $res['S_weight'];?></td>
                                <td><?php echo $res['result'];?></td>
                                <td><?php echo "<form action='show_more.php' method='post'><button class='btn btn-outline-info' value=".$res['stud_id'].' type=submit name="show_more">show more</button></form>'; ?></td>
                      </tr>
                    <?php endforeach; ?>
                    <?php endif;?>
   </tbody>
</table>

<?php
 if(!isset($_GET['profil_db'])){
  exit();
  }else{

    if($_GET['profil_db']=="Name_not_found"){
       echo '<div  class="container" >
         <div class="alert alert-info" id="flash-msg">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong>Error!</strong> Name not found.
         </div>
         </div>';
    } else if($_GET['profil_db']=="id_not_found"){
      echo '<div  class="container">
        <div class="alert alert-info" id="flash-msg">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong> Id number not found.
        </div>
        </div>';
   }else if($_GET['profil_db']=="enter_1"){
    echo '<div  class="container">
      <div class="alert alert-info" id="flash-msg">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> No data Or year doesn\'t exist or you didn\'t insert data.
      </div>
      </div>';
 }else if($_GET['profil_db']=="NO_data"){
  echo '<div  class="container">
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Error!</strong> No data found!.
    </div>
    </div>';
}     
   }
?>
</div>
</div>
</div>
     
      <script>
   $(document).ready(function(){
    $("#flash-msg").delay(2500).fadeOut();
   });

      </script>


       <script src="register.js"></script>
      <script src="resource/bootstrap/jquery.js"></script>
      <script src="resource/bootstrap/bootstrap.bundle.js"></script>
     <?php include "footer.php" ?>
  </body>
  </html>
