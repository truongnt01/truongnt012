<?php 
require_once ("database.php");
class m_loai extends database{
     public function doc_loai(){  
      $sql =  "SELECT *FROM loai ";
        $this ->setQuery($sql);
        // lấy dữ liệu nhiều dùng 
        return $this -> loadAllRows();
     }
}
 