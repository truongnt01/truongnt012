<?php 
require_once ("database.php");

class m_san_pham_ct extends database{
   
     public function doc_san_pham_ct(){
        $id_hh =$_GET['id_hh'];
        $sql = "select * FROM hang_hoa  WHERE id_hh = $id_hh  "; 
        $this ->setQuery($sql);
        // lấy dữ liệu nhiều dùng 
        return $this -> loadAllRows();
     }
   
}
 