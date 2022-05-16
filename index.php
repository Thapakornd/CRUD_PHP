<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD test system</title>
</head>
<body>
    <table>
        <thead>
            <th>#</th>
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
                    <td><?php echo $row['user_id']?></td>
                    <td><?php echo $row['user_email']?></td>
                    <td><?php echo $row['user_pass']?></td>
                    <td><?php echo $row['date']?></td>
                </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
</body>
</html>