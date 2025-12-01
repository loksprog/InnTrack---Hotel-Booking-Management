<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('sections/links.php') ?>
  <title>InnTrack | Contact</title>
</head>

<body class="bg-light">

  <?php require('sections/header.php') ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Contact</h2>
    <p class="text-center">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
      Fugiat dolorum nostrum expedita illum debitis possimus
      blanditiis odit officia quos voluptas.
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded p-4" style="border: 2px solid #3b37ad25;"> 
          <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.5592376914806!2d123.89408907583505!3d10.297052967851192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99bfd54c152e5%3A0xf9b2f3f4bd996da0!2sUniversity%20of%20Cebu%20-%20Main%20Campus!5e0!3m2!1sen!2sph!4v1763606801558!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          <h5>Address</h5>
          <a href="https://maps.app.goo.gl/2hDnFWpJo4pqmsr26" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-map-fill"></i>
            Sanciangko St, Cebu City, 6000 Cebu
          </a>

          <!--  Call us -->
          <h5 class="mt-4">Call us</h5>
          <a href="tel: +63922335842" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>
            +63922335842
          </a>
          <br>
          <a href="tel: +63922335842" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>
            +63922335842
          </a>

          <h5 class="mt-4">Email</h5>
          <a href="mailto: harveytaneo@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-envelope-fill"></i> harveytaneo@gmail.com
          </a>

          <!-- Follow Us -->
          <h5 class="mt-4">Follow us</h5>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-instagram me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5">
            <i class="bi bi-tiktok me-1"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded p-4" style="border: 2px solid #3b37ad25;">
          <form>
            <h5>Send a message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>

            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>

            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Subject</label>
              <input type="text" class="form-control shado-none">
            </div>

            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
             <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>

            <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php require('sections/footer.php') ?>

</body>

</html>