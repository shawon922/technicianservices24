        <div class="row search-section">
            <div class="col-md-3 sidebar">
                <form class="" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <div class="">
                            <select class="form-control" name="division" onchange="getCity('classes/findcity.php?division_id='+this.value)">
                        <option value="" selected="selected">Select Division</option>                              <?php getDivisions();?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="" id="citydiv">
                            <select class='form-control'>
                                <option value="" selected='selected'>Select City</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="" id="areadiv">
                            <select class="form-control">
                                <option value="" selected="selected">Select Area</option>                                  
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <select class="form-control">
                              <option value="" selected="selected">Select Service</option>
                              <?php getServices(); ?>
                            </select>
                        </div> 
                     </div>                   
                    <div class="">
                        <button type="submit" name="search" class="btn btn-success">Search</button>
                    </div>
                </form>
            </div>          
            