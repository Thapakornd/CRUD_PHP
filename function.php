<?php 

    define('DB_server','localhost');
    define('DB_user','root');
    define('DB_pass','');
    define('DB_name','user_db');

    class DB_con{
        function __construct()
        {
            $conn = mysqli_connect(DB_server ,DB_user ,DB_pass ,DB_name);
            $this->dbcon = $conn;

            if(mysqli_connect_errno()){
                echo "Failed to connect : ". mysqli_connect_error();
            }
        }

        public function insert($username,$user_email,$user_pass){

            $query = mysqli_query($this->dbcon, "SELECT * FROM users");
            $user_data = mysqli_fetch_assoc($query);

            if($user_data['username'] != $username && $user_data['user_email'] != $user_email)
            {
                $result = mysqli_query($this->dbcon, "INSERT INTO users(username,user_email,user_pass) VALUES ('$username','$user_email','$user_pass')");
                return $result;
            }
        
        }

        public function fetchdata(){
            $result = mysqli_query($this->dbcon,"SELECT * FROM users");
            return $result;
        }

        public function fetch_one($id)
        {
            $result = mysqli_query($this->dbcon, "SELECT * FROM users WHERE id = '$id'");
            return $result;
        }

        public function update($username,$user_email,$user_pass)
        {
            $result = mysqli_query($this->dbcon, "UPDATE users SET 
            username = '$username',
            user_email = '$user_email',
            user_pass = '$user_pass'
            WHERE username = '$username'");
            
            return $result;
        }

        public function delete($username)
        {
            $deleterec = mysqli_query($this->dbcon, "DELETE FROM users WHERE username = '$username'");
            return $deleterec;
        }

    }


?>