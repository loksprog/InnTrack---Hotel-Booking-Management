<?php

    function adminLogin()
    {
        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }

        if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] === true)){
            echo "<script>window.location.href='index.php';</script>";
            exit;
        }
    }


    function redirect($url){
        echo"<script>
            window.location.href='$url';
        </script>";
        exit;
    }

    function alert($type, $msg){
        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }
        $_SESSION['alert'] = [
            'type' => $type,
            'msg' => $msg
        ];
    }

    function showAlert(){
        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }
        
        if(isset($_SESSION['alert'])){
            $alert = $_SESSION['alert'];
            $type = $alert['type'];
            $msg = $alert['msg'];
            
            // Custom styling to match your design
            $bg_color = ($type == "success") ? "#d4edda" : "#f8d7da";
            $text_color = ($type == "success") ? "#155724" : "#721c24";
            $border_color = ($type == "success") ? "#c3e6cb" : "#f5c6cb";
            
            echo <<<alert
                <div class="position-fixed top-0 end-0 p-3" style="z-index: 9999;">
                    <div class="alert alert-dismissible fade show" role="alert" 
                         style="background-color: $bg_color; color: $text_color; border: 1px solid $border_color; border-radius: 0.25rem; min-width: 300px;">
                        <strong>$msg</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                <script>
                    setTimeout(function() {
                        var alertElement = document.querySelector('.alert');
                        if(alertElement) {
                            var bsAlert = new bootstrap.Alert(alertElement);
                            bsAlert.close();
                        }
                    }, 4000);
                </script>
            alert;
            
            unset($_SESSION['alert']);
        }
    }

?>