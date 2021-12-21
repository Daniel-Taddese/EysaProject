<?php require 'db_connection.php'; ?>
<?php

$res_stud_info=array();
$res_address=array();
$res_rel_home=array();
$res_rel_addis=array();

if(isset($_POST['search_stud'])){
    $id=mysqli_real_escape_string($conn,$_POST['id']);

   $qry_search_stud="SELECT stud_id FROM student_info WHERE stud_id='$id';";
 $search_res=mysqli_query($conn,$qry_search_stud);
 $res_s=mysqli_num_rows($search_res);
 if($res_s==0){
     header("Location:update.php?update=not_found");
 }if($res_s!=0){
     header("Location:studinfo_update.php?id=$id");

 }
//     $qry_student_info="SELECT Student_info.stud_id,Student_info.f_name,Student_info.m_name,
//     Student_info.l_name,Student_info.mothers_name,Student_info.dep,Student_info.birth_date,Student_info.height,Student_info.S_weight,
//     Student_info.sex,Student_info.e_level,Student_info.olompic_type,Student_info.reg_date,
//     Student_info.result,Student_info.place_computed,Student_info.Certificates,departments.dep_name FROM Student_info
//     INNER JOIN departments ON Student_info.dep=departments.dep_id WHERE stud_id='$id' ";

//    // $qry_student_info="SELECT * FROM Student_info WHERE stud_id='$id' ";
//     $qry_student_address="SELECT * FROM Student_address WHERE stud_id='$id' ";
//     $qry_student_rel_address="SELECT * FROM Relative_home_address WHERE stud_id='$id' ";
//     $qry_student_relA_address="SELECT * FROM Relative_addis WHERE stud_id='$id' ";

//     $res_s_i=mysqli_query($conn,$qry_student_info);
//     $res_s_a=mysqli_query($conn,$qry_student_address);
//     $res_r_h=mysqli_query($conn,$qry_student_rel_address);
//     $res_r_a=mysqli_query($conn,$qry_student_relA_address);



//     $res_stud_info=mysqli_fetch_assoc($res_s_i); 
//     $res_address=mysqli_fetch_assoc($res_s_a);
//     $res_rel_home=mysqli_fetch_assoc($res_r_h);
//     $res_rel_addis=mysqli_fetch_assoc($res_r_a);

 
//     // $res_stud_info &&
//     // && $res_address&& $res_rel_home&& $res_rel_addis
//     if($res_stud_info && $res_address&& $res_rel_home && $res_rel_addis){
//         echo "all are excuted";
//     }
//     else{
//     echo"faild";
// }

} else if(isset($_POST['update'])){
$studid = mysqli_real_escape_string($conn,$_POST['studid']);
$Fname=mysqli_real_escape_string($conn, $_POST['Fname']);
$Mname=mysqli_real_escape_string($conn, $_POST['Mname']);
$Lname=mysqli_real_escape_string($conn, $_POST['Lname']);
$Mother_name=mysqli_real_escape_string($conn, $_POST['Mother_name']);
$birth_date=mysqli_real_escape_string($conn, $_POST['birth_date']);
$sex=mysqli_real_escape_string($conn,$_POST['sex']);
$height=mysqli_real_escape_string($conn, $_POST['height']);
$weight=mysqli_real_escape_string($conn, $_POST['weight']);
$dep=mysqli_real_escape_string($conn, $_POST['dep']);
$e_level=mysqli_real_escape_string($conn,$_POST['e_level']);
$olompic_type=mysqli_real_escape_string($conn, $_POST['olompic_type']);
$result=mysqli_real_escape_string($conn,$_POST['result']);
$place_computed=mysqli_real_escape_string($conn,$_POST['computed']);
//$Certificates=mysqli_real_escape_string($conn, $_POST['Certificates']);

//sutudent address
$region=mysqli_real_escape_string($conn,$_POST['region']);
$sub_city=mysqli_real_escape_string($conn,$_POST['sub_city']);
$wereda=mysqli_real_escape_string($conn,$_POST['wereda']);
$kebele=mysqli_real_escape_string($conn,$_POST['kebele']);
$po_box=mysqli_real_escape_string($conn,$_POST['po_box']);
$p_number=mysqli_real_escape_string($conn,$_POST['p_number']);

//relative adress from addis abeba
$Adr_full_name=mysqli_real_escape_string($conn,$_POST['Adr_full_name']);
$Adr_p_number=mysqli_real_escape_string($conn,$_POST['Adr_p_number']);
$Adr_subCity=mysqli_real_escape_string($conn,$_POST['Adr_subCity']);
$Adr_kebele=mysqli_real_escape_string($conn,$_POST['Adr_kebele']);



// relative address from place he came
$rel_full_name=mysqli_real_escape_string($conn,$_POST['rel_full_name']);
$rel_ph_number=mysqli_real_escape_string($conn,$_POST['rel_ph_number']);
$rel_region=mysqli_real_escape_string($conn,$_POST['rel_region']);
$rel_zone=mysqli_real_escape_string($conn,$_POST['rel_zone']);
$rel_wereda=mysqli_real_escape_string($conn,$_POST['rel_wereda']);


//`dep` = '$dep',

$qry_update_stud_info="UPDATE `student_info` SET `f_name` = '$Fname', `m_name` = '$Mname', `l_name` = '$Lname',
 `mothers_name` = '$Mother_name',`birth_date` = '$birth_date', `height` = '$height',`S_weight` = '$weight',
  `sex` = '$sex',  `e_level` = '$e_level', 
 `result` = '$result', `place_computed` = '$place_computed' WHERE `stud_id` = '$studid'";

$qry_update_stud_address="UPDATE `student_address` SET `region` = '$region', `sub_city` = '$sub_city', `wereda` = '$wereda', `kebele` = '$kebele', `po_box` = '$po_box', 
`phon_num` = '$p_number' WHERE `stud_id` = '$studid'";



$qry_update_Relative_addis="UPDATE `relative_addis` SET `full_name` = '$Adr_full_name', `phon_num` = '$Adr_p_number',  
`sub_city` = '$Adr_subCity', `kebele` = '$Adr_kebele' WHERE `stud_id` = '$studid'";


$qry_update_relative_home="UPDATE `relative_home_address` SET `full_name` = '$rel_full_name', `phon_num` = '$rel_ph_number', `region` = '$rel_region',
 `zone` = '$rel_zone', `wereda` = '$rel_wereda' WHERE `stud_id` = '$studid'";



$res1=mysqli_query($conn,$qry_update_stud_info);
$res2=mysqli_query($conn,$qry_update_stud_address);
$res3=mysqli_query($conn,$qry_update_Relative_addis);
$res4=mysqli_query($conn,$qry_update_relative_home);

if($res1 && $res2 && $res3 && $res4){
    header("Location:update.php?update=success");
}else{
    header("Location:studinfo_update.php?update=$id");
}



 if(!$res1){
     echo "info stud faild".mysqli_error($conn);
     if(!$res2){
          echo "info stud address faild".mysqli_error($conn);
          if(!$res3){
             echo "stud relative from addis faild".mysqli_error($conn);
              if(!$res4){
                  echo "stud relative from home faild".mysqli_error($conn);
                }
            }
       }
    }
    
    else

echo "data is  updated".mysqli_error($conn);

}
?>