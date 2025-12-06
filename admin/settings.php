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
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">About us</label>
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
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" role="switch" id="shutdown-toggle">
                            </div>
                        </div>   
                        <p class="card-text">
                            No customers will be allowed to book hotel room, when shutdown mode is turned on.
                        </p>
                    </div>
                </div>

                <!-- Contact details section -->
                 <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contact Settings</h5>
                            <button type="button" class="btn btn-shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn1"></span>                
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn2"></span>                
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-facebook me-1"></i>
                                        <span id="fb"></span>                
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-instagram me-1"></i>
                                        <span id="ig"></span>                
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-tiktok me-1"></i>
                                        <span id="tt"></span>                
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>                             
                    </div>
                </div>

                <!-- Contacts Detail Modal -->
                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contact_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contact Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Address</label>
                                                    <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Google Map Link</label>
                                                    <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Phone Numbers (with country code)</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="text" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="text" name="pn2" id="pn2_inp" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Email</label>
                                                    <input type="email" name="email" id="email_inp" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Social Links</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                                        <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                                        <input type="text" name="ig" id="ig_inp" class="form-control shadow-none" required>
                                                    </div>
                                                     <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-tiktok"></i></span>
                                                        <input type="text" name="tt" id="tt_inp" class="form-control shadow-none" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">iFrame Src</label>
                                                    <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                              
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require('sections/scripts.php'); ?> 

    <script>
        let general_data, contacts_data;

        function alert(type, msg) {
            let alertContainer = document.getElementById('alert-container');
            let bgColor = (type === 'success') ? '#d4edda' : '#f8d7da';
            let textColor = (type === 'success') ? '#155724' : '#721c24';
            let borderColor = (type === 'success') ? '#c3e6cb' : '#f5c6cb';
            
            let alertDiv = document.createElement('div');
            alertDiv.className = 'alert alert-dismissible fade show';
            alertDiv.style.cssText = `background-color: ${bgColor}; color: ${textColor}; border: 1px solid ${borderColor}; border-radius: 0.25rem; min-width: 300px;`;
            alertDiv.innerHTML = `
                <strong>${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            `;
            
            alertContainer.innerHTML = '';
            alertContainer.appendChild(alertDiv);
            
            setTimeout(function() {
                let bsAlert = new bootstrap.Alert(alertDiv);
                bsAlert.close();
            }, 4000);
        }

        function get_general() {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            xhr.onload = function() {
                general_data = JSON.parse(this.responseText);

                document.getElementById('site_title').innerText = general_data.site_title;
                document.getElementById('site_about').innerText = general_data.site_about;

                document.getElementById('site_title_inp').value = general_data.site_title;
                document.getElementById('site_about_inp').value = general_data.site_about;

                document.getElementById('shutdown-toggle').checked = (general_data.shutdown == 1);
            }
            xhr.send('get_general=1');
        }

        function resetModal() {
            document.getElementById('site_title_inp').value = general_data.site_title;
            document.getElementById('site_about_inp').value = general_data.site_about;
        }

        document.getElementById('general_s_form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            let site_title_val = document.getElementById('site_title_inp').value;
            let site_about_val = document.getElementById('site_about_inp').value;
            
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                let modalElement = document.getElementById('general-s');
                let modal = bootstrap.Modal.getInstance(modalElement);
                
                if(this.responseText == 1) {
                    alert('success', 'Changes saved!');
                    get_general();
                    modal.hide();
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

        function upd_shutdown(val) {
            let isChecked = document.getElementById('shutdown-toggle').checked;
            let shutdownValue = isChecked ? 1 : 0;
            
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                if(this.responseText == 1) {
                    if(shutdownValue == 1) {
                        alert('success', 'Site has been shutdown!');
                    } else {
                        alert('success', 'Shutdown mode off!');
                    }
                } else {
                    alert('error', 'Failed to update shutdown status!');
                    document.getElementById('shutdown-toggle').checked = !isChecked;
                }
            };

            xhr.send('upd_shutdown=' + shutdownValue);
        }

        function get_contacts() {    
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            xhr.onload = function() {
                contacts_data = JSON.parse(this.responseText);

                document.getElementById('address').innerText = contacts_data.address;
                document.getElementById('gmap').innerText = contacts_data.gmap;
                document.getElementById('pn1').innerText = contacts_data.pn1;
                document.getElementById('pn2').innerText = contacts_data.pn2;
                document.getElementById('email').innerText = contacts_data.email;
                document.getElementById('fb').innerText = contacts_data.fb;
                document.getElementById('ig').innerText = contacts_data.ig;
                document.getElementById('tt').innerText = contacts_data.tt;
                document.getElementById('iframe').src = contacts_data.iframe;

                contacts_inp(contacts_data);
            }
            xhr.send('get_contacts=1');
        }

        function contacts_inp(data) {
            document.getElementById('address_inp').value = data.address;
            document.getElementById('gmap_inp').value = data.gmap;
            document.getElementById('pn1_inp').value = data.pn1;
            document.getElementById('pn2_inp').value = data.pn2;
            document.getElementById('email_inp').value = data.email;
            document.getElementById('fb_inp').value = data.fb;
            document.getElementById('ig_inp').value = data.ig;
            document.getElementById('tt_inp').value = data.tt;
            document.getElementById('iframe_inp').value = data.iframe;
        }

        document.getElementById('contact_s_form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            let formData = 'address=' + encodeURIComponent(document.getElementById('address_inp').value) +
                          '&gmap=' + encodeURIComponent(document.getElementById('gmap_inp').value) +
                          '&pn1=' + encodeURIComponent(document.getElementById('pn1_inp').value) +
                          '&pn2=' + encodeURIComponent(document.getElementById('pn2_inp').value) +
                          '&email=' + encodeURIComponent(document.getElementById('email_inp').value) +
                          '&fb=' + encodeURIComponent(document.getElementById('fb_inp').value) +
                          '&ig=' + encodeURIComponent(document.getElementById('ig_inp').value) +
                          '&tt=' + encodeURIComponent(document.getElementById('tt_inp').value) +
                          '&iframe=' + encodeURIComponent(document.getElementById('iframe_inp').value) +
                          '&upd_contacts=1';

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                let modalElement = document.getElementById('contacts-s');
                let modal = bootstrap.Modal.getInstance(modalElement);
                
                if(this.responseText == 1) {
                    alert('success', 'Changes saved!');
                    get_contacts();
                    modal.hide();
                } else {
                    alert('error', 'No changes made!');
                }
            }
            xhr.send(formData);
        });

        window.onload = function() {
            get_general();
            get_contacts();
        }
    </script>

</body>
</html>