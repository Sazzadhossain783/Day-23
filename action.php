<?php
require_once 'vendor/autoload.php';
use App\classes\StudentInfo;

if (isset($_GET['pages'])) {
    if ($_GET['pages'] == 'home') {
        include 'pages/home.php';

    }
}
elseif (isset($_POST['btn']))
{
    $studentInfo = new StudentInfo($_POST, $_FILES);
    $studentInfo->index();
    include 'pages/home.php';
}
