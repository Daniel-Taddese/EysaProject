<link rel="stylesheet" href="resource/bootstrap/bootstrap.min.css">

<?php include 'db_connection.php'; ?>
<?php 
$tot=array();
$rs=array();
$year=0;
$semester=0;
$discipline=0;
$chart_data='';
$Anthropometric=0;
$Dribbling=0;
$Shooting=0;
$Phy_Fit_T=0;
$Passing_for_1_mints=0;
if(isset($_POST['search_res'])){
    $id=mysqli_real_escape_string($conn,$_POST['id']);
    $qry_s_s="SELECT stud_id FROM student_info WHERE stud_id='$id'";
    $s_f_s_i=mysqli_query($conn,$qry_s_s);
    $s_fsi=mysqli_num_rows($s_f_s_i);
  
      $qry_search_id="SELECT stud_id FROM tests WHERE stud_id='$id'";
      $res_search_stud=mysqli_query($conn,$qry_search_id);
      $res_s=mysqli_num_rows($res_search_stud);
  
          if($s_fsi==0){
            header("Location:show_test_r.php?show_test_r=not_registered");
            exit();
          }
          if($res_s==0){ // if finding student id number faild
          header("Location:show_test_r.php?show_test_r=res_not_found");
          exit();
            }
        if($res_s!=0){
            $select_res="SELECT * FROM `students` WHERE stud_id='$id'";
            $select_dep_id="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
            student_info.reg_date,student_info.sex,departments.dep_name
            FROM student_info INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
            $ress=mysqli_query($conn,$select_dep_id);
            $rs=mysqli_fetch_assoc($ress);
            $rs_year=$rs['reg_date'];
      
           $r=explode('-',$rs_year);
           $ye=$r[0]."<br>";
           $year=intval($ye)."<br>";

          $qry_search_test_r="SELECT * FROM tests WHERE stud_id='$id'";
          $test_result=mysqli_query($conn,$qry_search_test_r);

          $qry_graph="SELECT * FROM tests WHERE stud_id='$id'";
          $res_graph=mysqli_query($conn,$qry_graph);

          //  $chart_data='';
          $test_n=1;
          $i=0;
          $count=1;
          $ye=0;
          while($row=mysqli_fetch_assoc($test_result)){
            
             echo "<br>";
             
              $Anthropometric=$row['Height']+$row['Weight']+$row['Arm_Span']+$row['Hand_Span'];
              $Phy_Fit_T=$row['Shuttle_run']+$row['run_m']+$row['T_test']+$row['Illinois']+$row['Set_up']+$row['Push_up']+$row['P_a_A_test']+$row['P_a_d_m']+$row['V_Jump']+$row['Broad_jump']+$row['S_rich'];
              //Skill Test 35%
            $Passing_for_1_mints=$row['Chest']+$row['Bounce']+$row['O_head']+$row['Baseball']+$row['Push'];
            $Dribbling=$row['Speed_se']+$row['area']+$row['Varity'];
            $Shooting=$row['R_h']+$row['L_h']+$row['corne_Jump']+$row['point_rep']+$row['Set_shot'];
            $total=$Anthropometric+$Phy_Fit_T+$Passing_for_1_mints+$Dribbling+$Shooting;
           $tot[]=$total;
          

           echo '<div class="container">
           <table class="table table-bordered col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <tr>
            <td>Full Name: '.$rs['f_name'].' '.$rs['m_name'].' '.$rs['l_name'].'</td>
            <td>Department: '.$rs['dep_name'].'</td>
            <td>Id: '.$rs['stud_id'].'</td>
            </tr>
            <tr>
            <td>Test:'.$test_n.'</td>
            <td>Year:'. $year.'</td>
            <td>Sex: '.$rs['sex'].'</td>
            </tr>
                 <tr>
                     <td>No:</td>
                     <td>Test title:</td>
                     <td>Result:</td>
                 </tr>
                 <tr>
                     <td>1</td>
                     <td>Anthropometric</td>
                     <td>'.$Anthropometric.'</td>
                    
 
                 </tr>
                 <tr>
                     <td>2</td>
                     <td>Physical Fitness </td>
                     <td>'.$Phy_Fit_T.'</td>
 
                 </tr>
                 <tr>
                     <td>3</td>
                     <td>Skill Test Passing for 1 mints</td>
                     <td>'.$Passing_for_1_mints.'</td>
 
                 </tr>
                 <tr>
                     <td>4</td>
                     <td>Skill Test Dribbling</td>
                     <td>'.$Dribbling.'</td>
 
                 </tr>
                 <tr>
                     <td>5</td>
                     <td>Skill Test Shooting</td>
                     <td>'.$Shooting.'</td>
 
                 </tr>
                 <tr>
                     <td colspan="2">Total:</td>
                     <td>'.$total.'</td>
 
                 </tr>
              </table>
     </div>';
     
if($count==3){
  $ye=1;
}
if($count==6){
  $ye=2;
}
if($count==9){
  $ye=3;
}
if($count==12){
  $ye=4;
}
if($count%3==0){

       echo '<hr><div class="container">
           <div class="card card-dark">
           <div class="card-header">Progress evaluation    Year '.$ye.'</div>
           <div class="card-body">
           <table class="table table-bordered table-dark">
           <tr>
             <td>Test 1</td>
             <td>Test 2</td>
             <td>Test 3</td>
           </tr>
           <tr>';
          echo ' <td>'.$tot[$i].'</td>';
          $t1=$tot[$i];
          $i++;
          echo '<td>'.$tot[$i].'</td>';
          $t2=$tot[$i];
          $i++;
          echo  '<td>'.$tot[$i].'</td>';
          $t3=intval($tot[$i]);
          $i++;
          echo'</tr>
           </table>
            </div>';
if($t1 < $t2 && $t2 < $t3){
  echo "<p>Student performance has improved in all session</p>";
}elseif ($t1==$t2 && $t2==$t3){
  echo "<p>Student performance has not improved in all session</p>";
}elseif($t1==$t2 && $t2 <$t3){
  echo "<p>Student performance has improved in 3'd session</p>";
}elseif($t1>$t2 && $t2>$t3){
  echo "<p>Student performance has declined in all session</p>";
}elseif($t1==$t2 && $t2>$t3){
  echo "<p>Student performance is the same in 1st and 2nd session but declined in 3rd session</p>";
}elseif($t1<$t2 && $t2==$t3){
  echo "<p>Student performance is improved  in  2nd session but it is the same in 3rd session</p>";
}elseif($t1>$t2 && $t2<$t3){
  echo "<p>Student performance is declined  in  2nd session but it is the improved in 3rd session</p>";
}elseif($t1<$t2 && $t2>$t3){
  echo "<p>Student performance is improved  in  2nd session but it is the declined in 3rd session</p>";
}
           echo'</div>
         </div>';
}
     if($test_n==3){
       $test_n=1;
       $year=intval($year)+1;
     }else
     $test_n++;
     $count++;
     echo "<br><hr>";

          }
         }
       }
?>


             