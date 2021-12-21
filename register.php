<?php include 'db_connection.php'; ?>
<link rel="stylesheet" href="resource/bootstrap/bootstrap.min.css">
<script src="resource/jquery/jquery.js"></script>
<?php
if(isset($_POST['submit'])){
       //student info
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
// $cirteficates=mysqli_real_escape_string($conn,$_POST['Certificates']);


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


//echo (is_string($str));
//echo (is_integer($num));
// healt form
// $ga=mysqli_real_escape_string($conn,$_POST['ga']);
// $bl_pr=mysqli_real_escape_string($conn,$_POST['bl_pr']);
// $pulse=mysqli_real_escape_string($conn,$_POST['pulse']);
// $temp=mysqli_real_escape_string($conn,$_POST['temp']);
// $r_r=mysqli_real_escape_string($conn,$_POST['r_r']);
// $height=mysqli_real_escape_string($conn,$_POST['height']);
// $s_weight=mysqli_real_escape_string($conn,$_POST['weight']);
// $bms=mysqli_real_escape_string($conn,$_POST['bms']);
// $leg_len=mysqli_real_escape_string($conn,$_POST['leg_len']);
// $s_h=mysqli_real_escape_string($conn,$_POST['s_h']);
// $a_s=mysqli_real_escape_string($conn,$_POST['a_s']);
// $rbs=mysqli_real_escape_string($conn,$_POST['rbs']);
// $hgs=mysqli_real_escape_string($conn,$_POST['hgs']);
// $u_a=mysqli_real_escape_string($conn,$_POST['u_a']);
// $hepatitis=mysqli_real_escape_string($conn,$_POST['hepatitis']);
// $blood_g=mysqli_real_escape_string($conn,$_POST['blood_g']);
// $head=mysqli_real_escape_string($conn,$_POST['head']);
// $R_aye=mysqli_real_escape_string($conn,$_POST['R_aye']);
// $L_aye=mysqli_real_escape_string($conn,$_POST['L_aye']);
// $R_ear=mysqli_real_escape_string($conn,$_POST['R_ear']);
// $L_ear=mysqli_real_escape_string($conn,$_POST['L_ear']);
// $cvs=mysqli_real_escape_string($conn,$_POST['cvs']);
// $chest=mysqli_real_escape_string($conn,$_POST['chest']);
// $gis=mysqli_real_escape_string($conn,$_POST['gis']);
// $gus=mysqli_real_escape_string($conn,$_POST['gus']);
// $mss=mysqli_real_escape_string($conn,$_POST['mss']);
// $nuro_ex=mysqli_real_escape_string($conn,$_POST['nuro_ex']);
// $explanation=mysqli_real_escape_string($conn,$_POST['explanation']);

$check_id="SELECT stud_id FROM student_info where stud_id='$studid'";
$resul=mysqli_query($conn,$check_id);
$res_r=mysqli_num_rows($resul);
echo "<br><br><br><br>";

if($res_r==1){
  // echo "<script> alert('student exists');</script>";
  header("Location:reg2.php?register=id_exist");
exit();

}else if($res_r==0){
  // echo "<script> alert('student can be insereted');</script>";
//stud_id 
// header("Location:regiseter.php?register=stud_can_be_inserted");

$qry_studinfo = "INSERT INTO `student_info` (`stud_id`, `f_name`, `m_name`, `l_name`, `mothers_name`, `birth_date`, `height`, `S_weight`, `sex`, `dep`, `e_level`,`olompic_type`,`result`,`place_computed`)
                  VALUES ('$studid','$Fname','$Mname','$Lname','$Mother_name','$birth_date','$height','$weight','$sex','$dep','$e_level','$olompic_type','$result','$place_computed');";
//,'$cirteficates'`Certificates`,

$qry_studadress="INSERT INTO student_address (stud_id,region,sub_city,wereda,kebele,po_box,phon_num) VALUES
 ('$studid','$region','$sub_city','$wereda','$kebele','$po_box','$p_number');";


$qry_relative_addis="INSERT INTO relative_addis (stud_id,full_name,phon_num,sub_city,kebele)
                                VALUES ('$studid','$Adr_full_name','$Adr_p_number','$Adr_subCity','$Adr_kebele');";


$qry_relative_home="INSERT INTO relative_home_address (stud_id,full_name,phon_num,region,`zone`,wereda)
                               VALUES ('$studid','$rel_full_name','$rel_ph_number','$rel_region','$rel_zone','$rel_wereda');";

// $qry_health="INSERT INTO health (stud_id,ga,bl_pr,pulse,temp,r_r,height,weight,bms,leg_len,s_h,a_s,rbs,hgs,u_a,hepatitis,
// blood_g,head,R_aye,L_aye,R_ear,L_ear,cvs,chest,gis,gus,mss,nuro_ex,explanation) VALUES ('$studid','$ga','$bl_pr','$pulse','$temp','$r_r'
//   ,'$height','$s_weight','$bms','$leg_len','$s_h','$a_s','$rbs','$hgs','$u_a','$hepatitis',
//   '$blood_g','$head','$R_aye','$L_aye','$R_ear','$L_ear','$cvs','$chest','$gis','$gus','$mss','$nuro_ex','$explanation');";

$qry1=mysqli_query($conn,$qry_studinfo);
$qry2=mysqli_query($conn,$qry_studadress);
$qry3=mysqli_query($conn,$qry_relative_addis);
$qry4=mysqli_query($conn,$qry_relative_home);
// $qry5=mysqli_query($conn,$qry_health);
if(!mysqli_query($conn,$qry_studinfo)&&!mysqli_query($conn,$qry_studadress)&&!mysqli_query($conn,$qry_relative_addis)&&!mysqli_query($conn,$qry_relative_home)){
    if(!$qry1){
        header("Location:reg2.php?register=errorstudinfo");
        if(!$qry2){
            header("Location:reg2.php?register=errorstudaddress");
            if(!$qry3){
                header("Location:reg2.php?register=errorRelativ_addis");
                if(!$qry4){
                    header("Location:reg2.php?register=errorRelativ_home");
                    // if(!$qry5){
                    //      header("Location:reg2.php?register=errorHealth_info");
                    // }
                }
            }
        }
    }else{
        header("Location:reg2.php?register=success");
    }
}

// $show="SELECT stud_id,f_name,m_name,l_name,mothers_name,birth_date,height,S_weight,sex,dep,e_level,olompic_type,result,place_computed FROM Student_info WHERE stud_id='12' ";
// $result=mysqli_query($conn,$show);
// $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($res);
}
}


// if(!isset($_GET['register'])){
//   exit();
//   }else{
//     if($_GET['register']=="success"){
//        echo '<div  class="container" >
//          <div class="alert alert-info" id="flash-msg">
//            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//            <strong>Data insertec successfully</strong>.
//          </div>
//          </div>';
//     } elseif($_GET['register']=="id_exist"){
//       echo '<div  class="container" >
//         <div class="alert alert-info" id="flash-msg">
//           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//           <strong>Student Id found please change id number</strong>  .
//         </div>
//         </div>';
//    }
//   }
// ?>
// <script src="register.js"></script>
//       <script src="resource/bootstrap/jquery.js"></script>
//       <script src="resource/bootstrap/bootstrap.bundle.js"></script>
     
//       <script>
//    $(document).ready(function(){
//     $("#flash-msg").delay(2500).fadeOut();
//    });

//       </script>