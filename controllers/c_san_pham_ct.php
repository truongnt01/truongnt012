<?php 
class c_san_pham_ct{
    public function index(){
        include ("models/m_san_pham_ct.php");
        $m_san_pham_ct = new m_san_pham_ct();
        $san_pham_cts = $m_san_pham_ct->doc_san_pham_ct();
        include ("models/m_binh_luan.php");
        $m_binh_luan = new m_binh_luan();
        $binh_luans = $m_binh_luan->doc_binh_luan();

        // mảng dữ liệu hàng hóa 
        // goij ddgd views vaof đây 
        $view = "views/san_pham_ct/v_san_pham_ct.php";
        include ("templates/layout.php");
    }


} 
 

?>