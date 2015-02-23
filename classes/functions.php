<?php

    require 'db_connection.php';
    
    
    //Retrieve Divisions from database
    function getDivisions()
    {
        global $con;
        
        $get_divisions = "select * from divisions order by division_name ASC";
        
        $query = $con->query($get_divisions);
        
        $query->setFetchMode(PDO::FETCH_ASSOC);
        
        while($row_division = $query->fetch()) {
            $value = $row_division['division_id'];
            $division = $row_division['division_name'];
            
            echo "<option value='".$value."'>".$division."</option>";                          
        }
    }
    
    
    //Retrieve Services from database
    
    function getServices()
    {
        global $con;
        
        $get_services = "select * from services order by service ASC";
        
        $query = $con->query($get_services);
        
        $query->setFetchMode(PDO::FETCH_ASSOC);
        
        while($row_service = $query->fetch()) {
            $value = $row_service['service_id'];
            $service = $row_service['service'];
            
            echo "<option value='".$service."'>".$service."</option>";                          
        }
    }
    
    
    function getCategories()
    {
        global $con;
        
        $get_categories = "select * from services order by service ASC";
        
        $query = $con->query($get_categories);
        
        $query->setFetchMode(PDO::FETCH_ASSOC);
        
        while($row_category = $query->fetch()) {
            $value = $row_category['service_id'];
            $category = $row_category['service'];           
            
            
            echo "<label class='checkbox'> <input type='checkbox' name='categories[]' id='' value='".$category."' /> ".$category."</label>";                          
        }
    }
    
    
    
    function categoriesNav()
    {
        global $con;
        
        $get_categories = "select * from services order by service ASC";
        
        $query = $con->query($get_categories);
        
        $query->setFetchMode(PDO::FETCH_ASSOC);
        
        while($row_category = $query->fetch()) {
            $value = $row_category['service_id'];
            $category = $row_category['service'];           
            
            
            echo "<li><a href='search.php?value=$value'>$category</a></li>";                          
        }
    }
    
    
    //For search
    function techSearch()
    {
        global $con;
        
        if(isset($_POST['search'])) {
            if(isset($_POST['search_bar'])) {
                $search_bar = $_POST['search_bar'];
                
                $get_technicians = "select * from technicians where category like '%$search_bar%'";
                
                $query = $con->query($get_technicians);
                
                $query->setFetchMode(PDO::FETCH_ASSOC);
        
                while($row_technician = $query->fetch()) {
                    
                    $fullname = $row_technician['fullname'];
                    $phone = $row_technician['contactno'];
                    $address = $row_technician['address'];
                    echo "<div class='technician'>
                        <h3 class='h3'>Name : $fullname</h3>
                        <h4 class='h4'>Phone : $phone</h4>
                        <h4 class='h4'>Address : $address</h4>
                        
                    </div>";
                }
            } else {
            $get_technicians = "select * from technicians";
            
            $query = $con->query($get_technicians);
            
            $query->setFetchMode(PDO::FETCH_ASSOC);
    
            while($row_technician = $query->fetch()) {
                
                $fullname = $row_technician['fullname'];
                $phone = $row_technician['contactno'];
                $address = $row_technician['address'];
                echo "<div class='technician'>
                    <h3 class='h3'>Name : $fullname</h3>
                    <h4 class='h4'>Phone : $phone</h4>
                    <h4 class='h4'>Address : $address</h4>
                    
                </div>";
                }
            }
        }
    }
    
    
    
    