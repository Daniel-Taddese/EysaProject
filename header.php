<!DOCTYPE html>
<html>

<head>
    <title>Registeration</title>
    <script type="text/javascript" src="i_r.js"></script>  
    <script src="resource/vue/vue.js"></script>    
    <script src="resource/jquery/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="header.css" ></style>
    <script src="resource/chart/Chart.min.js"></script>
    <script src="resource/morris/morris.min.js"></script>
    <link rel="stylesheet" type="text/css" href="resource/morris/morris.css">
    <script src="resource/raphael/raphael.min.js"></script>
    <link rel="stylesheet" href="resource/bootstrap/bootstrap.min.css">
    <script src="resource/jspdf.min.js"></script>
   
<script type="text/javascript">
var pdfdoc=new jsPDF();
var specialElementHandlers={
'#ignoreContent': function(element,renderer){

}
};
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





    <Style type="text/stylesheet">
    a.hover{
      color:blue;
    }
    
    </Style>
</head>


<body>
     <div id="PDFcontent">
        <!-- <div class="navmanin"> -->
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="reg2.php">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="show_profile.php">show Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="update.php">Update</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="performance_stud_search.php">insert test result</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="show_test_r.php">show test result</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link " href="health_stud_s.php">health</a>
                  </li>   
                  <li class="nav-item">
                    <a class="nav-link " href="health_record_s.php">search health record</a>
                  </li>                        
                  
                        <li class= "nav-item dropdown"> 
                                <a class= "nav-link dropdown-toggle" href= "#" id= "navbarDropdown" role= "button" data-toggle= "dropdown" aria-haspopup= "true" aria-expanded= "false" > Result </a> 
                                <div class= "dropdown-menu" aria-labelledby= "navbarDropdown" >
                                   <a class= "dropdown-item" href= "insert_result_se.php" > Insert result </a>
                                   <a class= "dropdown-item" href= "update_res_se.php" > Update result </a>
                                   <a class= "dropdown-item" href= "slip.php" > Show Result </a>
                                  
                                  <div class= "dropdown-divider" >
            
                                  </div> 
                                  <a class= "dropdown-item" href= "#" > Something else here </a> 
                                </div> 
                              </li>
                </ul> 
              </div>
            </nav>
     </div>
   
     <!-- <button id="gpdf">print</button> -->
<?php include "footer.php" ?>