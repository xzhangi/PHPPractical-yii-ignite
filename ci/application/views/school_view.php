<html>
    <head>
        <title>School Master</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--link the bootstrap css file-->
        <link rel="stylesheet" href="<?php echo
        base_url("assets/bootstrap/css/bootstrap.css"); ?>">
    </head>

    <body>
        <?php include "nav.php";
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>School Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($schlist); ++$i) { ?>
                            <tr>
                                <td><?php echo ($i+1); ?></td>
                                <td><?php echo $schlist[$i]->school_name; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>