<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Word;


if (isset($_GET['pages'])){
    if ($_GET['pages']=='home'){
        include 'pages/home.php';
    }

}
elseif ($_POST['btn'])
{
    $word = new Word($_POST);
    $result =  $word->index();
    include 'pages/home.php';


}