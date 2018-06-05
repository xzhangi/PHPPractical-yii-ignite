<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter | Update Student Details into MySQL Database</title>
    
    <!--link the bootstrap css file-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"
    rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <style type="text/css">
        .colbox {
        margin-left: 0px;
        margin-right: 0px;
        }
    </style>

    <script type="text/javascript">
        //load datepicker control onfocus
        $(function() {
        $("#registeredDate").datepicker();
        });
    </script>
    </head>

    <body>
    <?php include "nav.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 well">
                <legend>Update Student Record</legend>
                <?php
                    $attributes = array("class" => "form-horizontal", "id" => "studentform", "name" =>
                    "studentform");
                    echo form_open("updateStudent/index/" . $studno, $attributes);
                ?>
                <fieldset>

                <div class="form-group">
                    <div class="row colbox">

                        <div class="col-md-4">
                            <label for="studentno" class="control-label">Student Number</label>
                        </div>
                    <div class="col-md-8">
                        <input id="studentno" name="studentno" placeholder="studentno" type="text"
                        disabled="disabled" class="form-control" value="<?php echo $studrecord[0]->student_no; ?>" />
                        <span class="text-danger"><?php echo form_error('studentno'); ?></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row colbox">
                    <div class="col-md-4">
                        <label for="studentname" class="control-label">Student Name</label>
                    </div>
                    <div class="col-md-8">
                        <input id="studentname" name="studentname" placeholder="studentname"
                        type="text" class="form-control" value="<?php echo set_value('studentname',
                        $studrecord[0]->student_name); ?>" />
                        <span class="text-danger"><?php echo form_error('studentname'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-md-4">
                        <label for="school" class="control-label">School</label>
                    </div>
                    <div class="col-md-8">
                        <?php
                        $attributes = 'class = "form-control" id = "school"';
                        echo form_dropdown('school',$school,set_value('school', $studrecord[0]->school_id),
                        $attributes);?>
                        <span class="text-danger"><?php echo form_error('school'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row colbox">
                    <div class="col-md-4">
                        <label for="registeredDate" class="control-label">Registered Date</label>
                    </div>
                    <div class="col-md-8">
                        <input id="registeredDate" name="registeredDate" placeholder="registeredDate"
                        type="text" class="form-control" value="<?php echo set_value('registeredDate',
                        @date('d-m-Y', @strtotime($studrecord[0]->registered_date))); ?>" />
                        <span class="text-danger"><?php echo form_error('registeredDate'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-md-8 text-left">
                    <input id="btn_update" name="btn_update" type="submit" class="btn btn-primary"
                    value="Update" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger"
                    value="Cancel" />
                </div>
            </div>
            </fieldset>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
            </div>
        </div>
    </div>
    </body>
</html>