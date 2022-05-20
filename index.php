<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD test system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-md">
        <h1 class="mt-5">Information Page</h1>
        <a href="insert.php" class="btn btn-success">Insert Data</a>
        <hr>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>User ID</th>
                <th>User Email</th>
                <th>User Password</th>
                <th>date</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <?php 
                    
                    include_once('function.php');
                    $fetchdata = new DB_con();
                    $sql = $fetchdata->fetchdata();

                    while($row = mysqli_fetch_array($sql)){
                ?>
                
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['username']?></td>
                        <td><?php echo $row['user_email']?></td>
                        <td><?php echo $row['user_pass']?></td>
                        <td><?php echo $row['date']?></td>
                        <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?username=<?php echo $row['username']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>