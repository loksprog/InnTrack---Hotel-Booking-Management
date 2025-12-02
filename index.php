<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('sections/links.php') ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
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

  <?php require('sections/header.php') ?>

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
        <div class="card rounded-4 overflow-hidden" style="max-width: 350px; margin: auto; border: 2px solid #3b37ad25;">
          <img src="images/rooms/1.jpg" class="card-img-top" alt="...">

          <div class="card-body">
            <h5>Cozy Class</h5>
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

            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                5 adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                4 Children
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

        <div class="card rounded-4 overflow-hidden" style="max-width: 350px; margin: auto; border: 2px solid #3b37ad25;">
          <img src="images/rooms/2.png" class="card-img-top" alt="...">

          <div class="card-body">
            <h5>Comfort Suite</h5>
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

            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                5 adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                4 Children
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

        <div class="card rounded-4 overflow-hidden" style="max-width: 350px; margin: auto; border: 2px solid #3b37ad25;">
          <img src="images/rooms/3.png" class="card-img-top" alt="...">

          <div class="card-body">
            <h5>Prestige Loft</h5>
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

            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                5 adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                4 Children
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
      <div class="col-lg-2 col-md-2 text-center bg-whtie rounded-4 py-4 my-3" style="border: 2px solid #3b37ad25;">
        <img src="images/features/wifi.svg" width="80px" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-whtie rounded-4 py-4 my-3" style="border: 2px solid #3b37ad25;">
        <img src="images/features/wifi.svg" width="80px" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-whtie rounded-4 py-4 my-3" style="border: 2px solid #3b37ad25;">
        <img src="images/features/wifi.svg" width="80px" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-whtie rounded-4 py-4 my-3" style="border: 2px solid #3b37ad25;">
        <img src="images/features/wifi.svg" width="80px" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-whtie rounded-4 py-4 my-3" style="border: 2px solid #3b37ad25;">
        <img src="images/features/wifi.svg" width="80px" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="" class="btn btn-sm btn-outline-dark rounded  fw-bold shadow-none">
          Know More >
        </a>
      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4 rounded-4 overflow-hidden mt-2" style="border: 2px solid #3b37ad25;">
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

        <div class="swiper-slide bg-white p-4 rounded-4 overflow-hidden mt-2" style="border: 2px solid #3b37ad25;">
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

        <div class="swiper-slide bg-white p-4 rounded-4 overflow-hidden mt-2" style="border: 2px solid #3b37ad25;">
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

        <div class="swiper-slide bg-white p-4 rounded-4 overflow-hidden mt-2" style="border: 2px solid #3b37ad25;">
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
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded-4" style="border: 2px solid #3b37ad25;">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.5592376914806!2d123.89408907583505!3d10.297052967851192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99bfd54c152e5%3A0xf9b2f3f4bd996da0!2sUniversity%20of%20Cebu%20-%20Main%20Campus!5e0!3m2!1sen!2sph!4v1763606801558!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">

        <!-- Call us -->
        <div class="bg-white p-4 rounded-4 mb-4" style="border: 2px solid #3b37ad25;">
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
        <div class="bg-white p-4 rounded-4 mb-0" style="border: 2px solid #3b37ad25;">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge text-dark fs-6 p-2" style="background-color: #3b37ad25;">
              <i class="bi bi-facebook me-1"></i>
              Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge text-dark fs-6 p-2" style="background-color: #3b37ad25;">
              <i class="bi bi-instagram me-1"></i>
              Instagram
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block">
            <span class="badge text-dark fs-6 p-2" style="background-color: #3b37ad25;">
              <i class="bi bi-tiktok me-1"></i>
              TikTok
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>


  <?php require('sections/footer.php') ?>


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