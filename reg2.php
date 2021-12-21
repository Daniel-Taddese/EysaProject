<?php include 'db_connection.php'; ?>
<?php require 'profil_db.php'?>
<?php include 'header.php'?>
<?php
if(isset($_GET['register'])){
      if($_GET['register']=="success"){
         echo '<div  class="container" >
           <div class="alert alert-info" id="flash-msg">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Data insertec successfully</strong>.
           </div>
           </div>';
      } elseif($_GET['register']=="id_exist"){
        echo '<div  class="container" >
          <div class="alert alert-info" id="flash-msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Student Id exist please change id number</strong>  .
          </div>
       </div>';
     }
    }
  ?> 

<br><br><br>
<div class="container">
         <br>
            <form class="form-horizontal " action="register.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-right">

                                <div class="jumbotron" style="background:lightseagreen">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                                            <h1 display-1>Registser</h1>
                                            <hr>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                            <label>Id number</label>
                                            <input type="text" class="form-control active" placeholder="Id number" name="studid" required>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                            <label>First Name</label>
                                            <input type="text" class="form-control active" placeholder="First name" name="Fname" required>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">

                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" placeholder="Middle name" name="Mname" required>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last name" name="Lname" required>
                                            <br>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                            <label>Mother full name</label>
                                            <input type="Mother_nametext" class="form-control" placeholder="Mothers full name" name="Mother_name" required>
                                        </div>

                                        <br>

                                        <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <label>Date of birth</label>
                                            <input class="form-control" type="date" name="birth_date" required>
                                        </div>
                                        <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">

                                            <label for="height">Height</label>
                                            <input class="form-control" type="number" placeholder="height" name="height" required>
                                        </div>

                                        <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <label for="weight">weight</label>
                                            <input class="form-control" type="number" name="weight" placeholder="weight" required>
                                            <br>
                                        </div>

                                        <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group-lg">
                                                <label for="sell">sex</label>
                                                <select class="form-control" name="sex">
                                                    <option name="gender">male</option>
                                                    <option name="gender">female</option>
                                                 </select>
                                            </div>
                                        </div>
                                        <br>


                                        <div class="col-xs-4 col-sm-4 col-mweightd-3 col-lg-3 col-xl-3">
                                            <label for="sell">yetmemert level</label>
                                            <input class="form-control" type="text" placeholder="level" name="e_level" required>
                                        </div>





                                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                            <label for="sell">course he/she is going to take</label>

                                            <select name="dep" id="" class="form-control">
                                                <option value="0"> Select departement</option>
                                                    <?php while($row=mysqli_fetch_array($res)):?>
                                                   <option value=" <?php echo $row[0]; ?>"><?php echo $row [1];?></option>
                                                   <?php endwhile ;?>
                                                </select>
                                            </div>

                                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                            <label for="sell">Type of computition</label>
                                            <select name="olompic_type" id="" class="form-control">
                                                <option >Olympic</option>
                                                <option >Paralympic</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>






                                <div class="jumbotron">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                                            <label class="display-4  ">Full address</label>
                                            <hr>
                                        </div>

                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="region">region</label>
                                            <input class="form-control pull-left" type="text" name="region" placeholder="region" required>
                                        </div>

                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="">sub city</label>
                                            <input class="form-control" type="text" name="sub_city" placeholder="sub city">
                                        </div>

                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="region">Wereda</label>
                                            <input class="form-control" type="text" name="wereda" placeholder="wereda">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="region">Kebele</label>
                                            <input class="form-control" type="text" name="kebele" placeholder="kebele">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="region">po_box</label>
                                            <input class="form-control" type="text" name="po_box" placeholder="po_box">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="region">Phone number</label>
                                            <input class="form-control" type="number" name="p_number" placeholder="Phone number">
                                        </div>
                                    </div>
                                </div>

                                <div class="jumbotron">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <p><label class="display-4"> Closer relative</label>Home address</p>
                                            <hr>
                                        </div>

                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="name">Full name</label>
                                            <input class="form-control " type="text" name="rel_full_name" placeholder="Full name">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="name">phone number</label>
                                            <input class="form-control " type="number" name="rel_ph_number" placeholder="phone number">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="name">Region</label>
                                            <input class="form-control " type="text" name="rel_region" placeholder="region">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="name">zone</label>
                                            <input class="form-control " type="text" name="rel_zone" placeholder="Zone">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="name">Wereda</label>
                                            <input class="form-control " type="text" name="rel_wereda" placeholder="wereda">
                                        </div>
                                    </div>
                                </div>


                                <div class="jumbotron">
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <p><label class="display-4">Closer relative</label>from Addis abbeba</p>
                                            <hr>
                                        </div>

                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <label for="name">Full name</label>
                                            <input class="form-control " type="text" name="Adr_full_name" placeholder="Full name">
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <label for="name">Phone number</label>
                                            <input class="form-control " type="text" name="Adr_p_number" placeholder="phone number">
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <label for="name">sub city</label>
                                            <input class="form-control " type="text" name="Adr_subCity" placeholder="sub city">
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <label for="name">kebele</label>
                                            <input class="form-control " type="text" name="Adr_kebele" placeholder="kebele">
                                        </div>

                                    </div>
                                </div>

                                <div class="jumbotron">
                                    <div class="row">
                                        <label for="result">result he/she get from melemela</label><br>
                                        <input class="form-control" name="result" type="number" placeholder="enter your reslut">
                                        <label for="related">places he/she previsouly computed before : </label>
                                        <input class="form-control" type="text" name="computed">
                                        <label>cirteficates:</label>
                                         <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="Certificates" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                        </div>
                                        </div> 
                                        </div>
                                    <br><br><br>
                                    <button class="btn btn-success btn-block" type="submit" name="submit">submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>

    <script>
   $(document).ready(function(){
    $("#flash-msg").delay(2500).fadeOut();
   });

      </script>

</body>

</html>



 <?php
// if(!isset($_GET['register'])){
//     exit();
//     }else{
//       if($_GET['register']=="success"){
//          echo '<div  class="container" >
//            <div class="alert alert-info" id="flash-msg">
//              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//              <strong>Data insertec successfully</strong>.
//            </div>
//            </div>';
//       } elseif($_GET['register']=="id_exist"){
//         echo '<div  class="container" >
//           <div class="alert alert-info" id="flash-msg">
//             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//             <strong>Student Id exist please change id number</strong>  .
//           </div>
//        </div>';
//      }
//     }
  
  ?> 


<!-- 
                                <hr>
                                <p><label class="display-4">Health evaluation</label></p>
                                <hr>



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
                                </div> -->

