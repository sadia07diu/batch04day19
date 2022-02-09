<?php


require_once "vendor/autoload.php";
use App\classes\Word;
//echo "<pre/>";
//print_r($_GET);

if (isset($_GET["pages"]))
{
    if ($_GET["pages"] == "home")
    {
        include "pages/home.php";
    }
    else if ($_GET["pages"] == "series")
    {
        include "pages/series.php";
    }
}
else if(isset($_POST["button"]))
{
    $word = new Word($_POST);
    $result =$word->index();
//    print_r($result);
    extract($result);
    include "pages/home.php";

}
else if(isset($_POST["series"]))
{
    $word = new Word($_POST);
    $result =$word->index();

    extract($result);
    include "pages/home.php";

}

