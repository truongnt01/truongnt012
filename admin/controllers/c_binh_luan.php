<?php 
class c_binh_luan{
    public function index(){
        include ("models/m_binh_luan.php");
        $m_binh_luan = new m_binh_luan();
        $m_binh_luans = $m_binh_luan->doc_binh_luan();
     

        // mảng dữ liệu hàng hóa 
        // goij ddgd views vaof đây 
        $view = "views/show_bl/v_binh_luan.php";
        include ("templates/layout.php");
    }


} 
 

?>