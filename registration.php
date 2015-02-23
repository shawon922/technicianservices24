<?php 
    include 'includes/header.php';
    require 'classes/functions.php';    
?>

<!--Registration process-->

<?php

if(isset($_POST['signup'])){

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $fullname = test_input($_POST["fullname"]);
        if (!preg_match("/^[a-zA-Z]*$/", $fullname)) {
            echo "<script>alert('Only letters are allowed for full name!!');</script>";
            exit();
        }
        
        $username = test_input($_POST["username"]);
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            echo "<script>alert('Only letters and numbers are allowed for username!!');</script>";
            exit();
        }

        $password = md5($_POST['password']);

        /*$email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid Email Format!');</script>";
            exit();
        }*/
        
        $phone = test_input($_POST['phone']);
        $address = test_input($_POST['address']);
        $gender = $_POST['gender'];
        
        //Getting the image from the field
        if(isset($_FILES['image'])) {
            $image = $username.'_'.$_FILES['image']['name'];
            $image_temp = $_FILES['image']['tmp_name'];
    
            move_uploaded_file($image_temp, "profile_images/$image");
        }
        
        
        if(isset($_POST['categories'])) {
            $services = '';
            foreach($_POST['categories'] as $category_name) {
                $services.= $category_name;
            }
        }
        
      if($_POST['division']!='') {
        $divisions = $_POST['division'];
      }
      
      if($_POST['city']!='') {
        $cities = $_POST['city'];
      }
      
      if($_POST['area']!='') {
        $areas = $_POST['area'];
      }


        $check_name = "select * from technicians where username='$username'";

        $q = $con->query($check_name);

        $name_count = $q->rowCount();

        if($name_count!=0){
            echo "<script>alert('Username already exists!!');</script>";
            exit();
        }

        $insert = "insert into technicians (username, password, fullname, category, contactno, gender, profile_pic, address, area_id, city_id, division_id, joining_date) values ('$username', '$password', '$fullname', '$services', $phone, '$gender', '$image', '$address', $areas, $cities, $divisions, NOW())";

        //$insert = "insert into customers (user_name, user_pass, user_email) values ('$name','$pass','$email')";

        $q = $con->query($insert);

        echo "<script>window.open('welcome.php','_self');</script>";
        //header('Location: welcome.php');

    }
}

?>






    <div class="row main">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong class="">Registration for Service Provider</strong>

                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Full Name</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="inputEmail3" placeholder="Full Name" name="fullname" required="" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Username</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="inputEmail3" placeholder="User Name" name="username" required="" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Password</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="inputEmail3" placeholder="Password" name="password" required="" type="password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Phone</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="inputEmail3" placeholder="Phone Number" name="phone" required="" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">Address</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="inputPassword3" placeholder="Address" name="address" required="" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Gender</label>
                            <div class="col-sm-6">
                                <label class="radio-inline"> <input type="radio" name="gender" id="male" value="male" checked="" /> Male </label>
                                <label class="radio-inline"> <input type="radio" name="gender" id="female" value="female"/> Female </label>
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="exampleInputFile" class="col-sm-4 control-label">Image</label>
                            <div class="col-sm-6">
                                <input class="" id="exampleInputFile" name="image" type="file" />
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Categories</label>
                            <div class="col-sm-6">
                                <?php getCategories(); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Division</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="division" onchange="getCity('classes/findcity.php?division_id='+this.value)">
                                    <option value="" selected="selected">Select Division</option>                  
                                        <?php getDivisions();?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">City</label>
                            <div class="col-sm-6" id="citydiv">
                                <select name='city' class='form-control'>
                                    <option value="" selected='selected'>Select City</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Area</label>
                            <div class="col-sm-6" id="areadiv">
                                <select name='area' class="form-control">
                                    <option selected="selected">Select Area</option>                                  
                                </select>
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <div class="col-sm-offset-4 col-sm-6">
                                <div class="checkbox">
                                    <label class="">
                                        <input class="" name="agreement" id="agreement" type="checkbox">I agree to all
                                        <a href="#">Terms</a>
                                        and <a href="#">Conditions</a></label>
                                </div>
                            </div>
                        </div>-->
                        <div class="form-group last">
                            <div class="col-sm-offset-4 col-sm-6">
                                <button type="submit" class="btn btn-primary btn-sm btn-signup" name="signup">Sign Up</button>
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="panel-footer">Already Registered? <a href="login.php" class="">Login here</a>
                </div>
            </div>
        </div>
    </div>
    


</div> <!--Container div end-->
            
</div> <!--Full div end-->
        
        
                

<?php include 'includes/footer.php'; ?>