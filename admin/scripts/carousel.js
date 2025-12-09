let carousel_s_form = document.getElementById("carousel_s_form")
let carousel_picture_inp = document.getElementById("carousel_picture_inp");

function alert(type, msg) {
  let alertContainer = document.getElementById("alert-container");
  let bgColor = type === "success" ? "#d4edda" : "#f8d7da";
  let textColor = type === "success" ? "#155724" : "#721c24";
  let borderColor = type === "success" ? "#c3e6cb" : "#f5c6cb";

  let alertDiv = document.createElement("div");
  alertDiv.className = "alert alert-dismissible fade show";
  alertDiv.style.cssText = `background-color: ${bgColor}; color: ${textColor}; border: 1px solid ${borderColor}; border-radius: 0.25rem; min-width: 300px;`;
  alertDiv.innerHTML = `
                <strong>${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            `;

  alertContainer.innerHTML = "";
  alertContainer.appendChild(alertDiv);

  setTimeout(function () {
    let bsAlert = new bootstrap.Alert(alertDiv);
    bsAlert.close();
  }, 4000);
}


carousel_s_form.addEventListener("submit", function (e) {
  e.preventDefault();
  add_image();
});

function add_image() {
  let data = new FormData();
  data.append("picture", carousel_picture_inp.files[0]);
  data.append("add_image", "");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/carousel_crud.php", true);

  xhr.onload = function () {
    let modalElement = document.getElementById("carousel-s");
    let modal = bootstrap.Modal.getInstance(modalElement);
    modal.hide();

    if (this.responseText == "inv_img") {
      alert("error", "Only JPG and PNG images are allowed!");
    } else if (this.responseText == "inv_size") {
      alert("error", "Image should be less than 2MB!");
    } else if (this.responseText == "upd_failed") {
      alert("error", "Image upload failed!");
    } else if (this.responseText == 1) {
      alert("success", "New image added!");
      carousel_picture_inp.value = "";
      get_carousel();
    } else {
      alert("error", "Server error!");
    }
  };

  xhr.send(data);
}

function get_carousel() {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/carousel_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    document.getElementById("carousel-data").innerHTML = this.responseText;
  };
  xhr.send("get_carousel=1");
}

function rem_image(val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/carousel_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (this.responseText == 1) {
      alert("success", "Image removed!");
      get_carousel();
    } else {
      alert("error", "Server down!");
    }
  };

  xhr.send("rem_image=" + val);
}

window.onload = function () {
  get_carousel();
};
