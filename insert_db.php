<?php include 'db_connection.php'; ?>

<?php 

$r=false;
$res_insert=array();
$update_res=array();
$in=false;

$st_id='';
$st_full_name='';
$st_dep='';
$last_sem=0;
$check_sem;
//to choose what semester result to insert
$qry_semester="SELECT * FROM semester";
$res_semester=mysqli_query($conn,$qry_semester);
$id;


$last_s=0;
$ch=false;

if(isset($_POST['search_stud'])){
    $id=mysqli_real_escape_string($conn,$_POST['id']);
    $qry_search_id="SELECT stud_id FROM student_info WHERE stud_id='$id'";
    $res_search_stud=mysqli_query($conn,$qry_search_id);
    $res_s=mysqli_num_rows($res_search_stud);


    $qry_check_semester="SELECT semester FROM students WHERE stud_id='$id'";
    $res_seme=mysqli_query($conn,$qry_check_semester);
    $res_sem=mysqli_num_rows($res_seme);  


      if($res_s===0){ // if finding student id number faild
        header("Location:insert_result_se.php?insert_db=not_found");
      }
      else if($res_sem==8){
        header("Location:insert_result_se.php?insert_db=all_semester_data_exist");
      }
    else{
      header("Location:insert_res.php?id=$id");
        // $qry_display_stud="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
        // departments.dep_name FROM 
        // student_info INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
        // $display_stud_info=mysqli_query($conn,$qry_display_stud);
        // $res_insert=mysqli_fetch_assoc($display_stud_info);
}
}
else if(isset($_POST['insert'])){
    $id=mysqli_real_escape_string($conn,$_POST['insert']);
    //$seme=mysqli_real_escape_string($conn,$_POST['semester']);
    $attend=mysqli_real_escape_string($conn,$_POST['attendance']);
    $inju=mysqli_real_escape_string($conn,$_POST['injury']);
    $moti=mysqli_real_escape_string($conn,$_POST['motivation']);
    $resp=mysqli_real_escape_string($conn,$_POST['respect']);
    $dicsi=mysqli_real_escape_string($conn,$_POST['dicsipline']);
    $evalua=mysqli_real_escape_string($conn,$_POST['evaluation']);
    $review=mysqli_real_escape_string($conn,$_POST['Review']);
    $total= $attend + $inju+  $moti + $dicsi + $resp+ $evalua +$review;

    echo $id;


    $qry_select_semester="SELECT `semester` FROM `students` WHERE stud_id='$id';";
    $check_health=mysqli_query($conn,$qry_select_semester);
    $res_s=mysqli_fetch_all($check_health,MYSQLI_ASSOC);

    print_r ($res_s);
    if(empty($res_s)==true){
        $last_s=1;
        $ch=true;
    }
    
    if($ch==false){
    foreach($res_s as $row){
        $last_s=$row['semester'];
    }
    $last_s++;
    }
    


if($attend<=10 && $inju<=10 && $evalua<=20 && $moti<=5 && $resp<=5 && $dicsi<=10 && $review<=40 &&
$attend>=0 && $inju>=0 && $evalua>=0 && $moti>=0 && $resp>=0 && $dicsi>=0 && $review>=0){
    $in=true;
}
      
    if($in){
        $qry_check_semester="SELECT semester FROM students WHERE stud_id='$id'";
        $res_seme=mysqli_query($conn,$qry_check_semester);
        $check_sem=mysqli_fetch_all($res_seme,MYSQLI_ASSOC);
                              $qry_insert="INSERT INTO students (stud_id,semester,attendance,injury,motivation,respect,discipline,evaluation,computition_review,total) 
                              VALUES ('$id','$last_s','$attend','$inju','$moti','$resp','$dicsi','$evalua','$review','$total')";
                           
                                          $insert=mysqli_query($conn,$qry_insert);
                                            if($insert){
                                                header("Location:insert_result_se.php?insert_db=success");
                                                exit();
                                            }else{
                                                 header("Location:insert_res.php?insert_db=someerror");
                                            }
            

        }else{
    header("Location:insert_res.php?input_invalid=$id");            
        }



    }
    ?>