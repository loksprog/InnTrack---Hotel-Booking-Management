<?php
    require_once('sections/essentials.php');
    require('sections/links.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
</head>
<body class="bg-light">

    <?php showAlert(); ?>

    <?php require('sections/header.php');?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3> 

                <!-- Alert Container -->
                <div id="alert-container" style="position: fixed; top: 80px; right: 25px; z-index: 1050; min-width: 350px;"></div>

                <!-- General Settings Section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>   
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-- General Settings Modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_settings_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">About us</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="resetModal()" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Shutdown Section -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <input onchange="upd_shutdown(this.checked)" class="form-check-input" type="checkbox" role="switch" id="shutdown-toggle">
                            </div>
                        </div>   
                        <p class="card-text">
                            No customers will be allowed to book hotel room, when shutdown mode is turned on.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <?php require('sections/scripts.php'); ?> 

    <script>
        let general_data;
        let generalModal;

        // Initialize modal instance when page loads
        document.addEventListener('DOMContentLoaded', function() {
            const modalElement = document.getElementById('general-s');
            generalModal = new bootstrap.Modal(modalElement);
        });

        function get_general() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');
            let site_title_inp = document.getElementById('site_title_inp'); 
            let site_about_inp = document.getElementById('site_about_inp');
            let shutdown_toggle = document.getElementById('shutdown-toggle');
            
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            xhr.onload = function() {
                general_data = JSON.parse(this.responseText);

                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;

                if(general_data.shutdown == 0) {
                    shutdown_toggle.checked = false;
                } else {
                    shutdown_toggle.checked = true;
                }
            }
            xhr.send('get_general=1');
        }

        function resetModal() {
            document.getElementById('site_title_inp').value = general_data.site_title;
            document.getElementById('site_about_inp').value = general_data.site_about;
        }

        // Handle form submission
        document.getElementById('general_settings_form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            let site_title_val = document.getElementById('site_title_inp').value;
            let site_about_val = document.getElementById('site_about_inp').value;
            
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                if(this.responseText == 1) {
                    alert('success', 'Changes saved!');
                    get_general();
                    generalModal.hide();
                } else {
                    alert('error', 'No changes made!');
                }
            };

            xhr.send(
                'site_title=' + encodeURIComponent(site_title_val) +
                '&site_about=' + encodeURIComponent(site_about_val) +
                '&upd_general=1'
            );
        });

        function upd_shutdown(isChecked) {
            let val = isChecked ? 1 : 0;
            
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                if(this.responseText == 1) {
                    if(val == 1) {
                        alert('success', 'Site has been shutdown!');
                    } else {
                        alert('success', 'Shutdown mode off!');
                    }
                    get_general();
                } else {
                    alert('error', 'Failed to update shutdown status!');
                    // Revert toggle if update failed
                    document.getElementById('shutdown-toggle').checked = !isChecked;
                }
            };

            xhr.send('upd_shutdown=' + val);
        }

        window.onload = function() {
            get_general();
        }
    </script>

</body>
</html>