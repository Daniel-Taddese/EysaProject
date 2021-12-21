<?php include "header.php"?>
<?php include 'db_connection.php'; ?>

<?php 
 if(isset($_GET['health_stud_s'])){
    $id=mysqli_real_escape_string($conn,$_GET['health_stud_s']);
    $qry_display_stud="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,
    student_info.l_name,departments.dep_name FROM 
    student_info INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
    $display_stud_info=mysqli_query($conn,$qry_display_stud);
    $res_insert=mysqli_fetch_assoc($display_stud_info);
 }

?>
<br>
<div class="container">            
             <div class="card hello card-info text-center">
                        <div class="card-header"> 
                            <div class="row">
                                <hr>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                               <p>Id: <strong><?php echo $res_insert['stud_id']?></strong></p>
                              
                             </div>

                             <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                               <p>  Name:<strong><?php echo $res_insert['f_name'].' '.$res_insert['m_name'].' '.$res_insert['l_name']?></strong></p>
                                </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <p>  Departement:<strong> <?php echo $res_insert['dep_name']?></strong></p>
                         
                            </div>
                            <hr>
                         </div>
              </div>
         </div>
     </div>




<div class="card hello card-info text-center">
<hr>
                                <p><label class="display-4">Health evaluation</label></p>
                                <hr>

<form action="health_db.php" method="POST">
                                <div class="jumbotron">
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                         <p><h1>Current state of applicant</h1> Physical examination</p>

                                            <hr>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">G/A</label>
                                            <select class="form-control" name="ga" >
                                                <option value="0">select G/A</option>
                                                <option >Well looking</option>
                                                <option >now well looking</option>
                                            </select>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Blood pressure</label>
                                           <input type="text" class="form-control"  name="bl_pr">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Pulse</label>
                                            <input class="form-control " type="number" name="pulse" >
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Tempreture</label>
                                            <input class="form-control " type="number" name="temp" >
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Resparatory rate</label>
                                            <input class="form-control " type="number" name="r_r" >
                                        </div>
                                    </div>
                                </div>


                                <div class="jumbotron">
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                         <h1>Antropometric measures</h1>
                                            <hr>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Height</label>
                                            <input class="form-control" type="number" name="height" >
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Weight</label>
                                           <input type="number" class="form-control"  name="weight">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">BMI</label>
                                            <input class="form-control " type="number" name="bms" >
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Leg length</label>
                                            <input class="form-control " type="number" name="leg_len" >
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Sitting height</label>
                                            <input class="form-control " type="number" name="s_h" >
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Arm span</label>
                                            <input class="form-control " type="number" name="a_s" >
                                        </div>
                                    </div>
                                </div>



                                <div class="jumbotron">
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                         <h1>Laboratory Investigation</h1>
                                            <hr>
                                        </div>

                                         <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                         <label for="name">RBS/FBS</label>
                                         <input type="number" class="form-control"  name="rbs">
                                         </div>


                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">HGB</label>
                                            <input class="form-control " type="number" name="hgs" >
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">U/A</label>
                                            <input class="form-control " type="number" name="u_a" >
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Hepatitis</label>
                                            <select class="form-control" name="hepatitis" id="">
                                                <option value="0">select option</option>
                                                <option >B+</option>
                                                <option >B-</option>
                                                <option >C+</option>
                                                <option >C-</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Blood group</label>
                                            <select class="form-control" name="blood_g" id="">
                                                <option value="0">select option</option>
                                                <option >A+</option>
                                                <option >A-</option>
                                                <option >B+</option>
                                                <option >B-</option>
                                                <option >O+</option>
                                                <option >O-</option>
                                                <option >AB+</option>
                                                <option >AB-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>






                                <div class="jumbotron">
                                    <div class="row">
                                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                         <h1>HEENT</h1>
                                            <hr>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Head</label>
                                              <select class="form-control" name="head" id="">
                                                  <option value="0">select option</option>
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                              </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                        <label for="name">Right aye</label>
                                              <select class="form-control" name="R_aye" id="">
                                                  <option value="0">select option</option>
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                              </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                        <label for="name">Left aye</label>
                                              <select class="form-control"  name="L_aye" id="">
                                                  <option value="0">select option</option>
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                              </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">

                                        <label for="name">Right ear</label>
                                              <select class="form-control" name="R_ear">
                                                  <option value="0">select option</option>
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                              </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                        <label for="name">Left ear</label>
                                              <select class="form-control" name="L_ear">
                                                  <option value="0">select option</option>
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                              </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">CVS/ECG</label>
                                            <select class="form-control" name="cvs">
                                                  <option value="0">select option</option>
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                              </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Chest(RS)</label>
                                            <select class="form-control" name="chest">
                                                  <option value="0">select option</option>
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                              </select>
                                         </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">GIS</label>
                                            <select class="form-control" name="gis">
                                                  <option value="0">select option</option>
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                              </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">GUS</label>
                                            <select class="form-control" name="gus">
                                                  <option value="0">select option</option>
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                              </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">MSS</label>
                                            <select class="form-control" name="mss">
                                                  <option value="0">select option</option>
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                              </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                            <label for="name">Nuro examination</label>
                                            <select class="form-control" name="nuro_ex">
                                                  <option value="0">select option</option>
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                              </select>
                                        </div>


                                    </div>
                                      <hr>
                                    <div class="row">
                                        <br>
                                    <label for="name">Explanation</label>
                                    <textarea class="form-control" name="explanation"row="10" placeholder="If there is any abnoralmity write explanation in here"></textarea>
                                    </div>
                                </div>

                <div class="container">
                    <div class="row">
                    <button class="btn btn-primary btn-block" type="submit" name="insert_health" value="<?php echo $id; ?>">Insert</button>  
                    </div>
                    <br><br>  <br><br>

                </div>

    </form>
