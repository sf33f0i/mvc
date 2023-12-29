<?
class Model 
{
    public function get_data()
    {
        
    }
    public function connect_db($host = 'localhost', $login = 'root', $password = '', $dbname = 'Praktika'){
        $mysqli = new mysqli($host, $login, $password, $dbname);
        if($mysqli->connect_errno){
            return false;
        }
        return $mysqli;
    }
}
?>