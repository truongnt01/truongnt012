<?php 
class c_show_sp{
    public function index(){
        include ("models/m_show_sp.php");
        $m_show_sp = new m_show_sp();
        $show_sps = $m_show_sp->doc_show_sp();
     

        // mảng dữ liệu hàng hóa 
        // goij ddgd views vaof đây 
        $view = "views/show_sp/v_show_sp.php";
        include ("templates/layout.php");
    }


} 
 

?>