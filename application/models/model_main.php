<? 
class Model_Main extends Model {

    public function get_data(){
       
    } 
    public function get_list(){
        $list = connect_db()->query("SELECT * FROM crud");
        return $list;
    }

}
?>