<html>
    <head>
        <title>Update Data In Database Using CodeIgniter</title>
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assert/css/update.css" ?>">
    </head>
    <body>
        <div id="container">
            <div id="wrapper">
                <h1>Update Your Trips </h1><hr/>
                <div id="menu">
                    <h4>Click On Menu</h4>
                    <!-- Fetching Trip ids Of All customtrips From Database -->
                    <ol>
                        <?php foreach ($customtrips as $customtrip): ?>
                        <li><a href="<?php echo base_url() . "index.php/update_ctrl/trip_id/" . $customtrip->Trip_ID; ?>"><?php echo $customtrip->Trip_ID; ?></a></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
                <div id="detail">
                    <!-- Fetching All Details of Selected customtrips From Database And Showing In a Form -->
                    <?php foreach ($single_customtrip as $customtrip): ?>
                    <h4>Edit Detail & Click Update Button</h4><br><br>
                    <form method="post" action="<?php echo base_url() . "index.php/update_ctrl/update_trip_id1"?>">
                        <label id="hide">Id :</label>
                        <input type="text" id="hide" name="tid" value="<?php echo $customtrip->Trip_ID; ?>">
                        <label>Date :</label>
                        <input type="date" name="date" value="<?php echo $customtrip->Date; ?>">
                        <label>Pickup Time :</label>
                        <input type="time" name="pickup_time" value="<?php echo $customtrip->Pickup_Time; ?>">
                        <label>No of Days :</label>
                        <input type="text" name="day_count" value="<?php echo $customtrip->Day_Count; ?>">
                        <label>Pickup Point :</label>
                        <input type="text" name="pickup_point" value="<?php echo $customtrip->Pickup_point; ?>">
                        <label>Destination :</label>
                        <input type="text" name="destination" value="<?php echo $customtrip->Destination; ?>">
                        <label>Estimated Distance :</label>
                        <input type="text" name="est_distance" value="<?php echo $customtrip->Est_Distance; ?>">
                        <input type="submit" id="submit" name="dsubmit" value="Update">
                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </body>
</html>