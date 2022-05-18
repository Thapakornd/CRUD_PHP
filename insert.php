<?php 

    include_once('function.php');

    $insertdata = new DB_con();

    if(isset($_POST['Insert'])){
        
        $user_id = $_POST['user_id'];
        $user_email = $_POST['user_email'];
        $user_pass = $_POST['user_pass'];
        $user_con = $_POST['user_con'];

        if($user_pass == $user_con)
        {
            $sql = $insertdata->insert($user_id,$user_email,$user_pass);

            if($sql)
            {
                echo "<script> alert('Record inserted successsfully!!') </script>";
                echo "<script> window.location.href='index.php'; </script>";
            }else
            {
                echo "<script> alert('Something went wrong!') </script>";
            }
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Go back</a>
        <h1 class="mt-5">Insert Page</h1>
        <hr>
        <form method="POST">
            <div class="mb-3">
                <label for="user_id" class="form-label">Username</label>
                <input type="text" class="form-control" name="user_id" require>
            </div>
            <div class="mb-3">
                <label for="user_email" class="form-label">Email</label>
                <input type="email" class="form-control" name="user_email" require>
            </div>
            <div class="mb-3">
                <label for="user_pass">Password</label>
                <input type="password" class="form-control" name="user_pass" require>
            </div>
            <div class="mb-3">
                <label for="user_con">Confirm Password</label>
                <input type="password" class="form-control" name="user_con" require>
            </div>
            <button type="submit" name="Insert" class="btn btn-success">Insert</button>
        </form>
    </div>
</body>
</html>