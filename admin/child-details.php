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
                <h1 style="text-align: center;">Welcome to Administrator</h1>

                <?php
                 if(isset($_GET['cid'])) {
                    $cid = $_GET['cid'];
                } else {
                    $unsponsored_page = './child-gallery-sponsored.php';
                    header('Location: ' . $unsponsored_page);
                }
                            $sql = "SELECT * FROM children WHERE cid='$cid'";
                            $result = $conn->query($sql);
    
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                $unformated = $row['cdob'];
                                $formateddate = date("d-m-Y", strtotime($unformated));
                ?>
                
                <table class="ui celled table">
                        <tr>
                            <th>S/No:</th>
                            <td><?php echo $row['cid']; ?></td>
                        </tr>
                        <tr>
                            <th>Name:</th>
                            <td><?php echo $row['cname']; ?></td>
                        </tr>
                        <tr>
                            <th>Date of Birth:</th>
                            <td><?php echo $formateddate; ?></td>
                        </tr>
                        <tr>
                            <th>Year of enrolled:</th>
                            <td><?php echo $row['cyoe']; ?></td>
                        </tr>
                        <tr>
                            <th>Class:</th>
                            <td><?php echo $row['cclass']; ?></td>
                        </tr>
                            <tr>
                            <th>School Name:</th>
                            <td><?php echo $row['cschool']; ?></td>
                            </tr>
                            <tr>
                            <th>Gender:</th>
                            <td><?php echo $row['cgender']; ?></td>
                            </tr>
                            <tr>
                            <th>Medication Info:</th>
                            <td><?php echo $row['cmedication']; ?></td>
                            </tr>
                            <tr>
                            <th>Health Condition:</th>
                            <td><?php echo $row['ccondition']; ?></td>
                            </tr>
                            <tr>
                            <th>Vaccination Info:</th>
                            <td><?php echo $row['cvaccination']; ?></td>
                            </tr>
                            <tr>
                            <th>Incidents:</th>
                            <td><?php echo $row['cincidents']; ?></td>
                            </tr>
                            <tr>
                            <th>Nutritional Status:</th>
                            <td><?php echo $row['cnutrition']; ?></td>
                            </tr>
                            <tr>
                            <th>Behavioral Status:</th>
                            <td><?php echo $row['cbehavior']; ?></td>
                            </tr>
                            <tr>
                            <th>Family Contacts:</th>
                            <td><?php echo $row['cfamily']; ?></td>
                            </tr>
                            <tr>
                            <th>Short Story:</th>
                            <td><?php echo $row['cstory']; ?></td>
                            </tr>
                        </tr>
                        
                        <?php
                                }
                            }
                        ?>
                    <tfoot class="full-width">
                        <tr>
                            <th colspan="5">
                                <a class="ui primary button" href="child-update.php?cid=<?php echo $cid; ?>"> Update Child Details </a>
                                
                                <a class="ui red button" href="child-delete.php?cid=<?php echo $cid; ?>"> Delete Child Details </a>
                            </th>
                            
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>

    </div>
    
<?php include './admin_components/admin_footer.php' ?>