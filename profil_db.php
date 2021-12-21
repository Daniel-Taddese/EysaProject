<?php include 'db_connection.php' ?>
<?php
$id_found=false;
$dep_id=0;
$dep_n;
$dy;
$qry_search_id;
$res_all=array();
$res_id=array();
$res_name=array();
$res_dep=array();
$res_year=array();
$res_a=array();
$res_r_a=array();
$res_r_h=array();
$list_dep_qry="SELECT * FROM departments";
$dep_name='';
$res=mysqli_query($conn,$list_dep_qry);

 if(isset($_POST['search'])){
        $input=mysqli_real_escape_string($conn,$_POST['full_name']);
        if (filter_var($input, FILTER_VALIDATE_INT) === 0 || !filter_var($input, FILTER_VALIDATE_INT) === false) {
               // echo("Integer is valid");
                $qry_search_id="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,student_info.birth_date,student_info.height,student_info.S_weight,student_info.sex,student_info.result,departments.dep_name FROM student_info
                INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$input'  ";
                $res_by_id=mysqli_query($conn,$qry_search_id);
                $res_all=mysqli_fetch_all($res_by_id,MYSQLI_ASSOC);
                mysqli_free_result($res_by_id);
                mysqli_close($conn);
                $cou= count($res_all);
                //echo $cou;
                if($cou==0){
                 header("Location:show_profile.php?profil_db=id_not_found");
                 exit();
                }
              }else {
                //echo("Integer is not valid");
                $name=explode(' ',$input);
                $qry_search_name="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,student_info.birth_date,student_info.height,student_info.S_weight,student_info.sex,student_info.result,departments.dep_name FROM student_info
                INNER JOIN departments ON student_info.dep=departments.dep_id WHERE f_name='$name[0]' AND m_name='$name[1]'";
                $result_by_name=mysqli_query($conn,$qry_search_name);
                $res_all=mysqli_fetch_all($result_by_name,MYSQLI_ASSOC);
                if(count($res_all)==0){
                    header("Location:show_profile.php?profil_db=Name_not_found");
                    exit();
                }
            }
 }




else if (isset($_POST['dep_year'])) {
  $dep=mysqli_real_escape_string($conn,$_POST['dep_name']);
  $in_year=mysqli_real_escape_string($conn,$_POST['year']);
  $qry_list_year="SELECT reg_date FROM student_info where reg_date LIKE '%$in_year-%'";


  $res_search=mysqli_query($conn,$list_dep_qry);
  $res_year=mysqli_query($conn,$qry_list_year);
  $year=mysqli_fetch_all($res_year,MYSQLI_ASSOC);
  $year_count= count($year);


  $re=mysqli_fetch_all($res_search,MYSQLI_ASSOC);
  foreach ($re as $r) {
    if($dy=($r['dep_name']==$dep & $year_count>0)){
    
     $id_found=true;
     $dep_id=$r['dep_id'];
     
     break;
    }
  }
  if($dy){ // filters by departement and year

    $qry_dep_year="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,
    student_info.l_name,student_info.birth_date,student_info.height,
    student_info.s_weight,student_info.sex,student_info.result,
    departments.dep_name FROM student_info INNER JOIN departments ON
    student_info.dep=departments.dep_id WHERE reg_date LIKE '$in_year-%' AND dep='$dep_id'";
    $res_dep_year=mysqli_query($conn,$qry_dep_year);
    $res_all=mysqli_fetch_all($res_dep_year,MYSQLI_ASSOC);
  }
  // if(!$dy){
  //   header("Location:show_profile.php?profil_db=incorrect_d_y");
  //   exit();

  // }

  if($dep==='0' && $in_year=== ''){
    header("Location:show_profile.php?profil_db=enter_1");
    exit();
  }
  else if($dep!='0' && $in_year===''){ // only departement shows  $dep_name=mysqli_real_escape_string($conn,$_POST['dep_name']);
  $select_dep_id="SELECT student_info.dep,departments.dep_id,departments.dep_name
  FROM student_info INNER JOIN departments ON student_info.dep=departments.dep_id";
  $ress=mysqli_query($conn,$select_dep_id);
  $rs=mysqli_fetch_all($ress,MYSQLI_ASSOC);
  //print_r($rs);
  foreach($rs as $r){
  if($r['dep_name']==$dep_name){
  $id_found=true;
   $dep_id=$r['dep'];
   $dep_n=$r['dep_name'];
   break;
  }
  }
  if(!$id_found){
  echo "id not found";
  }else{
  //echo $dep_id.' '.$dep_n;
  $qry_search_dep="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
  student_info.birth_date,student_info.height,student_info.S_weight,student_info.sex,student_info.result,
  departments.dep_name FROM student_info
  INNER JOIN departments ON student_info.dep=departments.dep_id WHERE dep='$dep_id'";

  // $qry_search_dep="SELECT stud_id,f_name,m_name,l_name,mothsrs_name,birth_date,height,S_weight,sex,dep,olompic_type,result,place_computed FROM Student_info WHERE dep='$dep_name'";
  $res_d=mysqli_query($conn,$qry_search_dep);
  $res_all=mysqli_fetch_all($res_d,MYSQLI_ASSOC);
   $co=count($res_all);
  // echo $co;
   if($co===0){
     header("Location:show_profile.php?profil_db=NO_data");
     exit();
   }
  }
  }

  elseif ($dep=='0' && !empty($in_year)) {
    $qry_search_year="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
    student_info.birth_date,student_info.height,student_info.S_weight,student_info.sex,student_info.result,
    departments.dep_name FROM student_info
    INNER JOIN departments ON student_info.dep=departments.dep_id WHERE reg_date LIKE '$in_year-%' ORDER BY stud_id";
    $search_year=mysqli_query($conn,$qry_search_year);
    $res_all=mysqli_fetch_all($search_year,MYSQLI_ASSOC);
    $coy=count($res_all);
    //echo $coy;
    if($coy===0){
      header("Location:show_profile.php?profil_db=NO_data");
      exit();
    }
  }


}

else if(isset($_POST['show_more'])){
 $id=mysqli_real_escape_string($conn,$_POST['show_more']);
 $qry_stud_info="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,
 student_info.birth_date,student_info.height,student_info.S_weight,student_info.sex,student_info.result,
 departments.dep_name FROM student_info
 INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
$qry_address="SELECT * FROM student_address WHERE Stud_id='$id'";
$qry_rel_addis="SELECT * FROM relative_addis  WHERE Stud_id='$id'";
$qry_rel_home="SELECT * FROM relative_home_address WHERE Stud_id='$id'";

$res_add=mysqli_query($conn,$qry_address);
$res_R_A=mysqli_query($conn,$qry_rel_addis);
$res_R_H=mysqli_query($conn,$qry_rel_home);
$res_s_i=mysqli_query($conn,$qry_stud_info);
//print_r($res_id);

if(!$res_add){
        echo "address found".mysqli_error($conn);
        if(!$res_R_A){
                echo "relative address from addis found".mysqli_error($conn);
                if(!$res_R_H){
                        echo "relative home address found".mysqli_error($conn);
                }
        }
}




$res_a=mysqli_fetch_assoc($res_add);
$res_r_a=mysqli_fetch_assoc($res_R_A);
$res_r_h=mysqli_fetch_assoc($res_R_H);
$res_id=mysqli_fetch_assoc($res_s_i);

}

?>
