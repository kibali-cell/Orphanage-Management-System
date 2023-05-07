<?php include './admin_components/admin_header.php' ?>

    <div class="ui container">

        <!-- Top Navigation Bar -->
        <?php include './admin_components/admin_top-menu.php' ?>

        <!-- BODY Content -->
        <div class="ui grid">
            <!-- Left menu -->
            <?php include './admin_components/admin_side-menu.php' ?>
            
            <!-- right content -->
            <div class="twelve wide column">
                <h1>Child Registration Form</h1>

                <?php

                    if(isset($_POST['submit_child'])) {
                        $child_name = $_POST['child_name'];
                        $cdob = $_POST['child_dob'];
                        $cyoe = $_POST['child_yoe'];
                        $child_class = $_POST['child_class'];
                        $child_school = $_POST['child_school'];
                        $child_gender = $_POST['child_gender'];
                        $medication = $_POST['medication'];
                        $condition = $_POST['condition'];
                        $vaccination = $_POST['vaccination'];
                        $incidents = $_POST['incidents'];
                        $nutritional_status = $_POST['nutritional_status'];
                        $behavioral_status = $_POST['behavioral_status'];
                        $family_contacts = $_POST['family_contacts'];
                        $child_story_behind = $_POST['child_story_behind'];

                    if(isset($_FILES['image']['name'])){
                            $image_name= $_FILES['image']['name'];

                            if($image_name!="")
                            {
                                //means image is selected
                                //rename image
                                $ext = explode('.', $image_name);
                                $file_extension = end($ext);

                                $image_name = "Child-Name-".rand(0000,9999).".".$file_extension;

                                //upload the image
                                $src = $_FILES['image']['tmp_name'];

                                $dst = "../img/children/".$image_name;
                                $upload = move_uploaded_file($src, $dst);

                                //check whether image is uploaded
                                if($upload == false)
                                {
                                    $_SESSION['upload'] = "<div class = 'error'>Failed to upload Image.<div/>";
                                    header('location:/Orphanage-Database-Management-System-master/admin/index.php');
                                    die();
                                }
                            }
                        }
                        else
                        {
                            $image_name= "";
                        }

                        //insert into db

                        $sql = "INSERT INTO children (cname, cdob, cyoe, cclass, cschool, cgender, cmedication, ccondition, cvaccination, cincidents, cnutrition, cbehavior, cfamily, cstory, sponsored) 
                        VALUES ('$child_name','$cdob', '$cyoe', '$child_class', '$child_school', '$child_gender', '$medication', '$condition', '$vaccination', '$incidents', '$nutritional_status', '$behavioral_status', '$family_contacts', '$child_story_behind', '0')";
                        $res = mysqli_query($conn, $sql); 

                        if ($res == TRUE) {
                            echo "<script> alert('New record created successfully'); </script>";
                            header('location:/Orphanage-Database-Management-System-master/admin/index.php');
                        } else {
                            echo "<script> alert('Error in Insertion'); </script>";
                        }
                        
                        $conn->close();
                    } 

                ?>

                
                <form action="" method="POST" class="ui form" enctype = "multipart/form-data">
                    <div class="seven wide field">
                        <label for="child_name">Child Name:</label>
                        <input type="text" name="child_name" id="child_name" placeholder="Child's Name" required>
                    </div>
                    <div class="seven wide field">
                        <label for="child_dob">Date of Birth:</label>
                        <input type="date" name="child_dob" id="child_dob" required>
                    </div>
                    <div class="seven wide field">
                        <label for="child_gender">Gender:</label>
                        <input type="text" name="child_gender" placeholder="Child's Gender" id="child_gender" required>
                    </div>
                    <div class="seven wide field">
                        <label for="child_yoe">Year of Enroll:</label>
                        <input type="number" min="1900" max="2200" name="child_yoe" id="child_yoe" required>
                    </div>
                    <div class="seven wide field">
                        <label for="child_class">Class:</label>
                        <input type="text" name="child_class" placeholder="Child's Class" id="child_class" required>
                    </div>
                    <div class="seven wide field">
                        <label for="child_school">School Name:</label>
                        <input type="text" name="child_school" placeholder="Child's School" id="child_school" required>
                    </div>
                    <div class="seven wide field">
                        <label for="medication">Medication:</label>
                        <input type="text" name="medication" placeholder="Mention the medication(s) and type No if there's none" id="medication" required>
                    </div>
                    <div class="seven wide field">
                        <label for="condition">Medical Condition:</label>
                        <input type="text" name="condition" placeholder="Mention the Condition(s) and type NO if there's none" id="condition" required>
                    </div>
                    <div class="seven wide field">
                        <label for="vaccination">Vaccination:</label>
                        <input type="text" name="vaccination" placeholder="Mention the vaccine(s) and type NO if there's none" id="vaccination" required>
                    </div>
                    <div class="seven wide field">
                        <label>Nutritional Status (0-5):</label>
                        <input type="number" min="0" max="5" name="nutritional_status" required>
                    </div>
                    <div class="seven wide field">
                        <label>Behavioral Status (0-5):</label>
                        <input type="number" min="0" max="5" name="behavioral_status" required>
                    </div>
                    <div class="seven wide field">
                        <label>Incidents:</label>
                        <input type="text" name="incidents" placeholder="Mention if there is any injury or accident history" required>
                    </div>
                    <div class="field">
                        <label>Upload Child Image:</label>
                        <input type="file" name="image">
                    </div>
                    <div class="field">
                        <label>Reason for Vulnerability:</label>
                        <textarea name="child_story_behind" rows="2" required></textarea>
                    </div>
                    <div class="seven wide field">
                        <label>Family/Guardian Contacts:</label>
                        <input type="text" name="family_contacts" placeholder="0701234567" required>
                    </div>

                    <div class="seven wide field">
                        <input name="submit_child" type="submit" class="ui primary button" value ="Submit"></input>
                    </div>
                    
                    <button type="reset" class="ui button">Reset</button>
                </form>

                
            </div>

        </div>

    </div>
    
<?php include './admin_components/admin_footer.php' ?>