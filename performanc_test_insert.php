<?php include "header.php"?>
<?php include 'db_connection.php' ?>
<?php include 'perfo_db.php' ?>
<?php 
$qry_semester="SELECT * FROM test_num";
$res_test_num=mysqli_query($conn,$qry_semester);


    if(isset($_GET['id'])){ 
        $id=$_GET['id'];
            echo ' <br><div  class="container" >
              <div class="alert alert-info" id="flash-msg">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Please fill the form correctly!.</strong>
              </div>
              </div>';

              $id=mysqli_real_escape_string($conn,$_GET['id']);
              // echo "<script>alert($id);</script>";
              $qry_display_stud="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
              departments.dep_name FROM 
              student_info INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
              $display_stud_info=mysqli_query($conn,$qry_display_stud);
              $res_insert=mysqli_fetch_assoc($display_stud_info);
         
  }

if(isset($_GET['sid'])){
    $id=mysqli_real_escape_string($conn,$_GET['sid']);
    $qry_display_stud="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
    departments.dep_name FROM 
    student_info INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
    $display_stud_info=mysqli_query($conn,$qry_display_stud);
    $res_insert=mysqli_fetch_assoc($display_stud_info);
}

if(isset($_GET['test_data_exists'])){
    echo ' <br><div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Semester data exists!.</strong>
    </div>
    </div>'; 
    $id=mysqli_real_escape_string($conn,$_GET['test_data_exists']);
    $qry_display_stud="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
    departments.dep_name FROM 
    student_info INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
    $display_stud_info=mysqli_query($conn,$qry_display_stud);
    $res_insert=mysqli_fetch_assoc($display_stud_info);
}

if(isset($_GET['incorrect_test_num'])){
    echo ' <br><div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>please choose the correct test number!.</strong>
    </div>
    </div>'; 
    $id=mysqli_real_escape_string($conn,$_GET['incorrect_test_num']);
    $qry_display_stud="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
    departments.dep_name FROM 
    student_info INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
    $display_stud_info=mysqli_query($conn,$qry_display_stud);
    $res_insert=mysqli_fetch_assoc($display_stud_info);
}






?>
<br><br><hr>
<form action="perfo_db.php"  method="POST">        
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
         <!-- <hr><br><br> -->
         <!-- <div class="container"> 
         <div class="row">  
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 ">
               <label for="" class="text-center">Id</label>
               <input type="number" name="id" class="form-control" value="<?php echo $res_insert['stud_id']?>"> 
            </div> 
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
                 </div>
             </div> 
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
                 <label for="" class="text-center">select Test</label>
                 <select class="form-control" name="test_num">
                 <?php while($row=mysqli_fetch_array($res_test_num)):?>
                            <option value=" <?php echo $row[0]; ?>"><?php echo $row [1];?></option>                                           
                    <?php endwhile ;?>
                 </select>
                 </div>
             </div>
            </div> -->
        
<!-- <hr><br><br> -->
<br>
        
        </div>
    </div>
     <!-- <table class="table table-bordered table-dark">
        <tr>
            <th class="text-center" colspan="4">Anthropometric Test 20% </th>
        </tr>
        <tr>
            <td>Height 10%</td>
            <td>Weight 2%</td>
            <td>Arm Span 4%</td>
            <td>Hand Span 4%</td>
        </tr>
        <tr>
            <td><input type="number" class="form-control" name="Height" required></td>
            <td><input type="number" class="form-control" name="Weight" required></td>
            <td><input type="number" class="form-control" name="Arm_Span" required></td>
            <td><input type="number" class="form-control" name="Hand_Span" required></td>
        </tr>
    </table>

    <br>

    <table class="table table-bordered table-dark">
        <tr>
            <th class="text-center" colspan="11">Physical Fitness Test 35%</th>
        </tr>
        <tr>
            <td>Shuttle run 5%</td>
            <td>30mater run 3%</td>
            <td>T test 3%</td>
            <td>Illinois 4%</td>
            <td>Set-up2%</td>
            <td>Push-up 2%</td>
            <td>Painting area Agility test 3%</td>
            <td>Painting area defense movement test 3%</td>
            <td>Vertical Jump 4%</td>
            <td>Broad jump 4%</td>
            <td>S. rich 2%</td>
        </tr>
        <tr>
            <td><input type="number" class="form-control" name="Shuttle_run" required></td>
            <td><input type="number" class="form-control" name="run_m" required></td>
            <td><input type="number" class="form-control" name="T_test" required></td>
            <td><input type="number" class="form-control" name="Illinois" required></td>
            <td><input type="number" class="form-control" name="Set_up" required></td>
            <td><input type="number" class="form-control" name="Push_up" required></td>
            <td><input type="number" class="form-control" name="P_a_A_test" required></td>
            <td><input type="number" class="form-control" name="P_a_d_m" required></td>
            <td><input type="number" class="form-control" name="V_Jump" required></td>
            <td><input type="number" class="form-control" name="Broad_jump" required></td>
            <td><input type="number" class="form-control" name="S_rich" required></td>
        </tr>
    </table>

    <br>
    <table class="table table-bordered table-dark">
        <tr>
            <th class="text-center" colspan="16">Skill Test 35%</th>
        </tr>
        <tr>
            <td class="text-center" colspan="5">Passing for 1 mints 10%</td>
            <td class="text-center" colspan="3">Dribbling 10%</td>
            <td class="text-center" colspan="5">Shooting 15%</td>
        </tr>
        <tr>
            <td rowspan="2">Chest2%</td>
            <td rowspan="2">Bounce 2%</td>
            <td rowspan="2">O.head 2%</td>
            <td rowspan="2">Baseball2%</td>
            <td rowspan="2"> Push 2%</td>
            <td rowspan="2"> Speed/se 3%</td>
            <td rowspan="2"> area/ 3%</td>
            <td rowspan="2">Varity 4%</td>
            <td class="text-center" colspan="2">Ley up /1mint half court/ 6%</td>
            <td rowspan="2"> 1m.corne/Ju shot/ 3%</td>
            <td rowspan="2">3point/10rep 3%</td>
            <td rowspan="2"> Set shot /10rep 3%</td>
        </tr>
        <tr>
            <td>R.h/1mint 3%</td>
            <td>L.h/1mint 3%</td>
        </tr>
        <tr>
            <td><input type="number" class="form-control" name="Chest" required></td>
            <td><input type="number" class="form-control" name="Bounce" required></td>
            <td><input type="number" class="form-control" name="O_head" required></td>
            <td><input type="number" class="form-control" name="Baseball" required></td>
            <td><input type="number" class="form-control" name="Push" required></td>
            <td><input type="number" class="form-control" name="Speed_se" required></td>
            <td><input type="number" class="form-control" name="area" required></td>
            <td><input type="number" class="form-control" name="Varity" required></td>
            <td><input type="number" class="form-control" name="R_h" required></td>
            <td><input type="number" class="form-control" name="L_h" required></td>
            <td><input type="number" class="form-control" name="corne_Jump" required></td>
            <td><input type="number" class="form-control" name="point_rep" required></td>
            <td><input type="number" class="form-control" name="Set_shot" required></td>
        </tr>
    </table>  -->




    <table class="table table-bordered table-dark">
        <tr>
            <th class="text-center" colspan="4">Anthropometric Test 20% </th>
        </tr>
        <tr>
            <td>Height 10%</td>
            <td>Weight 2%</td>
            <td>Arm Span 4%</td>
            <td>Hand Span 4%</td>
        </tr>
        <tr>
            <td><input type="number" class="form-control" name="Height" ></td>
            <td><input type="number" class="form-control" name="Weight" ></td>
            <td><input type="number" class="form-control" name="Arm_Span" ></td>
            <td><input type="number" class="form-control" name="Hand_Span" ></td>
        </tr>
    </table>

    <br>

    <table class="table table-bordered table-dark">
        <tr>
            <th class="text-center" colspan="11">Physical Fitness Test 35%</th>
        </tr>
        <tr>
            <td>Shuttle run 5%</td>
            <td>30mater run 3%</td>
            <td>T test 3%</td>
            <td>Illinois 4%</td>
            <td>Set-up2%</td>
            <td>Push-up 2%</td>
            <td>Painting area Agility test 3%</td>
            <td>Painting area defense movement test 3%</td>
            <td>Vertical Jump 4%</td>
            <td>Broad jump 4%</td>
            <td>S. rich 2%</td>
        </tr>
        <tr>
            <td><input type="number" class="form-control" name="Shuttle_run" ></td>
            <td><input type="number" class="form-control" name="run_m" ></td>
            <td><input type="number" class="form-control" name="T_test" ></td>
            <td><input type="number" class="form-control" name="Illinois" ></td>
            <td><input type="number" class="form-control" name="Set_up" ></td>
            <td><input type="number" class="form-control" name="Push_up" ></td>
            <td><input type="number" class="form-control" name="P_a_A_test" ></td>
            <td><input type="number" class="form-control" name="P_a_d_m" ></td>
            <td><input type="number" class="form-control" name="V_Jump" ></td>
            <td><input type="number" class="form-control" name="Broad_jump" ></td>
            <td><input type="number" class="form-control" name="S_rich" ></td>
        </tr>
    </table>

    <br>
    <table class="table table-bordered table-dark">
        <tr>
            <th class="text-center" colspan="16">Skill Test 35%</th>
        </tr>
        <tr>
            <td class="text-center" colspan="5">Passing for 1 mints 10%</td>
            <td class="text-center" colspan="3">Dribbling 10%</td>
            <td class="text-center" colspan="5">Shooting 15%</td>
        </tr>
        <tr>
            <td rowspan="2">Chest2%</td>
            <td rowspan="2">Bounce 2%</td>
            <td rowspan="2">O.head 2%</td>
            <td rowspan="2">Baseball2%</td>
            <td rowspan="2"> Push 2%</td>
            <td rowspan="2"> Speed/se 3%</td>
            <td rowspan="2"> area/ 3%</td>
            <td rowspan="2">Varity 4%</td>
            <td class="text-center" colspan="2">Ley up /1mint half court/ 6%</td>
            <td rowspan="2"> 1m.corne/Ju shot/ 3%</td>
            <td rowspan="2">3point/10rep 3%</td>
            <td rowspan="2"> Set shot /10rep 3%</td>
        </tr>
        <tr>
            <td>R.h/1mint 3%</td>
            <td>L.h/1mint 3%</td>
        </tr>
        <tr>
            <td><input type="number" class="form-control" name="Chest" ></td>
            <td><input type="number" class="form-control" name="Bounce" ></td>
            <td><input type="number" class="form-control" name="O_head" ></td>
            <td><input type="number" class="form-control" name="Baseball" ></td>
            <td><input type="number" class="form-control" name="Push" ></td>
            <td><input type="number" class="form-control" name="Speed_se" ></td>
            <td><input type="number" class="form-control" name="area" ></td>
            <td><input type="number" class="form-control" name="Varity" ></td>
            <td><input type="number" class="form-control" name="R_h" ></td>
            <td><input type="number" class="form-control" name="L_h" ></td>
            <td><input type="number" class="form-control" name="corne_Jump" ></td>
            <td><input type="number" class="form-control" name="point_rep" ></td>
            <td><input type="number" class="form-control" name="Set_shot" ></td>
        </tr>
    </table>  
    <br><br>
<div class="container">
    <div class="row">
        <hr>
            <button type="submit" class="btn btn-primary btn-block" name="insert_test" value="<?php echo $res_insert['stud_id'];?>">Insert</button>
    <br><br>  
    </div>
</div>
</form>
<br> <br>
<form action="#" method="POST">

<!-- <button type="submit" class="btn btn-danger" name="id" value="<?php $res_insert['stud_id']?>">button</button> -->
</form>


<script>
   $(document).ready(function(){
    $("#flash-msg").delay(3000).fadeOut();
   });
</script>  
<br> <br>
<br> <br>



<?php 
if(isset($_POST['id'])){
$id=mysqli_real_escape_string($conn,$_POST['id']);
echo $id."hello mother fucker";
}


?>