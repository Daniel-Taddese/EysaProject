<?php require 'header.php' ?>
<?php require 'db_connection.php' ?>
<?php require 'profil_db.php' ?> 
<?php if($res_id):?>
<div class="card hello card-info text-center">
              <div class="card-header  bg-light">
                  <h2><strong>Basic student information</strong></h2> </div>
                        
 <div class="card-body">
    <table class = "table table-striped">   
        <thead>
            <tr>
                <th>Student Id</th>
                <th>Full name</th>
                <th>Sex</th>
                <th>Departement</th>
                <th>Birth Date</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Result</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
            <td><?php echo $res_id['stud_id']; ?></td>
            <td><?php echo $res_id['f_name'].' '.$res_id['m_name'].' '.$res_id['l_name'];?></td>
            <td><?php echo $res_id['sex'];?></td>
            <td><?php echo $res_id['dep_name'];?></td>
            <td><?php echo $res_id['birth_date'];?></td>
            <td><?php echo $res_id['height'];?></td>
            <td><?php echo $res_id['S_weight'];?></td>
            <td><?php echo $res_id['result'];?></td>
            </tr>
        </tbody>
    </table>
  </div>
</div>                
    <?php endif;?>


<?php if($res_a): ?>
    <div class="card hello card-info text-center">
              <div class="card-header  bg-light">
                  <h2><strong> student Addres</strong></h2> </div>
                        
                 <div class="card-body">
    <table class = "table table-striped">   
        <thead>
            <tr>
                <th>Region</th>
                <th>Sub city</th>
                <th>Wereda</th>
                <th>Kebele</th>
                <th>Po_Box</th>
                <th>Phone number</th>
            </tr>
        </thead>
        
     <tbody>
        <tr>
            <td><?php echo $res_a['region']; ?></td>
            <td><?php echo $res_a['sub_city'];?></td>
            <td><?php echo $res_a['wereda'];?></td>
            <td><?php echo $res_a['kebele'];?></td>
            <td><?php echo $res_a['po_box'];?></td>
            <td><?php echo $res_a['phon_num'];?></td>
         </tr>
     </tbody>
    </table>
</div>
</div>              
<?php endif ;?>


<?php if($res_r_a): ?>
    <div class="card hello card-info text-center">
              <div class="card-header  bg-light">
                  <h2><strong> Relative address from Addis Abeba</strong></h2> </div>
                        
                 <div class="card-body">
    <table class = "table table-striped">   
        <thead>
            <tr>
                <th>Region</th>
                <th>Full name</th>
                <th>Phone number</th>
                <th>sub city</th>
                <th>kebele</th>
            </tr>
        </thead>
        
     <tbody>
        <tr>
            <td><?php echo $res_r_a['full_name']; ?></td>
            <td><?php echo $res_r_a['phon_num'];?></td>
            <td><?php echo $res_r_a['sub_city'];?></td>
            <td><?php echo $res_r_a['kebele'];?></td>
         </tr>
     </tbody>
    </table>
</div>
</div>              
<?php endif ;?>



<?php if($res_r_h): ?>
    <div class="card hello card-info text-center">
              <div class="card-header  bg-light">
                  <h2><strong> Relative from Home address</strong></h2> </div>
                        
                 <div class="card-body">
    <table class = "table table-striped">   
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone number</th>
                <th>Region</th>
                <th>Zone</th>
                <th>wereda</th>
            </tr>
        </thead>
        
     <tbody>
        <tr>
            <td><?php echo $res_r_h['full_name']; ?></td>
            <td><?php echo $res_r_h['phon_num'];?></td>
            <td><?php echo $res_r_h['region'];?></td>
            <td><?php echo $res_r_h['zone'];?></td>
            <td><?php echo $res_r_h['wereda'];?></td>
         </tr>
     </tbody>
    </table>
</div>
</div>              
<?php endif ;?>
