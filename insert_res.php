<?php include 'db_connection.php'; ?>
<?php include 'header.php';?>

<?php 
$qry_semester="SELECT * FROM semester";
$res_semester=mysqli_query($conn,$qry_semester);

if(isset($_GET['id'])){
    $id=mysqli_real_escape_string($conn,$_GET['id']);
       $qry_display_stud="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
        departments.dep_name FROM student_info INNER JOIN departments 
        ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
        $display_stud_info=mysqli_query($conn,$qry_display_stud);
        $res_insert=mysqli_fetch_assoc($display_stud_info);

}

if(isset($_GET['input_invalid'])){
    echo '<br><br><div  class="container" >
    <div class="alert alert-info" id="flash-msg">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>please correct your input!.</strong>
    </div>
    </div>';

    $id=mysqli_real_escape_string($conn,$_GET['input_invalid']);

    $qry_display_stud="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
    departments.dep_name FROM student_info INNER JOIN departments 
    ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
    $display_stud_info=mysqli_query($conn,$qry_display_stud);
    $res_insert=mysqli_fetch_assoc($display_stud_info);

}
?>
<br><br>
<form action="insert_db.php"  method="POST">                      
             <div class="card hello card-info text-center">
                        <div class="card-header"> 
                            <div class="row">
                                <hr>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                               <p>Id: <?php echo $res_insert['stud_id']?></p>                              
                             </div>

                             <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                               <p> Name: <?php echo $res_insert['f_name'].' '.$res_insert['l_name'].' '.$res_insert['m_name']?></p>
                                </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <p>  Departement: <?php echo $res_insert['dep_name']?></p>
                         
                            </div>
                            <hr>
                         </div>
              </div>
         </div>
         <br><br>
         <div class="table-responsive">
            <table class="table table-bordered ">
                 <tr>
                    <!-- <td rowspan="2">Id</td>
                    <td rowspan="2">semester</td> -->
                    <td rowspan="2">Attendance 10%</td>
                    <td rowspan="2">Injury 10%</td>
                    <td class="text-center"colspan="3">Dicsipline 20% </td>
                    <td rowspan="2">Evaluation 20%</td>
                    <td rowspan="2">Computition Review 40%</td>
                    <td rowspan="2">insert data</td>
                  </tr>
                 <tr>
                    <td>Motivation 5%</td>
                    <td>Respect 5%</td>
                    <td>Dicsipline 10%</td>
                    
                 </tr>
                 <tr>
                    <!-- <td><input type="text" class="form-control" name="stud_id" value="<?php echo $res_insert['stud_id']?>"> </td> -->
                            <!-- <th><select name="semester"class="form-control">
                            <?php while($row=mysqli_fetch_array($res_semester)):?>
                            <option value=" <?php echo $row[0]; ?>"><?php echo $row [1];?></option>                                           
                            <?php endwhile ;?>
                    </select></th>  -->
                    <!-- <th><input type="number" class="form-control" name="attendance" id="attendance" required </th>
                    <th><input type="number" class="form-control" name="injury" id="injury" required> </th>
                    <th><input type="number" class="form-control" name="motivation" id="motivation" required> </th>
                    <th><input type="number" class="form-control" name="respect" id="respect" required> </th>
                    <th><input type="number" class="form-control" name="dicsipline" id="dicsipline" required></th>
                    <th><input type="number" class="form-control" name="evaluation" id="evaluation" required> </th>
                    <th><input type="number" class="form-control" name="Review" id="Review" required> </th>
                    <th><button class="btn btn-primary float-right" type="submit" name="insert" value="<?php echo $id ?>" onclick="check()" >Insert</button></th>  -->
                    
                    


                    <th><input type="number" class="form-control" name="attendance" id="attendance">  </th>
                    <th><input type="number" class="form-control" name="injury" id="injury" > </th>
                    <th><input type="number" class="form-control" name="motivation" id="motivation" > </th>
                    <th><input type="number" class="form-control" name="respect" id="respect" > </th>
                    <th><input type="number" class="form-control" name="dicsipline" id="dicsipline" ></th>
                    <th><input type="number" class="form-control" name="evaluation" id="evaluation" > </th>
                    <th><input type="number" class="form-control" name="Review" id="Review" > </th>
                    <th><button class="btn btn-primary float-right" type="submit" name="insert" value="<?php echo $id ?>" onclick="check()" >Insert</button></th>  
                 </tr>
             </table>
     </div> 
    
   </form>

  <br><br>