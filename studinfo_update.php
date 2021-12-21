<?php require 'db_connection.php'; ?>
<?php include "header.php";?>
              
              <?php

              if(isset($_GET['id'])){
                  $id=mysqli_real_escape_string($conn,$_GET['id']);
    $qry_student_info="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,
    student_info.l_name,student_info.mothers_name,student_info.dep,student_info.birth_date,student_info.height,
    student_info.S_weight,
    student_info.sex,student_info.e_level,student_info.olompic_type,student_info.reg_date,
    student_info.result,student_info.place_computed,student_info.Certificates,departments.dep_name FROM student_info
    INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id' ";

   // $qry_student_info="SELECT * FROM Student_info WHERE stud_id='$id' ";
    $qry_student_address="SELECT * FROM student_address WHERE stud_id='$id' ";
    $qry_student_rel_address="SELECT * FROM relative_home_address WHERE stud_id='$id' ";
    $qry_student_relA_address="SELECT * FROM relative_addis WHERE stud_id='$id' ";

    $res_s_i=mysqli_query($conn,$qry_student_info);
    $res_s_a=mysqli_query($conn,$qry_student_address);
    $res_r_h=mysqli_query($conn,$qry_student_rel_address);
    $res_r_a=mysqli_query($conn,$qry_student_relA_address);



    $res_stud_info=mysqli_fetch_assoc($res_s_i); 
    $res_address=mysqli_fetch_assoc($res_s_a);
    $res_rel_home=mysqli_fetch_assoc($res_r_h);
    $res_rel_addis=mysqli_fetch_assoc($res_r_a);
              }

       else if(isset($_GET['update'])){
        $id=mysqli_real_escape_string($conn,$_GET['id']);
$qry_student_info="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,
student_info.l_name,student_info.mothers_name,student_info.dep,student_info.birth_date,student_info.height,
student_info.S_weight,
student_info.sex,student_info.e_level,student_info.olompic_type,student_info.reg_date,
student_info.result,student_info.place_computed,student_info.Certificates,departments.dep_name FROM student_info
INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id' ";

// $qry_student_info="SELECT * FROM Student_info WHERE stud_id='$id' ";
$qry_student_address="SELECT * FROM student_address WHERE stud_id='$id' ";
$qry_student_rel_address="SELECT * FROM relative_home_address WHERE stud_id='$id' ";
$qry_student_relA_address="SELECT * FROM relative_addis WHERE stud_id='$id' ";

$res_s_i=mysqli_query($conn,$qry_student_info);
$res_s_a=mysqli_query($conn,$qry_student_address);
$res_r_h=mysqli_query($conn,$qry_student_rel_address);
$res_r_a=mysqli_query($conn,$qry_student_relA_address);



$res_stud_info=mysqli_fetch_assoc($res_s_i); 
$res_address=mysqli_fetch_assoc($res_s_a);
$res_rel_home=mysqli_fetch_assoc($res_r_h);
$res_rel_addis=mysqli_fetch_assoc($res_r_a);
       }

    ?>
        <form action="update_db.php" method="POST">
              <br><br>
              <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-right">
                                          
                                          <div class="jumbotron">
                                              <div class="row">
                                                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                                                      <h1 display-1>UPDATE</h1>
                                                      
                                                      <hr>
                                                    </div>
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                            <label>Id number:</label>
                                                 <input type="text" class="form-control" name="studid" value="<?php echo $res_stud_info['stud_id']?>">
                                            <!-- <input type="text" class="form-control" name="studid" value="<?php echo $res_stud_info['stud_id'] ?>"> -->
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control " value="<?php echo $res_stud_info['f_name']; ?>" name="Fname">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">

                                            <label>Middle Name:</label>
                                            <input type="text" class="form-control" value="<?php echo $res_stud_info['m_name'] ?>" name="Mname">
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                            <label>Last Name:</label>
                                            <input type="text" class="form-control" value="<?php echo $res_stud_info['l_name'] ?>" name="Lname">
                                            <br>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                            <label>Mother full name :</label>
                                            <input type="text" class="form-control" value="<?php echo $res_stud_info['mothers_name'] ?>" name="Mother_name">
                                        </div>

                                        <br>

                                        <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <label>Date of birth:</label>
                                            <input class="form-control" type="date" name="birth_date" value="<?php echo $res_stud_info['birth_date'] ?>">
                                        </div>
                                        <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">

                                            <label for="height">Height :</label>
                                            <input class="form-control" type="number" value="<?php echo $res_stud_info['height']?>" name="height">
                                        </div>

                                        <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <label for="weight">weight :</label>
                                            <input class="form-control" type="number" name="weight" value="<?php echo $res_stud_info['S_weight']?>">
                                            <br>
                                        </div>

                                        <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group-lg">
                                                <label for="sell">sex :</label>
                                                <select class="form-control" name="sex" value="<?php echo $res_stud_info['sex']?>">
                                                    <option name="gender">male</option>
                                                    <option name="gender">female</option>
                                                 </select>
                                            </div>
                                        </div>
                                        <br>


                                        <div class="col-xs-4 col-sm-4 col-mweightd-3 col-lg-3 col-xl-3">
                                            <label for="sell">yetmemert level</label>
                                            <input class="form-control" type="text" name="e_level" value="<?php echo $res_stud_info['e_level']?>">
                                        </div>




                                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                            <label for="sell">course he/she is going to take</label>
                                        
                                            <select name="dep" id="" class="form-control">
                                                    <option value="<?php echo $row['dep'];?>"> <?php echo $res_stud_info['dep_name'];?></option>                              -->
                                                    <?php while($row=mysqli_fetch_array($res)):?>
                                                    <option value=" <?php echo $row[0]; ?>"><?php echo $row [1];?></option>   
                                                   <?php endwhile ;?>
                                                </select> 
                                            </div>


                                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                            <label for="sell">Type of computition</label>
                                            <select name="olompic_type" id="" class="form-control" value="<?php echo $res_stud_info['olompic_type']?>">
                                            
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
                                            <input class="form-control pull-left" type="text" name="region" value="<?php echo $res_address['region']?>">
                                        </div>

                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="">sub city</label>
                                            <input class="form-control" type="text" name="sub_city" value="<?php echo $res_address['sub_city']?>">
                                        </div>

                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="region">Wereda</label>
                                            <input class="form-control" type="text" name="wereda" value="<?php echo $res_address['wereda']?>">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="region">Kebele</label>
                                            <input class="form-control" type="text" name="kebele" value="<?php echo $res_address['kebele']?>">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="region">po_box</label>
                                            <input class="form-control" type="text" name="po_box" value="<?php echo $res_address['po_box']?>">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="region">Phone number</label>
                                            <input class="form-control" type="number" name="p_number" value="<?php echo $res_address['phon_num']?>">
                                        </div>
                                    </div>
                                </div>

                                


                                <div class="jumbotron">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <p><label class="display-4"> Closer relative</label>from place he/she came</p>
                                            <hr>
                                        </div>

                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="name">Full name</label>
                                            <input class="form-control " type="text" name="rel_full_name" value="<?php echo $res_rel_home['full_name']?>">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="name">phone number</label>
                                            <input class="form-control " type="number" name="rel_ph_number" value="<?php echo $res_rel_home['phon_num']?>">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="name">Region</label>
                                            <input class="form-control " type="text" name="rel_region" value="<?php echo $res_rel_home['region']?>">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="name">zone</label>
                                            <input class="form-control " type="text" name="rel_zone" value="<?php echo $res_rel_home['zone']?>">
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="name">Wereda</label>
                                            <input class="form-control " type="text" name="rel_wereda" value="<?php echo $res_rel_home['wereda']?>">
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
                                            <input class="form-control " type="text" name="Adr_full_name" value="<?php echo $res_rel_addis['full_name']?>">
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <label for="name">Phone number</label>
                                            <input class="form-control " type="text" name="Adr_p_number" value="<?php echo $res_rel_addis['phon_num']?>">
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <label for="name">sub city</label>
                                            <input class="form-control " type="text" name="Adr_subCity"  value="<?php echo $res_rel_addis['sub_city']?>">
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <label for="name">kebele</label>
                                            <input class="form-control " type="text" name="Adr_kebele" value="<?php echo $res_rel_addis['kebele']?>">
                                        </div>

                                    </div>
                                </div>

                                <div class="jumbotron">
                                    <div class="row">
                                        <label for="result">result he/she get from melemela</label><br>
                                        <input class="form-control" name="result" type="number" value="<?php echo $res_stud_info['result']?>">
                                        <label for="related">places he/she previsouly computed before : </label>
                                        <input class="form-control" type="text" name="computed" value="<?php echo $res_stud_info['place_computed']?>">
                                        <br>
                                        <!-- <label>cirteficates:</label>
                                      
                                      
                                        <input type="file" class="custorm-file-input" name="Certificates" value="<?php echo $res_stud_info['Certificates']?>"><?php $res_stud_info['Certificates']?> <br><br> -->
                                    </div>
                                        <br><br>
                                        <button class="btn btn-success btn-block" type="submit" name="update">update</button>
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