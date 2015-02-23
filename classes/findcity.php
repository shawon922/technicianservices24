<?php
    require 'db_connection.php';

    $division = intval($_REQUEST['division_id']);
    
    if($division=="") {
        echo "<select name='city' class='form-control' onchange=\"getArea('classes/findarea.php?city_id='+this.value)\">
                    <option value='' selected='selected'>Select City</option>
              </select>";
              exit;
    }
    
    
    $get_city="select city_id, city_name from cities where division_id = $division order by city_name asc";
    
    /*$query = $con->prepare($get_city);
    
    $query->bindParam(':division', $division);
    $query->execute();*/
    
    $query = $con->query($get_city);
    
    $query->setFetchMode(PDO::FETCH_ASSOC);    
    
    
    echo "<select name='city' class='form-control' onchange=\"getArea('classes/findarea.php?city_id='+this.value)\">
            <option value='' selected='selected'>Select City</option>";
    
    while($row = $query->fetch()){
        $city_id = $row['city_id'];
        $city_name = $row['city_name'];
        
        echo "<option value='".$city_id."'>$city_name</option>";
    }
    
    echo "</select>";

