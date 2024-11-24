<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HR - Contact</title>
  <link rel="stylesheet" href="https://unphg.com/swiper07/swiper-bundle.min.css">
  <?php require('inc/links.php'); ?>
  <style>
    .pop:hover{
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>



<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Have any questions or need assistance? Get in touch with us.
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark">
        <h5>Our Location</h5>
        <p>96/A, Panthopoth, Dhanmondi</p>
        <h5>Phone</h5>
        <p>+123 456 7890</p>
        <h5>Email</h5>
        <p>info@hrhotel.com</p>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark">
        <h5>Send Us a Message</h5>
        <form action="contact_form.php" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-dark">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>

</body>
</html>
