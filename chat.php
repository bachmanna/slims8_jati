<!--===========================FreiChat=======START=========================-->
<!--	For uninstalling ME , first remove/comment all FreiChat related code i.e below code
	 Then remove FreiChat tables frei_session & frei_chat if necessary
         The best/recommended way is using the module for installation                         -->

<?php
$ses = null;

if (isset($_GET['user']) AND trim($_GET['user']) != '') {
  $_SESSION['userid'] = $_GET['user'];
  $ses = $_SESSION['userid'];
  #echo $ses;
} else {
  $ses = false;
  #die ('gabisalanjut');
}

if(!function_exists ("freichatx_get_hash")) {
  function freichatx_get_hash ($ses)
  {
    if(is_file ("/var/www/slims7_cendana_wchat/freichat/hardcode.php")) {
      require "/var/www/slims7_cendana_wchat/freichat/hardcode.php";
      $temp_id =  $ses . $uid;
      return md5($temp_id);
    } else {
      echo "<script>alert('module freichatx says: hardcode.php file not found!');</script>";
    }
    return 0;
  }
}
?>
<script type="text/javascript" language="javascipt" src="http://localhost/slims7_cendana_wchat/freichat/client/main.php?id=<?php echo $ses;?>&xhash=<?php echo freichatx_get_hash($ses); ?>"></script>
<link rel="stylesheet" href="http://localhost/slims7_cendana_wchat/freichat/client/jquery/freichat_themes/freichatcss.php" type="text/css">
<!--===========================FreiChatX=======END=========================-->                