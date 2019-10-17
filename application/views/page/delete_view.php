<!DOCTYPE html>
<html>
    <head>
        <title>Delete Data From Database </title>
        <!--=========== Importing Google fonts ===========-->
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url()?>./assert/css/delete.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="container">
            <div id="wrapper">
            <h1>Delete Trip</h1>
            <div id="menu">
                <p>Click On Menu</p>
                <!--====== Displaying Fetched trips from Database in Links ========-->
                <ol>
                    <?php foreach ($customtrips as $customtrip): ?>
                    <li><a href="<?php echo base_url() . "index.php/delete_ctrl/trip_id/" . $customtrip->Trip_ID; ?>"><?php echo $customtrip->Trip_ID; ?></a>
                    </li><?php endforeach; ?>
                </ol>
            </div>
            <div id="detail">
                    <!--====== Displaying Fetched Details from Database ========-->
                <?php foreach ($single_customtrip as $customtrip): ?>
                <h4>Trip Details</h4>
                <?php echo $customtrip->Trip_ID; ?>
                <?php echo $customtrip->Date; ?>
                <?php echo $customtrip->Pickup_Time; ?>
                <?php echo $customtrip->Day_Count; ?>
                <?php echo $customtrip->Pickup_point; ?>
                <?php echo $customtrip->Destination; ?>
                <?php echo $customtrip->Est_Distance; ?>
                <!--====== Delete Button ========-->
                <a href="<?php echo base_url() . "index.php/delete_ctrl/delete_trip_id/" . $customtrip->Trip_ID; ?>">
                <button>Delete</button></a>
                <?php endforeach; ?>
            </div>
            </div>
        </div>
    </body>
</html>