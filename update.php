<?php 
    include_once('function.php');

    $update_data = new DB_con;

    $id = $_GET['id'];

    if(isset($_POST['update'])){

        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $user_pass = $_POST['user_pass'];

        $sql1 = $update_data->update($username,$user_email,$user_pass);

        if($sql1)
        {
            echo "<script> alert('Update successfully!'); </script>";
            echo "<script> window.location.href='index.php' </script>";
        }else
        {
            echo "<script> alert('Something went wrong pls try again!') </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Update Page</h1>
        <hr>
        <?php
            
            include_once('function.php');

            $update_user = new DB_con;
            $sql = $update_user->fetch_one($id);
            while($row = mysqli_fetch_array($sql)){
        
        ?>
        <form method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
            </div>
            <div class="mb-3">
                <label for="user_email" class="form-label">Email</label>
                <input type="email" class="form-control" name="user_email" value="<?php echo $row['user_email']; ?>">
            </div>
            <div class="mb-3">
                <label for="user_pass">Password</label>
                <input type="text" class="form-control" name="user_pass" value="<?php echo $row['user_pass']; ?>">
            </div>
    
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>

        <?php } ?>
    </div>
</body>
</html>