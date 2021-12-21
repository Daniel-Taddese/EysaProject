<?php include 'db_connection.php';?>
<head>
<link rel="stylesheet" href="resource/bootstrap/bootstrap.min.css">
<script src="resource/jspdf.min.js"></script>

</head>

<?php 
if(isset($_GET['id'])){
    $id=mysqli_real_escape_string($conn,$_GET['id']);
    $qry_search_health_rec="SELECT * FROM health WHERE stud_id='$id'";
    $res_h_r=mysqli_query($conn,$qry_search_health_rec);




    $select_res="SELECT * FROM `students` WHERE stud_id='$id'";
    $select_dep_id="SELECT student_info.stud_id,student_info.f_name,student_info.m_name,student_info.l_name,student_info.reg_date,
    student_info.sex,departments.dep_name
    FROM student_info INNER JOIN departments ON student_info.dep=departments.dep_id WHERE stud_id='$id'";
    $ress=mysqli_query($conn,$select_dep_id);
    $rs=mysqli_fetch_assoc($ress);
   $rs_year=$rs['reg_date'];

   $r=explode('-',$rs_year);
   $ye=$r[0]."<br>";
   $year=intval($ye)."<br>";

    $count=0;
    $result=mysqli_query($conn,$select_res);


echo '<body>';
        echo '<div id="PDFcontent">';
        echo '<div class="jumbotron">
        <div class="row">
        <p><label class="display-4">Student health information</label></p>
        </div>
        <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <h3>student id Number:</h3> '.$rs['stud_id'].'
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <h3>Full Name: </h3>'.$rs['f_name'].' '.$rs['m_name'].' '.$rs['l_name'].'
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <h3>Department:</h3> '.$rs['dep_name'].'
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
        <h3>Sex:</h3> '.$rs['sex'].'
        </div>
        </div>
        </div>
        </div>';


    // Semister:'.$semester.'
    // Year:'. $year.'




    if(mysqli_num_rows($res_h_r)!=0){
        while ($row=mysqli_fetch_assoc($res_h_r)) {

            $sem=$row['hTest_num']."<br>";
            $se=intval($sem);
            if($se % 2===0){
            $semester=2;
            }else{
              $semester=1;
            }
      
            echo "<hr>";
            $count++;



      echo'<div class="card hello card-info text-center">
      <div class="card card-header">
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <h4>Semester:'.$semester.'</h4>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <h4>Year:'.$year.'</h4>
      </div>
      </div>
      </div>
            <div class="jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                     <h1>Physical examination</h1>
                        <hr>
                    </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">G/A</label>
                            <p>'.$row['ga'].'</p>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Blood pressure</label>
                        <p>'.$row['bl_pr'].'</p>                                           
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Pulse</label>
                        <p>'.$row['pulse'].'</p>                                                                                   
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Tempreture</label>
                        <p>'.$row['temp'].'</p>                                                                                                                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Resparatory rate</label>
                        <p>'.$row['r_r'].'</p>                                                                                                                                                                   
                    </div>
                </div>
          


            
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                     <h1>Antropometric measures</h1>
                        <hr>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Height</label>
                        <p>'.$row['height'].'</p>                                                                                                                                                                                                              
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Weight</label>
                        <p>'.$row['weight'].'</p>                                                                                                                                                                                                              
                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">BMI</label>
                        <p>'.$row['bms'].'</p>                                                                                                                                                                                                              
                       
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Leg length</label>
                        <p>'.$row['leg_len'].'</p>                                                                                                                                                                                                              
                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Sitting height</label>
                        <p>'.$row['s_h'].'</p>                                                                                                                                                                                                              
                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Arm span</label>
                        <p>'.$row['a_s'].'</p>                                                                                                                                                                                                              
                        
                    </div>
                </div>
          



           
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                     <h1>Laboratory Investigation</h1>
                        <hr>
                    </div>

                     <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                     <label for="name">RBS/FBS</label>
                     <p>'.$row['rbs'].'</p>                                                                                                                                                                                                              
                    
                     </div>


                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">HGB</label>
                     <p>'.$row['hgs'].'</p>                                                                                                                                                                                                              
                      
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">U/A</label>
                     <p>'.$row['u_a'].'</p>                                                                                                                                                                                                              
                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Hepatitis</label>
                     <p>'.$row['hepatitis'].'</p>                                                                                                                                                                                                              
                       
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Blood group</label>
                     <p>'.$row['blood_g'].'</p>                                                                                                                                                                                       
                    </div>
                </div>
            






            
                <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                     <h1>HEENT</h1>
                        <hr>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Head</label>
                     <p>'.$row['head'].'</p>                                                                                                                                                                                       
                       
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <label for="name">Right aye</label>
                     <p>'.$row['R_aye'].'</p>                                                                                                                                                                                       
                             
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <label for="name">Left aye</label>
                     <p'.$row['L_aye'].'</p>                                                                                                                                                                                       
                             
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">

                    <label for="name">Right ear</label>
                     <p>'.$row['R_ear'].'</p>                                                                                                                                                                                       
                               
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <label for="name">Left ear</label>
                     <p>'.$row['L_ear'].'</p>                                                                                                                                                                                       
                       
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">CVS/ECG</label>
                     <p>'.$row['cvs'].'</p>                                                                                                                                                                                       
                                    
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Chest(RS)</label>
                     <p>'.$row['chest'].'</p>                                                                                                                                                                                       
                                    
                     </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">GIS</label>
                     <p>'.$row['gis'].'</p>                                                                                                                                                                                       
                            
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">GUS</label>
                     <p>'.$row['gus'].'</p>                                                                                                                                                                                       
                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">MSS</label>
                     <p>'.$row['mss'].'</p>                                                                                                                                                                                       
                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <label for="name">Nuro examination</label>
                     <p>'.$row['nuro_ex'].'</p>                                                                                                                                                                                       
                           
                    </div>
                </div>
                  <hr>
                <div class="row">
                    <br>
                    <h3 for="name">Abnormality Explanation</h3>
                    </div>
                    <div class="row">
                    <p>'.$row['explanation'].'</p>                                                                                                                                                                                       
                    </div>
                </div>
    </div>';

            if($semester===2){
                $year=intval($year)+1;
             }
            // print_r($row);
            // echo "<hr><br>";
        }

    }
    echo '</div>';
 echo'<button id="gpdf">print</button>';
echo '</body>';
}
?>
   <script type="text/javascript">
   var pdfdoc=new jsPDF();
//    var specialElementHandlers={
//    '#ignoreContent': function(element,renderer){
   
//    }
//    };
   $(document).ready(function(){
     $("#gpdf").click(function(){
       pdfdoc.fromHTML($('#PDFcontent').html(),10,10,{
         'width':110,
         'elementHandlers':specialElementHandlers
       });
       pdfdoc.save('first.pdf');
     })
   })
   </script>