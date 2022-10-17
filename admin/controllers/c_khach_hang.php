<?php 
     include ("models/m_khach_hang.php");
class c_khach_hang{
    public function index(){
   
        $m_khach_hang = new m_khach_hang();
        $m_khach_hangs = $m_khach_hang->doc_khach_hang();
     

        // mảng dữ liệu hàng hóa 
        // goij ddgd views vaof đây 
        $view = "views/show_kh/v_khach_hang.php";
        include ("templates/layout.php");
    }
    public function xoa_kh()
    {
        $id_kh = $_GET['id_kh'];
        $m_khach_hang = new m_khach_hang();
        $xoa_kh = $m_khach_hang->xoa_kh();
        $msg = "xóa kh thành công ";
        header("location:showkh.php?msg=$msg ");
        exit;
    }

} 
 

?>