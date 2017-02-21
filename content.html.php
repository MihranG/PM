
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <title> <?php echo $_SESSION['username'];?>.'s User Page</title>
</head>
<body>

<?php /*  echo print_r($tasks); */?>


            <table class="table table-striped">
                <tr>
                    <th>id</th>
                    <th>task</th>
                    <?php if($_SESSION['user_type']==0):?>
                        <th>author</th>
                    <?php endif;?>
                </tr>
                <?php foreach ($tasks as $key =>$val):?>
                <tr>
                    <td><?php echo $val['id']?></td>
                    <td><?php echo $val['task']?></td>
                    <?php if($_SESSION['user_type']==0):?>
                        <td><?php echo $val['username']?></td>
                    <?php endif;?>
                </tr>

                <?php endforeach;?>
            </table>
        <a href="index.php">Back</a>



</body>
</html>