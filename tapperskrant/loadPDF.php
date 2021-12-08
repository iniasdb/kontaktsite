<?php
include($base."includes/database/connect.php");
$sql = "SELECT * FROM `tapperskrant` ORDER BY tapperskrantDatum DESC LIMIT 1";


if (isset($_GET['edition'])) {
    $monthCode = $month = $year = $code = "";
    $code = $_GET['edition'];

    if (is_numeric($code) && strlen($code)) {
        getMonthYear($code);
        $year = "20".substr($code, 2);
    } else {
        $error = "foute code";
    }

} else {
    $error = "foute code";
}

if (!empty($error)) {


    $qresult = $con->query($sql);

    if ($qresult->num_rows > 0) {
        $endresult = $qresult->fetch_assoc();
        $code = $endresult['tapperskrantCode']; 
    }

    //TODO: get latest edition from database if no valid code/no code specified
    //$code = 1020;
    $month = getMonthYear($code);
    $year = "20".substr($code, 2);
}

function getMonthYear($code) {

    $monthCode = substr($code, 0, 2);

    switch ($monthCode) {
        case '01':
            $month = "Januari";
            break;
        case '02':
            $month = "Februari";
            break;
        case '03':
            $month = "Maart";
            break;
        case '04':
            $month = "April";
            break;
        case '05':
            $month = "Mei";
            break;
        case '06':
            $month = "Juni";
            break;
        case '07':
            $month = "Juli";
            break;
        case '08':
            $month = "Augustus";
            break;
        case '09':
            $month = "September";
            break;
        case '10':
            $month = "Oktober";
            break;
        case '11':
            $month = "November";
            break;
        case '12':
            $month = "December";
            break;
        default:
            $error = "foute code";
            break;
    }

    return $month;
}

?>