<? 
class Model_Main extends Model {

    public function get_data(){
       
    } 
    public function get_list(){
      $data = $this->sql("SELECT * FROM crud");
      return $data;
    }

}
?>