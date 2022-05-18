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

        public function insert($user_id,$user_email,$user_pass){

            $query = mysqli_query($this->dbcon, "SELECT * FROM users WHERE user_id = '$user_id' OR user_email = '$user_email'");
            if(!$query){
                $result = mysqli_query($this->dbcon, "INSERT INTO users(user_id,user_email,user_pass) VALUES ('$user_id','$user_email','$user_pass')");
                return $result;
            }
        }

        public function fetchdata(){
            $result = mysqli_query($this->dbcon,"SELECT * FROM users");
            return $result;
        }
    }


?>