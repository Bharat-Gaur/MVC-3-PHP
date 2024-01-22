<?php
class homeModel{
    private $con;
    
    function __construct() {
        try {
            $this->con = new PDO("mysql:host=localhost;dbname=sms", "root", "");
        } catch (PDOException $e) {
            echo $e->getMessage();
            // Handle connection error appropriately
        }
    
        if (!is_object($this->con) || !($this->con instanceof PDO)) {
            // Handle invalid $con variable
        }
    }


function home(){
    if (!$this->con->connect_error) {
        // Connection successful, proceed with database operations
        $stmt = $this->con->prepare('SELECT * FROM student');
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print_r($data);
        die();
    } else {
        die('Connection failed: ' . $this->con->connect_error);
    }
}
function about(){
    $arr =array('title'=>'About','data'=>'About Data');
    return $arr;
}
function contect(){
    $arr =array('title'=>'Contect','data'=>'Contect Data');
    return $arr;
}
}


?>