
    <?php 
    
        require 'classes/functions.php';
        include 'includes/header.php';
            
     ?>
    
            <div class="row body-taglines">
                <h2 class="h2">Largest Technician Services in your Home</h2>
                <h3 class="h3">Thousands of technicians waiting for you. Find your technician 24 hours for home services.</h3>
                <h3 class="h3">Just select your location to find your desired technician.</h3>
            </div>
            
            <div class="row jumbotron find-section">
                <form class="form-inline" method="post" action="search.php">
                    <div class="col-md-2">
                        <input type="search" name="search_bar" class="form-control" placeholder="Search Technician" />                        
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" name="division" onchange="getCity('classes/findcity.php?division_id='+this.value)">
                            <option value="" selected="selected">Select Division</option>                              <?php getDivisions();?>
                        </select>
                    </div>
                    <div class="col-md-2" id="citydiv">                      
                        <select name='city' class='form-control'>
                            <option value="" selected='selected'>Select City</option>
                        </select>
                    </div>
                    <div class="col-md-2" id="areadiv">
                        <select name='area' class="form-control">
                            <option value="" selected="selected">Select Area</option>
                          
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name='service' class="form-control">
                          <option value="" selected="selected">Select Service</option>
                          <?php getServices(); ?>
                          
                        </select>
                    </div>                    
                    <div class="col-md-2">
                        <button type="submit" name="search" class="btn btn-success">Search</button>
                    </div>
                </form>
            </div>
        
            
        
    <?php include 'includes/footer.php'; ?>