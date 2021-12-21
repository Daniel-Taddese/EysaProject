<script src="resource/jquery/jquery.js"></script>
<link rel="stylesheet" href="resource/bootstrap/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="header.css" ></style> -->
<?php require 'insert_db.php'?>
<?php 
$rs=array();
$year=0;
$semester=0;
$discipline=0;
if(isset($_POST['search_res'])){
    $id=mysqli_real_escape_string($conn,$_POST['id']);
    $qry_s_s="SELECT stud_id FROM student_info WHERE stud_id='$id'";
    $s_f_s_i=mysqli_query($conn,$qry_s_s);
    $s_fsi=mysqli_num_rows($s_f_s_i);
  
      $qry_search_id="SELECT stud_id FROM students WHERE stud_id='$id'";
      $res_search_stud=mysqli_query($conn,$qry_search_id);
      $res_s=mysqli_num_rows($res_search_stud);
  
          if($s_fsi==0){
            header("Location:slip.php?slip=not_registered");
            exit();
          }
  
  
          if($res_s==0){ // if finding student id number faild
          header("Location:slip.php?slip=res_not_found");
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
    
    echo ' <div class="container"> ';   
    echo ' <div class="row">';
    echo ' <div  class="col-xs-8 col-sm-8 col-md-8 col-lg-12 col-xl-12">';
    echo ' <h2  class=" text-black text-left col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">';
                echo ' <a class="float-left">';
                echo ' <img src="photo/eysalogo.jpg" alt="" style="width:150px;height:150px"></a> ';
                echo ' Ethiopian Youth Sport Acadamy Registrar Office';
                echo ' <br>';
                echo ' <h6>Tel:- (+251) 0116673740 / (+251) 0116673602 / (+251) 0116673641  Fax:- (+251) 0116673641 </h6>';
                echo ' <h6>P.o.x:- 21694 code 1000  addis ababa,Ethiopia</h6>';
                echo '<h6> E-mail:-eysaco@gmail.com  /  Website:- www.eysacadamy.com</h6>';
                echo ' </h2>';
      echo '</div>';
      echo'</div>';
      echo'</div>';

      
      $count=0;
      $result=mysqli_query($conn,$select_res);
      if(mysqli_num_rows($result)!=0){
      while ($row=mysqli_fetch_assoc($result)) {
      $sem=$row['semester']."<br>";
      $se=intval($sem);
      if($se % 2===0){
      $semester=2;
      }else{
        $semester=1;
      }

      echo "<hr>";
      $count++;

      $discipline=$row['motivation'] + $row['motivation'] + $row['motivation'];
              echo '<div class="container">
            <table class="table table-bordered col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <tr>
              <td>Full Name: '.$rs['f_name'].' '.$rs['m_name'].' '.$rs['l_name'].'</td>
              <td>Department: '.$rs['dep_name'].'</td>
              <td>Id: '.$rs['stud_id'].'</td>
               </tr>
              <tr>
              <td>Semister:'.$semester.'</td>
              <td>Year:'. $year.'</td>
              <td>Sex: '.$rs['sex'].'</td>
              </tr>
              <tr>
              <td class="text-center"colspan="4">Grade Report/Slip</td>
              </tr>
              <tr>
              <td>No:</td>
              <td>Test title:</td>
              <td>Result:</td>
              </tr>
              <tr>
              <td>1</td>
              <td>Attendance</td>
              <td>'.$row['attendance'].'</td>
  
              </tr>
              <tr>
              <td>2</td>
              <td>injury</td>
              <td>'.$row['injury'].'</td>
  
              </tr>
              <tr>
              <td>3</td>
              <td>dicsipline</td>
              <td>'.$discipline.'</td>
  
              </tr>
              <tr>
              <td>4</td>
              <td>Evaluation</td>
              <td>'.$row['evaluation'].'</td>
  
              </tr>
              <tr>
              <td>5</td>
              <td>Computation Review</td>
              <td>'.$row['evaluation'].'</td>
  
              </tr>
              <tr>
              <td colspan="2">Total:</td>
              <td>'.$row['total'].'</td>
  
              </tr>
              </table>
              </div>
              <br>';
           if($semester===2){
              $year=intval($year)+1;
           }



      }
    }
  }
    else{
        header("Location:slip.php?slip=not_found");
    }
}
?>