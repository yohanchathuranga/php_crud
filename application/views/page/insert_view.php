<html>
    <head>
        <title>Insert Data Into Database Using Form</title>
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assert/css/style.css" />
    </head>
    <body>

        <div id="container">
            <?php echo form_open('insert_ctrl'); ?>
                <h1>UD Tours</h1>
                <h3>Booking Form</h3><hr/>

            <?php if (isset($message)) { ?>
            <CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
            <?php } ?>
            <?php echo form_label('Date :'); ?> <?php echo form_error('date'); ?><br />
            <?php echo form_input(array('id' => 'date', 'name' => 'date','type'=>'date','placeholder' => '06/16/2019')); ?><br />

            <?php echo form_label('Pickup Time :'); ?> <?php echo form_error('pickup_time'); ?><br />
            <?php echo form_input(array('id' => 'pickup_time', 'name' => 'pickup_time','type'=>'time','placeholder' => '00:00:00')); ?><br />

            <?php echo form_label('No of Days :'); ?> <?php echo form_error('day_count'); ?><br />
            <?php echo form_input(array('id' => 'day_count', 'name' => 'day_count','placeholder' => 'No of Days')); ?><br />

            <?php echo form_label('Pickup point :'); ?> <?php echo form_error('pickup_point'); ?><br />
            <?php echo form_input(array('id' => 'pickup_point', 'name' => 'pickup_point','placeholder' => 'Pickup Place')); ?><br />

            <?php echo form_label('Destination :'); ?> <?php echo form_error('destination'); ?><br />
            <?php echo form_input(array('id' => 'destination', 'name' => 'destination', 'placeholder' => 'Destination')); ?><br />

            <?php echo form_label('Estimated Distance :'); ?> <?php echo form_error('est_distance'); ?><br />
            <?php echo form_input(array('id' => 'est_distance', 'name' => 'est_distance','placeholder' => 'Estimated Distance')); ?><br />

            <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
            <?php echo form_close(); ?><br/>

            <div id="fugo">
            </div>
        </div>
    </body>
</html>