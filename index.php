<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/common.css">

  <title>InnTrack</title>

  <style>
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }

      .crt {
        font-size: 0.75rem;
      }
    }
  </style>
</head>

<body class="bg-light">
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">InnTrack</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <div class="d-flex" role="search">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn custom-bg text-white shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title" d-flex align-items-center>
              <i class="bi bi-person-circle" fs-3 me-2></i> User Login
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shado-none">
            </div>
            <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shado-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none">Login</button>
              <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Register Modal -->
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title" d-flex align-items-center>
              <i class="bi bi-person-lines-fill fs-3 me-2"></i>
              User Registration
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
              Note: Your details must match with your valid ID that will be required during check-in.
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
              </div>
            </div>
            <div class="text-center my-1">
              <button type="submit" class="btn btn-dark shadow-none">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Carousel -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container rounded overflow-hidden">
      <div class="swiper-wrapper">
        <div class="swiper-slide rounded">
          <img src="images/carousel/hotel-bldg.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide rounded">
          <img src="images/carousel/lobby.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide rounded">
          <img src="images/carousel/pool.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide rounded">
          <img src="images/carousel/pool2.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide rounded">
          <img src="images/carousel/pool3.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide rounded">
          <img src="images/carousel/top-pool.png" class="w-100 d-block" />
        </div>
      </div>
    </div>
  </div>

  <!-- Check Availability Form -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded-4">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Adult </label>
              <select class="form-select shadow-none  ">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">Children </label>
              <select class="form-select shadow-none  ">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadown-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Our Rooms -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

  <div class="container">
    <div class="row">
      <!-- card 1 -->
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card rounded-4 overflow-hidden" style="max-width: 350px; margin: auto; border: 2px solid #2ec1ab42;">
          <img src="images/rooms/1.jpg" class="card-img-top" alt="...">

          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">Php2570 per night</h6>

            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                3 sofa
              </span>
            </div>

            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                Room heater
              </span>
            </div>
            <div class="rating mb-4 ">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>

        </div>
      </div>

      <!-- card 2 -->
      <div class="col-lg-4 col-md-6 my-3 ">

        <div class="card rounded-4 overflow-hidden" style="max-width: 350px; margin: auto; border: 2px solid #2ec1ab42;">
          <img src="images/rooms/2.png" class="card-img-top" alt="...">

          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">Php4490 per night</h6>

            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                3 sofa
              </span>
            </div>

            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                Room heater
              </span>
            </div>
            <div class="rating mb-4 ">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>

        </div>

      </div>

      <!-- card 3-->
      <div class="col-lg-4 col-md-6 my-3 ">

        <div class="card rounded-4 overflow-hidden" style="max-width: 350px; margin: auto; border: 2px solid #2ec1ab42;">
          <img src="images/rooms/3.png" class="card-img-top" alt="...">

          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">Php6990 per night</h6>

            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                3 sofa
              </span>
            </div>

            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                Room heater
              </span>
            </div>
            <div class="rating mb-4 ">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>

        </div>

      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="" class="btn btn-sm btn-outline-dark rounded  fw-bold shadow-none">More Rooms ></a>
      </div>
    </div>
  </div>

  <!-- Our Facilities -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-whtie rounded-4 py-4 my-3" style="border: 2px solid #2ec1ab42;">
        <img src="images/features/wifi.svg" width="80px" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-whtie rounded-4 py-4 my-3" style="border: 2px solid #2ec1ab42;">
        <img src="images/features/wifi.svg" width="80px" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-whtie rounded-4 py-4 my-3" style="border: 2px solid #2ec1ab42;">
        <img src="images/features/wifi.svg" width="80px" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-whtie rounded-4 py-4 my-3" style="border: 2px solid #2ec1ab42;">
        <img src="images/features/wifi.svg" width="80px" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-whtie rounded-4 py-4 my-3" style="border: 2px solid #2ec1ab42;">
        <img src="images/features/wifi.svg" width="80px" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="" class="btn btn-sm btn-outline-dark rounded  fw-bold shadow-none">
          More Facilities >
        </a>
      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4 rounded-4 overflow-hidden">
          <div class="profile d-flex align-items-center mb-3 ">
            <img src="images/features/star.svg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Earum eos ullam molestiae quaerat nesciunt dignissimos, debitis,
            nam aliquid voluptatem velit molestias incidunt libero eum quos
            quam optio voluptatum, quis accusantium.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4 rounded-4 overflow-hidden">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/features/star.svg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Earum eos ullam molestiae quaerat nesciunt dignissimos, debitis,
            nam aliquid voluptatem velit molestias incidunt libero eum quos
            quam optio voluptatum, quis accusantium.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4 rounded-4 overflow-hidden">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/features/star.svg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Earum eos ullam molestiae quaerat nesciunt dignissimos, debitis,
            nam aliquid voluptatem velit molestias incidunt libero eum quos
            quam optio voluptatum, quis accusantium.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4 rounded-4 overflow-hidden">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/features/star.svg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Earum eos ullam molestiae quaerat nesciunt dignissimos, debitis,
            nam aliquid voluptatem velit molestias incidunt libero eum quos
            quam optio voluptatum, quis accusantium.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>


  <!-- Reach Us -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded-4">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.5592376914806!2d123.89408907583505!3d10.297052967851192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99bfd54c152e5%3A0xf9b2f3f4bd996da0!2sUniversity%20of%20Cebu%20-%20Main%20Campus!5e0!3m2!1sen!2sph!4v1763606801558!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">

        <!-- Call us -->
        <div class="bg-white p-4 rounded-4 mb-4">
          <h5>Call us</h5>
          <a href="tel: +63922335842" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>
            +63922335842
          </a>
          <br>
          <a href="tel: +63922335842" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>
            +63922335842
          </a>
        </div>

        <!-- Follow  us -->
        <div class="bg-white p-4 rounded-4 mb-0">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge text-dark fs-6 p-2" style="background-color: #2ec1ab42;">
              <i class="bi bi-facebook me-1"></i>
              Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge text-dark fs-6 p-2" style="background-color: #2ec1ab42;">
              <i class="bi bi-instagram me-1"></i>
              Instagram
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block">
            <span class="badge text-dark fs-6 p-2" style="background-color: #2ec1ab42;">
              <i class="bi bi-tiktok me-1"></i>
              TikTok
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb-2">InnTrack</h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur molestias laudantium aut distinctio provident similique quisquam ad sit voluptates, libero, error ex corporis, id sequi expedita dignissimos maxime quasi rem?
        </p>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Links</h5>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a> <br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Follow us</h5>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-facebook me-1"></i>
          Facebook
        </a> <br>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-instagram me-1"></i>
          Instagram
        </a> <br>
        <a href="#" class="d-inline-block text-dark text-decoration-none">
          <i class="bi bi-tiktok me-1"></i>
          TikTok
        </a> <br>
      </div>
    </div>
  </div>

  <div class="text-center bg-dark text-white crt fs-md-6 fs-lg-6 p-3 m-0">Developed by Group 1</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <!-- Hero images -->
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "parallax",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false
      }
    });
  </script>

  <!-- Testimonials JS -->
  <script>
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>

</html>