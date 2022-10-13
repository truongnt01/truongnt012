<?php 
require_once ("database.php");
class m_show_sp extends database{
     public function doc_show_sp(){  
      $sql =  "SELECT *FROM hang_hoa ";
        $this ->setQuery($sql);
        // lấy dữ liệu nhiều dùng 
        return $this -> loadAllRows();
     }
}
 