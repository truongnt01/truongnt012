<?php
// include ("controllers/c_hang_hoa.php");
// $c_hang_hoa = new c_hang_hoa();
// $c_hang_hoa->index();
if (isset($_GET['act'])) {
  $act = $_GET['act'];

  switch ($act) {
    case 'san-pham':
      include("controllers/c_san_pham.php");
      $c_san_pham = new c_san_pham();
      $c_san_pham->index();
      break;

    case 'chi-tiet-sp':
      include("controllers/c_san_pham_ct.php");
      $c_san_pham_ct = new c_san_pham_ct();
      $c_san_pham_ct->index();
      $c_san_pham_ct->add_binh_luan();
      break;
    case 'cart':
      include("controllers/c_cart.php");
    
      $c_cart = new c_cart();
      $c_cart->index();
      break;
      
    case 'search':
      include("controllers/c_tim_hh.php");
      $c_search_hh = new c_tim_hh();
      $c_search_hh->index();
      break;

    case 'category':
      include("controllers/c_hh_danh_muc.php");
      $c_hh_danh_muc = new c_hh_danh_muc();
      $c_hh_danh_muc->hh_danh_muc();
      break;

    default:
      include("controllers/c_hang_hoa.php");
      $c_hang_hoa = new c_hang_hoa();
      $c_hang_hoa->index();
  }
} else {
  include("controllers/c_hang_hoa.php");
  $c_hang_hoa = new c_hang_hoa();
  $c_hang_hoa->index();
}
