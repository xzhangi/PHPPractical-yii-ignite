<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter Delete Database Demo</title>

    <!--link the bootstrap css file-->
    <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>"
    rel="stylesheet" type="text/css" />
</head>
<body>
    <?php include "nav.php";?>

    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="bg-primary">
                            <th>#</th>
                            <th>Student No</th>
                            <th>Student Name</th>
                            <th>School</th>
                            <th>Registered Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($student_list); $i++) { ?>
                        <tr>
                        <td><?php echo ($i+1); ?></td>
                        <td><?php echo $student_list[$i]->student_no; ?></td>
                        <td><?php echo $student_list[$i]->student_name; ?></td>
                        <td><?php echo $student_list[$i]->school_name; ?></td>
                        <td><?php echo $student_list[$i]->registered_date; ?></td>
                        <td><a href="<?php echo base_url() . "index.php/updateStudent/index/" .
                        $student_list[$i]->student_no; ?>">Edit</a></td>
                        <td><a href="<?php echo base_url() . "index.php/viewStudent/delete_student/" .
                        $student_list[$i]->student_id; ?>">Delete</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>