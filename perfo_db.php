<?php include 'db_connection.php'; ?>
<?php

// for inserting test results


$res_insert=array();
$in=false;
$id_s=0;
$last_t=0;
$r=false;
$ch=false;

if(isset($_POST['search_stud'])){
    $id=mysqli_real_escape_string($conn,$_POST['id']);
    $id_s=$id;
    $qry_search_id="SELECT stud_id FROM student_info WHERE stud_id='$id'";
    $res_search_stud=mysqli_query($conn,$qry_search_id);
    $res_s=mysqli_num_rows($res_search_stud);

    $qry_check_test="SELECT test_num FROM tests WHERE stud_id='$id_s'";
    $res_test=mysqli_query($conn,$qry_check_test);
    $res_t=mysqli_fetch_all($res_test,MYSQLI_ASSOC);  
     

    
    if($res_s==0){ // if finding student id number faild
      header("Location:performance_stud_search.php?perfo_db=not_found");
   }

    if($res_t){
      $num_t=count($res_t);
          if($num_t==12){
            header("Location:performance_stud_search.php?perfo_db=all_data_inserted");
                   exit();
          }
        }

      if($res_s!=0){
          header("Location:performanc_test_insert.php?sid=$id");
         }
}



if(isset($_POST['insert_test'])){
$id=mysqli_real_escape_string($conn,$_POST['insert_test']);
$Height=mysqli_real_escape_string($conn,$_POST['Height']);
$Weight=mysqli_real_escape_string($conn,$_POST['Weight']);
$Arm_Span=mysqli_real_escape_string($conn,$_POST['Arm_Span']);
$Hand_Span=mysqli_real_escape_string($conn,$_POST['Hand_Span']);
$Shuttle_run=mysqli_real_escape_string($conn,$_POST['Shuttle_run']);
$run_m=mysqli_real_escape_string($conn,$_POST['run_m']);
$T_test=mysqli_real_escape_string($conn,$_POST['T_test']);
$Illinois=mysqli_real_escape_string($conn,$_POST['Illinois']);
$Set_up=mysqli_real_escape_string($conn,$_POST['Set_up']);
$Push_up=mysqli_real_escape_string($conn,$_POST['Push_up']);
$P_a_A_test=mysqli_real_escape_string($conn,$_POST['P_a_A_test']);
$P_a_d_m=mysqli_real_escape_string($conn,$_POST['P_a_d_m']);
$V_Jump=mysqli_real_escape_string($conn,$_POST['V_Jump']);
$Broad_jump=mysqli_real_escape_string($conn,$_POST['Broad_jump']);
$S_rich=mysqli_real_escape_string($conn,$_POST['S_rich']);
$Chest=mysqli_real_escape_string($conn,$_POST['Chest']);
$Bounce=mysqli_real_escape_string($conn,$_POST['Bounce']);
$O_head=mysqli_real_escape_string($conn,$_POST['O_head']);
$Baseball=mysqli_real_escape_string($conn,$_POST['Baseball']);
$Push=mysqli_real_escape_string($conn,$_POST['Push']);
$Speed_se=mysqli_real_escape_string($conn,$_POST['Speed_se']);
$area=mysqli_real_escape_string($conn,$_POST['area']);
$Varity=mysqli_real_escape_string($conn,$_POST['Varity']);
$R_h=mysqli_real_escape_string($conn,$_POST['R_h']);
$L_h=mysqli_real_escape_string($conn,$_POST['L_h']);
$corne_Jump=mysqli_real_escape_string($conn,$_POST['corne_Jump']);
$point_rep=mysqli_real_escape_string($conn,$_POST['point_rep']);
$Set_shot=mysqli_real_escape_string($conn,$_POST['Set_shot']);



$Anthropometric=$Height+$Weight+$Arm_Span+$Hand_Span;
$Phy_Fit_T=$Shuttle_run+$run_m+$T_test+$Illinois+$Set_up+$Push_up+$P_a_A_test+$P_a_d_m+$V_Jump+$Broad_jump+$S_rich;
//Skill Test 35%
$Passing_for_1_mints=$Chest+$Bounce+$O_head+$Baseball+$Push;
$Dribbling=$Speed_se+$area+$Varity;
$Shooting=$R_h+$L_h+$corne_Jump+$point_rep+$Set_shot;
$total=$Anthropometric+$Phy_Fit_T+$Passing_for_1_mints+$Dribbling+$Shooting;







if($Height<=10 && $Height>0 && $Weight<=2 && $Weight>0 && $Arm_Span<=4 && $Arm_Span>0 && $Hand_Span<=4 && $Hand_Span>0 && $Shuttle_run<=5 && $Shuttle_run>0 &&
$run_m<=3 && $run_m>0 && $T_test<=3 && $T_test>0 && $Illinois<=4 && $Illinois>0 && $Set_up<=2 && $Set_up>0 && $Push_up<=2 && $Push_up>0 && 
$P_a_A_test<=3 && $P_a_A_test>0 && $P_a_d_m<=3 && $P_a_d_m>0 && $V_Jump<=4 && $V_Jump>0 && $Broad_jump<=4 && $Broad_jump>0 && $S_rich<=4 && $S_rich>0 &&
$Chest<=2 && $Chest>0 && $Bounce<=2 && $Bounce>0 && $O_head<=2 && $O_head>0 && $Baseball<=2 && $Baseball>0 && $Push<=2 && $Push>0 &&
$Speed_se<=3 && $Speed_se>0 && $area<=3 && $area>0 && $Varity<=4 && $Varity>0 && $R_h<=3 && $R_h>0 && $L_h<=3 && $L_h>0 && 
$corne_Jump<=3 && $corne_Jump>0 && $point_rep<=3 && $point_rep>0 && $Set_shot<=3 && $Set_shot>0){
    $in=true;
}

if($in==false){
   header("Location:performanc_test_insert.php?id=$id");
}



if($in==true){

  $last_test=0;
  $qry_select_semester="SELECT `test_num` FROM `tests` WHERE stud_id='$id';";
  $check_health=mysqli_query($conn,$qry_select_semester);
  $res_t=mysqli_fetch_all($check_health,MYSQLI_ASSOC);

  print_r ($res_t);
  if(empty($res_t)==true){
      $last_test=1;
      $ch=true;
  }
  
  if($ch==false){
  foreach($res_t as $row){
      $last_test=$row['test_num'];
  }
  $last_test++;
  }


  echo $last_test;
  

    // $qry_insert_test="INSERT INTO `tests`(`stud_id`, `Height`, `Weight`, `Arm_Span`, `Hand_Span`, `Shuttle_run`, `run_m`, `T_test`, `Illinois`, `Set_up`, `Push_up`, `P_a_A_test`, `P_a_d_m`, `V_Jump`, `Broad_jump`, `S_rich`, `Chest`, `Bounce`, `O_head`, `Baseball`, `Push`, `Speed_se`, `area`, `Varity`, `R_h`, `L_h`, `corne_Jump`, `point_rep`, `Set_shot`, `test_num`) VALUES 
    // ('$id_s', '$Height', '$Weight', '$Arm_Span', '$Hand_Span', '$Shuttle_run', '$run_m', '$T_test', '$Illinois', '$Set_up', '$Push_up', '$P_a_A_test', '$P_a_d_m', '$V_Jump', '$Broad_jump', '$S_rich', '$Chest', '$Bounce', '$O_head', '$Baseball', '$Push', '$Speed_se', '$area', '$Varity', '$R_h', '$L_h', '$corne_Jump', '$point_rep', '$Set_shot', '$last_test')";

    //  $insert_test=mysqli_query($conn,$qry_insert_test);
    //  if($insert_test){
    //    echo "test inserted";
    //  }else{
    //  echo "test is not inserted";

                 
                      
                        $qry_insert_test="INSERT INTO `tests`(`stud_id`, `Height`, `Weight`, `Arm_Span`, `Hand_Span`, `Shuttle_run`, `run_m`, `T_test`, `Illinois`, `Set_up`, `Push_up`, `P_a_A_test`, `P_a_d_m`, `V_Jump`, `Broad_jump`, `S_rich`, `Chest`, `Bounce`, `O_head`, `Baseball`, `Push`, `Speed_se`, `area`, `Varity`, `R_h`, `L_h`, `corne_Jump`, `point_rep`, `Set_shot`, `test_num`) VALUES 
                                                               ('$id', '$Height', '$Weight', '$Arm_Span', '$Hand_Span', '$Shuttle_run', '$run_m', '$T_test', '$Illinois', '$Set_up', '$Push_up', '$P_a_A_test', '$P_a_d_m', '$V_Jump', '$Broad_jump', '$S_rich', '$Chest', '$Bounce', '$O_head', '$Baseball', '$Push', '$Speed_se', '$area', '$Varity', '$R_h', '$L_h', '$corne_Jump', '$point_rep', '$Set_shot', '$last_test');";
                                       $insert_test=mysqli_query($conn,$qry_insert_test);
                                      

                                           if($insert_test==true){
                                            header("Location:performance_stud_search.php?perfo_db=success");
                                           }
                                           else if($insert_test==false){
                                            header("Location:performanc_test_insert.php?id=$id");

                                           }                                  
                                      }                                       
                                    }  
                                             
                                   
                                   
                                     
?>