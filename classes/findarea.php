<?php
    require 'db_connection.php';

    $city = intval($_REQUEST['city_id']);
    
    if($city=="") {
        echo "<select name='area' class='form-control'>
                    <option value='' selected='selected'>Select Area</option>
              </select>";
              exit;
    }
    
    
    $get_area="select area_id, area_name from areas where city_id = $city order by area_name asc";
    
    /*$query = $con->prepare($get_area);
    
    $query->bindParam(':division', $city);
    $query->execute();*/
    
    $query = $con->query($get_area);
    
    $query->setFetchMode(PDO::FETCH_ASSOC);    
    
    
    echo "<select name='area' class='form-control' id='areadiv'>
            <option selected='selected'>Select Area</option>";
    
    while($row = $query->fetch()){
        $area_id = $row['area_id'];
        $area_name = $row['area_name'];
        
        echo "<option value='".$area_id."'>$area_name</option>";
    }
    
    echo "</select>";

