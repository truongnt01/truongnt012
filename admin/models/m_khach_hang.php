<?php 
require_once ("database.php");
class m_khach_hang extends database{
     public function doc_khach_hang(){  
      $sql =  "SELECT *FROM khach_hang ";
        $this ->setQuery($sql);
        // lấy dữ liệu nhiều dùng 
        return $this -> loadAllRows();
     }
     public function xoa_kh()
     {
       $id_kh = $_GET['id_kh'];
       $sql = "DELETE FROM khach_hang where id_kh=$id_kh";
   
       $this->setQuery($sql);
       // lấy dữ liệu nhiều dùng 
   
       return $this->execute();
     }
}    
 