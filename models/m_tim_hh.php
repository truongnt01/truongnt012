<?php
require_once('database.php');
class m_tim_hh extends database {
  public function load_hh(){
    if(isset($_POST['search'])){
      $data = $_POST['data'];
      $sql = "select * from hang_hoa WHERE ten_hh LIKE N'%$data%'";
      $this->setQuery($sql);
      return $this->loadAllRows();
    }
  }
}
?>