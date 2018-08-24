<?php 
define("ROOT", direname(__DIR__));

require ROOT."/app/Autoloader.php";
App\Autoloader::register();

if(isset($_GET['p']))
{
  $p = $_GET['p'];
}else{
  $p = 'home';
}

ob_start();

if($p === 'home'){
  require ROOT.'/pages/posts/home.php';
}

$content = ob_get_clean();
require ROOT.'/pages/tamplate/default.php';
