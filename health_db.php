<?php include 'db_connection.php'; ?>

<?php

$healthNum=0;
$last_ht=0;
$ch=false;



if(isset($_POST['search_stud'])){
    // echo "hello mother fucker";
 $id=mysqli_real_escape_string($conn,$_POST['id']);
 $qry_s_s="SELECT stud_id FROM student_info WHERE stud_id='$id'";
 $s_f_s_i=mysqli_query($conn,$qry_s_s);
 $s_fsi=mysqli_num_rows($s_f_s_i);

   $qry_search_id="SELECT hTest_num FROM health WHERE stud_id='$id'";
   $res_search_stud=mysqli_query($conn,$qry_search_id);
   $res_s=mysqli_num_rows($res_search_stud);

       if($s_fsi==0){
         header("Location:health_stud_s.php?health_db=not_registered");
         exit();
       }
       if($res_s==8){ // if finding student id number faild
       header("Location:health_stud_s.php?health_db=all_data_inserted");
       exit();
         }
        if($res_s<8 && $s_fsi!=0){
       header("Location:health_reg.php?health_stud_s=$id");
 
        }
        }



        elseif(isset($_POST['insert_health'])){
            $id=mysqli_real_escape_string($conn,$_POST['insert_health']);
            $ga=mysqli_real_escape_string($conn,$_POST['ga']);
            $bl_pr=mysqli_real_escape_string($conn,$_POST['bl_pr']);
            $pulse=mysqli_real_escape_string($conn,$_POST['pulse']);
            $temp=mysqli_real_escape_string($conn,$_POST['temp']);
            $r_r=mysqli_real_escape_string($conn,$_POST['r_r']);
            $height=mysqli_real_escape_string($conn,$_POST['height']);
            $s_weight=mysqli_real_escape_string($conn,$_POST['weight']);
            $bms=mysqli_real_escape_string($conn,$_POST['bms']);
            $leg_len=mysqli_real_escape_string($conn,$_POST['leg_len']);
            $s_h=mysqli_real_escape_string($conn,$_POST['s_h']);
            $a_s=mysqli_real_escape_string($conn,$_POST['a_s']);
            $rbs=mysqli_real_escape_string($conn,$_POST['rbs']);
            $hgs=mysqli_real_escape_string($conn,$_POST['hgs']);
            $u_a=mysqli_real_escape_string($conn,$_POST['u_a']);
            $hepatitis=mysqli_real_escape_string($conn,$_POST['hepatitis']);
            $blood_g=mysqli_real_escape_string($conn,$_POST['blood_g']);
            $head=mysqli_real_escape_string($conn,$_POST['head']);
            $R_aye=mysqli_real_escape_string($conn,$_POST['R_aye']);
            $L_aye=mysqli_real_escape_string($conn,$_POST['L_aye']);
            $R_ear=mysqli_real_escape_string($conn,$_POST['R_ear']);
            $L_ear=mysqli_real_escape_string($conn,$_POST['L_ear']);
            $cvs=mysqli_real_escape_string($conn,$_POST['cvs']);
            $chest=mysqli_real_escape_string($conn,$_POST['chest']);
            $gis=mysqli_real_escape_string($conn,$_POST['gis']);
            $gus=mysqli_real_escape_string($conn,$_POST['gus']);
            $mss=mysqli_real_escape_string($conn,$_POST['mss']);
            $nuro_ex=mysqli_real_escape_string($conn,$_POST['nuro_ex']);
            $explanation=mysqli_real_escape_string($conn,$_POST['explanation']);
$qry_select_healthNum="SELECT `hTest_num` FROM `health` WHERE stud_id='$id';";
$check_health=mysqli_query($conn,$qry_select_healthNum);
$res_h=mysqli_fetch_all($check_health,MYSQLI_ASSOC);
if(empty($res_h)==true){
    $last_ht=1;
    $ch=true;
}

if($ch==false){
foreach($res_h as $row){
    $last_ht=$row['hTest_num'];
}
$last_ht++;
}

            $qry_health="INSERT INTO health (stud_id,ga,bl_pr,pulse,temp,r_r,height,`weight`,bms,leg_len,s_h,a_s,rbs,hgs,u_a,hepatitis,
            blood_g,head,R_aye,L_aye,R_ear,L_ear,cvs,chest,gis,gus,mss,nuro_ex,explanation,hTest_num) VALUES ('$id','$ga','$bl_pr','$pulse','$temp','$r_r'
              ,'$height','$s_weight','$bms','$leg_len','$s_h','$a_s','$rbs','$hgs','$u_a','$hepatitis',
              '$blood_g','$head','$R_aye','$L_aye','$R_ear','$L_ear','$cvs','$chest','$gis','$gus','$mss','$nuro_ex','$explanation','$last_ht');";
            $ch=false;

            $insert_health=mysqli_query($conn,$qry_health);

            if($insert_health){
                header("Location:health_stud_s.php?health_db=success");
            }
            if(!$insert_health){
                echo "data is not inserted".mysqli_error($conn);
            }
        }


  
       else if(isset($_POST['health_record'])){
          $id=mysqli_real_escape_string($conn,$_POST['id']);
          $qry_s_s="SELECT stud_id FROM student_info WHERE stud_id='$id'";
          $s_f_s_i=mysqli_query($conn,$qry_s_s);
          $s_fsi=mysqli_num_rows($s_f_s_i);
        
            $qry_search_id="SELECT stud_id FROM health WHERE stud_id='$id'";
            $res_search_stud=mysqli_query($conn,$qry_search_id);
            $res_s=mysqli_num_rows($res_search_stud);
        
                if($s_fsi==0){
                  header("Location:health_record_s.php?health_s=not_registered");
                  exit();
                }
        
               else if($res_s==0){ // if finding student id number faild
                header("Location:health_record_s.php?health_s=res_not_found");
                exit();
              } 
            elseif($s_fsi!=0 && $res_s!=0){
                header("Location:show_health_record.php?id=$id");
            }
            }
    ?>
