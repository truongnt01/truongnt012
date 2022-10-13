<?php 
class c_loai{
    public function index(){
        include ("models/m_loai.php");
        $m_loai = new m_loai();
        $m_loais = $m_loai->doc_loai();
     

        // mảng dữ liệu hàng hóa 
        // goij ddgd views vaof đây 
        $view = "views/show_loai/v_loai.php";
        include ("templates/layout.php");
    }


} 
 

?>