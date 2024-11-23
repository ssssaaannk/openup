<?php



class DB
{

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db ="openup_db";


    function connect()
    {
        $connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        return $connection;
    }

    function read($query)
    {
        $conn = $this->connect();
        $result = mysqli_query($conn,$query);

        if(!$result){
            return false;
        }else
        {
            $data = [];
            while($row = mysqli_fetch_assoc($result))
            {   
                $data[]=$row;
            }
            return $data;
        }
        
    }
    
    function save($query)
    {
        $conn = $this->connect();
        $result = mysqli_query($conn,$query);

        if (!$result) { return false; } else { return true; }
        
    }
}
    

// $DB = new DB();
// $query = "select * from users";
// $data = $DB->read($query);
// echo "<pre>";
// print_r($data);
// echo "</pre>";

