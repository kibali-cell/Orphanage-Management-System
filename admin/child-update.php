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
                <h1>Update Child Form</h1>

                

                <?php

                    if(isset($_GET['cid'])) {
                        $cid = $_GET['cid'];
                        $get_data = "SELECT * FROM children WHERE cid=$cid";
                        $result = mysqli_query($conn, $get_data);
                        $row = mysqli_fetch_assoc($result);
                        $child_name = $row['cname'];
                        $cdob = $row['cdob'];
                        $cyoe = $row['cyoe'];
                        $child_class = $row['cclass'];
                        $child_school = $row['cschool'];
                        $child_gender = $row['cgender'];
                        $medication = $row['cmedication'];
                        $condition = $row['ccondition'];
                        $vaccination = $row['cvaccination'];
                        $incidents = $row['cincidents'];
                        $nutritional_status = $row['cnutrition'];
                        $behavioral_status = $row['cbehavior'];
                        $family_contacts = $row['cfamily'];
                        $child_story_behind = $row['cstory'];
                    }

                ?>

                
                <form action="" method="POST" class="ui form" enctype = "multipart/form-data">
                    <div class="seven wide field">
                        <label for="child_name">Child Name:</label>
                        <input type="text" name="child_name" id="child_name" value="<?php echo $child_name;?>" required>
                    </div>
                    <div class="seven wide field">
                        <label for="child_dob">Date of Birth:</label>
                        <input type="date" name="child_dob" id="child_dob" value="<?php echo $cdob;?>" required>
                    </div>
                    <div class="seven wide field">
                        <label for="child_gender">Gender:</label>
                        <input type="text" name="child_gender" placeholder="Child's Gender" id="child_gender" value="<?php echo $child_gender;?>" required>
                    </div>
                    <div class="seven wide field">
                        <label for="child_yoe">Year of Enroll:</label>
                        <input type="number" min="1900" max="2200" name="child_yoe" id="child_yoe" value="<?php echo $cyoe;?>" required>
                    </div>
                    <div class="seven wide field">
                        <label for="child_class">Class:</label>
                        <input type="text" name="child_class" placeholder="Child's Class" id="child_class" value="<?php echo $child_class;?>" required>
                    </div>
                    <div class="seven wide field">
                        <label for="child_school">School Name:</label>
                        <input type="text" name="child_school" placeholder="Child's School" id="child_school" value="<?php echo $child_school;?>" required>
                    </div>
                    <div class="seven wide field">
                        <label for="medication">Medication:</label>
                        <input type="text" name="medication" placeholder="Mention the medication(s) and type No if there's none" id="medication" value="<?php echo $medication;?>" required>
                    </div>
                    <div class="seven wide field">
                        <label for="condition">Medical Condition:</label>
                        <input type="text" name="condition" placeholder="Mention the Condition(s) and type NO if there's none" id="condition" value="<?php echo $condition;?>" required>
                    </div>
                    <div class="seven wide field">
                        <label for="vaccination">Vaccination:</label>
                        <input type="text" name="vaccination" placeholder="Mention the vaccine(s) and type NO if there's none" id="vaccination" value="<?php echo $vaccination;?>" required>
                    </div>
                    <div class="seven wide field">
                        <label>Nutritional Status (0-5):</label>
                        <input type="number" min="0" max="5" name="nutritional_status" value="<?php echo $nutritional_status;?>" required>
                    </div>
                    <div class="seven wide field">
                        <label>Behavioral Status (0-5):</label>
                        <input type="number" min="0" max="5" name="behavioral_status" value="<?php echo $behavioral_status;?>" required>
                    </div>
                    <div class="seven wide field">
                        <label>Incidents:</label>
                        <input type="text" name="incidents" placeholder="Mention if there is any injury or accident history" value="<?php echo $incidents;?>" required>
                    </div>
                    <div class="field">
                        <label>Upload Child Image:</label>
                        <input type="file" name="image">
                    </div>
                    <div class="field">
                        <label>Reason for Vulnerability:</label>
                        <textarea name="child_story_behind" rows="2" value="<?php echo $child_story_behind;?>" required></textarea>
                    </div>
                    <div class="seven wide field">
                        <label>Family/Guardian Contacts:</label>
                        <input type="text" name="family_contacts" placeholder="0701234567" value="<?php echo $family_contacts;?>" required>
                    </div>

                    <div class="seven wide field">
                        <input name="update_child" type="submit" class="ui primary button" value ="Update"></input>
                    </div>
                    
                    <button type="reset" class="ui button">Reset</button>
                </form>

                
            </div>

        </div>

    </div>
    <?php
  if(isset($_POST['update_child'])){
    $up_childname = $_POST['child_name'];
    $up_cdob = $_POST['child_dob'];
    $up_cyoe = $_POST['child_yoe'];
    $up_child_class = $_POST['child_class'];
    $up_child_school = $_POST['child_school'];
    $up_child_gender = $_POST['child_gender'];
    $up_medication = $_POST['medication'];
    $up_condition = $_POST['condition'];
    $up_vaccination = $_POST['vaccination'];
    $up_incidents = $_POST['incidents'];
    $up_nutritional_status = $_POST['nutritional_status'];
    $up_behavioral_status = $_POST['behavioral_status'];
    $up_family_contacts = $_POST['family_contacts'];
    $up_child_story_behind = $_POST['child_story_behind'];



    //insert into db
    $sql = "UPDATE children SET 
    cname = '$up_childname', 
    cdob='$up_cdob', 
    cyoe='$up_cyoe', 
    cclass= '$up_child_class', 
    cschool ='$up_child_school', 
    cgender ='$up_child_gender', 
    cmedication ='$up_medication', 
    ccondition ='$up_condition', 
    cvaccination= '$up_vaccination', 
    cincidents ='$up_incidents', 
    cnutrition=  '$up_nutritional_status', 
    cbehavior= '$up_behavioral_status', 
    cfamily ='$up_family_contacts', 
    cstory ='$up_child_story_behind', 
    sponsored = '0'
    WHERE cid=$cid ";

    $res = mysqli_query($conn, $sql); 

    if ($res == TRUE) {
        echo "<script> alert('New record created successfully'); </script>";
    } else {
        echo "<script> alert('Error in Insertion'); </script>";
    }
    
    $conn->close();
} 
?>
<?php include './admin_components/admin_footer.php' ?>


