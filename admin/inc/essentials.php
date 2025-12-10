<?php

//frontend purpose data

define('SITE_URL', 'http://127.0.0.1/inntrack/');
define('ABOUT_IMG_PATH', SITE_URL . 'images/about/');
define('CAROUSEL_IMG_PATH', SITE_URL . 'images/carousel/');

//backend upload process needs this data

define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/InnTrack/images/');
define('ABOUT_FOLDER', 'about/');
define('CAROUSEL_FOLDER', 'carousel/');

function adminLogin()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] === true)) {
        echo "<script>window.location.href='index.php';</script>";
        exit;
    }
}


function redirect($url)
{
    echo "<script>
            window.location.href='$url';
        </script>";
    exit;
}

// function alert($type, $msg){
//     if(session_status() === PHP_SESSION_NONE){
//         session_start();
//     }
//     $_SESSION['alert'] = [
//         'type' => $type,
//         'msg' => $msg
//     ];
// }

// function showAlert(){
//     if(session_status() === PHP_SESSION_NONE){
//         session_start();
//     }

//     if(isset($_SESSION['alert'])){
//         $alert = $_SESSION['alert'];
//         $type = $alert['type'];
//         $msg = $alert['msg'];

//         // Custom styling to match your design
//         $bg_color = ($type == "success") ? "#d4edda" : "#f8d7da";
//         $text_color = ($type == "success") ? "#155724" : "#721c24";
//         $border_color = ($type == "success") ? "#c3e6cb" : "#f5c6cb";

//         echo <<<alert
//             <div class="position-fixed top-0 end-0 p-3" style="z-index: 9999;">
//                 <div class="alert alert-dismissible fade show" role="alert" 
//                      style="background-color: $bg_color; color: $text_color; border: 1px solid $border_color; border-radius: 0.25rem; min-width: 300px;">
//                     <strong>$msg</strong>
//                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//                 </div>
//             </div>
//             <script>
//                 setTimeout(function() {
//                     var alertElement = document.querySelector('.alert');
//                     if(alertElement) {
//                         var bsAlert = new bootstrap.Alert(alertElement);
//                         bsAlert.close();
//                     }
//                 }, 4000);
//             </script>
//         alert;

//         unset($_SESSION['alert']);
//     }
// }

function alert($type, $msg)
{
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

    echo <<<alert
    <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
        <strong class="me-3">$msg</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    alert;
}

function uploadImage($image, $folder)
{
    $valid_mime = ['image/jpeg', 'image/png', 'image/webph'];
    $img_mime = $image['type'];

    if (!in_array($img_mime, $valid_mime)) {
        return 'inv_img'; //invalid image mime or format
    } else if (($image['size'] / (1024 * 1024)) > 2) {
        return 'inv_size'; //invalid size greater than 2mb
    } else {
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $rname = 'IMG_' . random_int(11111, 99999) . ".$ext";

        $img_path = UPLOAD_IMAGE_PATH . $folder . $rname;
        if (move_uploaded_file($image['tmp_name'], $img_path)) {
            return $rname;
        } else {
            return 'upd_failed';
        }
    }
}

function deleteImage($image, $folder)
{
    if (unlink(UPLOAD_IMAGE_PATH . $folder . $image)) {
        return true;
    } else {
        return false;
    }
}
