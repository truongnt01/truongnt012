<?php 
require_once ("database.php");
class m_binh_luan extends database{
     public function doc_binh_luan(){  
      $sql =  "SELECT *FROM binh_luan ";
        $this ->setQuery($sql);
        // lấy dữ liệu nhiều dùng 
        return $this -> loadAllRows();
     }
}
 