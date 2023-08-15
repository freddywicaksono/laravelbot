
<?php
include_once("database.php");
include_once("functions.php");

$tbname=$_GET['table'];
$classname=ucfirst($tbname);
?>

<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/style.css">
<title>Generate PHP Class</title>
<body>
<div class="content">
    <div class="container">
        <h2 class="mb-5">LaravelBot v1.0
            <small class="d-block kecil">Generate CRUD Application Using Laravel-MySQL</small></h2>
        <div class="table-responsive custom-table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th scope="col">Table Name</th>
                        <th scope="col">Generate View</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i=1;
                    $pk = getPrimaryKey($conn,$tbname);
                    $unik = getUnique($conn,$tbname);
                ?>
                    <tr scope="row">
                        <td><div class="sedang"><?php echo $tbname; ?></div>
                        <small class="d-block">Primary Key => <?php echo $pk; ?></small>
                        <small class="d-block">Unique  Key => <?php echo $unik; ?></small></td>
                        <td>
                            <a href="http://localhost/laravelbot/gen_view_index.php?table=<?php echo $tbname; ?>" target="_blank">View Index</a> | 
                            <a href="http://localhost/laravelbot/gen_view_create.php?table=<?php echo $tbname; ?>" target="_blank">View Create</a> |
                            <a href="http://localhost/laravelbot/gen_view_edit.php?table=<?php echo $tbname; ?>" target="_blank">View Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h2 class="mb-5">
            <small class="d-block kecil">Copyrights@2023, Created by : Freddy Wicaksono, M.Kom</small></h2>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
<?
$conn->close();
?>