<?php require 'db_connection.php'; ?>
<?php 
$in=false;
// $update_res=array();
$last_sem=0;
if(isset($_POST['search_stud'])){
    $id=mysqli_real_escape_string($conn,$_POST['id']);
  $qry_s_s="SELECT stud_id FROM student_info WHERE stud_id='$id'";
  $s_f_s_i=mysqli_query($conn,$qry_s_s);
  $s_fsi=mysqli_num_rows($s_f_s_i);

    $qry_search_id="SELECT stud_id FROM students WHERE stud_id='$id'";
    $res_search_stud=mysqli_query($conn,$qry_search_id);
    $res_s=mysqli_num_rows($res_search_stud);

        if($s_fsi==0){
          header("Location:update_res_se.php?update=not_registered");
          exit();
        }


        else if($res_s==0){ // if finding student id number faild
        header("Location:update_res_se.php?update=res_not_found");
        exit();
       
      } else{
          header("Location:update_res.php?id=$id");
      }
}

if(isset($_POST['update'])){  
         $id=mysqli_real_escape_string($conn,$_POST['update']);
         echo $id;
         //$seme=mysqli_real_escape_string($conn,$_POST['semester']);
         $attend=mysqli_real_escape_string($conn,$_POST['attendance']);
         $inju=mysqli_real_escape_string($conn,$_POST['injury']);
         $moti=mysqli_real_escape_string($conn,$_POST['motivation']);
         $resp=mysqli_real_escape_string($conn,$_POST['respect']);
         $dicsi=mysqli_real_escape_string($conn,$_POST['dicsipline']);
         $evalua=mysqli_real_escape_string($conn,$_POST['evaluation']);
         $review=mysqli_real_escape_string($conn,$_POST['Review']);
        $total= intval($attend) + intval($inju)+  intval($moti )+ intval($dicsi) + intval($resp)+ intval($evalua) +intval($review);
        
         $qry_check_semester="SELECT semester FROM students WHERE stud_id='$id'";
         $res_seme=mysqli_query($conn,$qry_check_semester);
         $res_sem=mysqli_fetch_all($res_seme,MYSQLI_ASSOC);  
          
         foreach($res_sem as $last_s){
         $last_sem=$last_s['semester'];
          }       
     $last_sem=intval($last_sem);



if($attend<=10 && $inju<=10 && $evalua<=20 && $moti<=5 && $resp<=5 && $dicsi<=10 && $review<=40 &&
$attend>=0 && $inju>=0 && $evalua>=0 && $moti>=0 && $resp>=0 && $dicsi>=0 && $review>=0){
    $in=true;
}

if($in==true){
    $qry_update_res="UPDATE `students` SET `attendance`='$attend',`injury`='$inju',`motivation`='$moti',
    `respect`='$resp',`discipline`='$dicsi',`evaluation`='$evalua',`computition_review`='$review',`total`='$total' 
     WHERE stud_id='$id' AND semester='$last_sem';";
     
     $update=mysqli_query($conn,$qry_update_res);
     if($update==true){
        header("Location:update_res_se.php?update=success");
     }else{
     
        header("Location:update_res.php?update=error");
     }

}else{
   header("Location:update_res.php?invalid_input=$id");
}
       }

?>