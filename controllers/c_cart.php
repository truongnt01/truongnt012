<?php
session_start();
class c_cart
{
    public function index()
    {
        include("models/m_hang_hoa.php");
        $m_hang_hoa = new m_hang_hoa();
        // tạo một đối tượng từ class m_hh 
        $hang_hoas = $m_hang_hoa->doc_hang_hoa();
        if (isset($_GET['deleteid'])) {
            $id = $_GET['deleteid'];
            $total =0;

            unset($_SESSION['cart'][$id]);
            // header("location: ?act=cart");
        }
        $view = "views/cart/v_cart.php";
        include("templates/layout.php");
    }
}
