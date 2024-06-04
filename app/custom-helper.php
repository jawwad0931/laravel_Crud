
<?php 
//  function changeDateFormate($date, $date_format) {
//     return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
// }

// function productImagePath($image_name) {
//     return public_path('/storage/app/public/images/'. $image_name);
// }

function showMessage($message) {
    return '<div class="alert alert-success">' . $message . '</div>';
}

// function add($num1,$num2) {
//     return $num1 + $num2;
// }
?>