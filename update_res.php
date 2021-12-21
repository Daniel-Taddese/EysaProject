<?php require 'db_connection.php'; ?>
<?php include 'header.php' ?>
<?php 
$mid=0;
if(isset($_GET['id'])){
   $last_sem=0;
    $id=mysqli_real_escape_string($conn,$_GET['id']);
    $mid=$id;
        $qry_display_stud="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
        departments.dep_name FROM 
        student_info INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
        $display_stud_info=mysqli_query($conn,$qry_display_stud);
        $update_res=mysqli_fetch_assoc($display_stud_info);


        $qry_check_semester="SELECT * FROM students WHERE stud_id='$id'";
        $res_seme=mysqli_query($conn,$qry_check_semester);
        $res_sem=mysqli_fetch_all($res_seme,MYSQLI_ASSOC);  
        foreach($res_sem as $last_s){
        $last_sem=$last_s['semester'];
         }

         $qry_last_sem_res="SELECT * FROM students WHERE stud_id='$id' AND semester='$last_sem'";
         $res_l_s_r=mysqli_query($conn,$qry_last_sem_res);
         $rlsr=mysqli_fetch_assoc($res_l_s_r);
         
}else if(isset($_GET['update_error'])){
   echo '<br><div  class="container" >
   <div class="alert alert-danger" id="flash-msg">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong>unknown error in updating!.</strong>
   </div>
   </div>';
   $last_sem=0;
     $id=mysqli_real_escape_string($conn,$_GET['update_error']);

 
       $qry_display_stud="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
       departments.dep_name FROM 
       student_info INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
       $display_stud_info=mysqli_query($conn,$qry_display_stud);
       $update_res=mysqli_fetch_assoc($display_stud_info);
      

       $qry_check_semester="SELECT * FROM students WHERE stud_id='$id'";
       $res_seme=mysqli_query($conn,$qry_check_semester);
       $res_sem=mysqli_fetch_all($res_seme,MYSQLI_ASSOC);  
      
       foreach($res_sem as $last_s){
       $last_sem=$last_s['semester'];
        }
        
        $qry_last_sem_res="SELECT * FROM students WHERE stud_id='$id' AND semester='$last_sem'";
        $res_l_s_r=mysqli_query($conn,$qry_last_sem_res);
        $rlsr=mysqli_fetch_assoc($res_l_s_r);
        
}else if(isset($_GET['invalid_input'])){

   echo '<br><div  class="container" >
   <div class="alert alert-info" id="flash-msg">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong>Invalid input!.</strong>
   </div>
   </div>';
   $last_sem=0;
   $id=mysqli_real_escape_string($conn,$_GET['invalid_input']);
       $qry_display_stud="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
       departments.dep_name FROM 
       student_info INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
       $display_stud_info=mysqli_query($conn,$qry_display_stud);
       $update_res=mysqli_fetch_assoc($display_stud_info);
      

       $qry_check_semester="SELECT * FROM students WHERE stud_id='$id'";
       $res_seme=mysqli_query($conn,$qry_check_semester);
       $res_sem=mysqli_fetch_all($res_seme,MYSQLI_ASSOC);  
      
       foreach($res_sem as $last_s){
       $last_sem=$last_s['semester'];
        }
      
        $qry_last_sem_res="SELECT * FROM students WHERE stud_id='$id' AND semester='$last_sem'";
        $res_l_s_r=mysqli_query($conn,$qry_last_sem_res);
        $rlsr=mysqli_fetch_assoc($res_l_s_r);
      
}

?>
             <div class="card hello card-info text-center">
                <div class="card-header"> 
                            <div class="row">
                               <hr>
                               <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                  <p>Id: <?php echo $update_res['stud_id']?></p>
                                  
                                 </div>
                                 
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <p> Name: <?php echo $update_res['f_name'].' '.$update_res['l_name'].' '.$update_res['m_name']?></p>
                                 </div>
                                 
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <p>  Departement: <?php echo $update_res['dep_name']?></p>
                                    
                                 </div>
                                 <hr>
                              </div>
                           </div>
                        </div>
                        <br><br>
                        <div class="table-responsive">
                           <table class="table table-bordered">
                              <tr>
                                 <!-- <td rowspan="2">Id</td> -->
                                 <td rowspan="2">semester</td>
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
      
             <form action="update_res_db.php"  method="POST"> 
                    <th><input type="number" class="form-control" value="<?php echo $last_sem?>" disabled> </th>                                            
                    <th><input type="number" class="form-control" name="attendance"  value="<?Php echo $rlsr['attendance']; ?>" required></th>
                    <th><input type="number" class="form-control" name="injury" value="<?Php echo $rlsr['injury']; ?>" required> </th>
                    <th><input type="number" class="form-control" name="motivation" value="<?Php echo $rlsr['motivation']; ?>" required> </th>
                    <th><input type="number" class="form-control" name="respect" value="<?Php echo $rlsr['respect']; ?>" required> </th>
                    <th><input type="number" class="form-control" name="dicsipline" value="<?Php echo $rlsr['discipline']; ?>" required></th>
                    <th><input type="number" class="form-control" name="evaluation" value="<?Php echo $rlsr['evaluation']; ?>" required> </th>
                    <th><input type="number" class="form-control" name="Review" value="<?Php echo $rlsr['computition_review']; ?>" required> </th>
                   <th> <button type="submit" class="btn btn-primary" name="update" value="<?php echo $rlsr['stud_id'];?>" required>update</button></th>
                    
                  </tr>
               </form>
             </table>
            </div>

            <script>
   $(document).ready(function(){
    $("#flash-msg").delay(3000).fadeOut();
   });
</script>  
