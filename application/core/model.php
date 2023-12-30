<?
class Model 
{
    public function __construct(){
        $this->db = self::connect_db();
    }
    
    public function get_data()
    {

    }
    public static function connect_db($host = 'localhost', $login = 'root', $password = '', $dbname = 'Praktika'){
        $mysqli = new mysqli($host, $login, $password, $dbname);
        if($mysqli->connect_errno){
            return false;
        }
        return $mysqli;
    }
    public function sql($sql){
        $db = $this->db;
        $result = $db->query($sql);
        return $result; 
    }
}
?>