<?php

use Src\Config\Session;

require_once __DIR__ . '/../vendor/autoload.php';
if (is_null(Session::getRegisterData())) {
  header('Location: signup.php');
  exit;
}

$registerData = Session::getRegisterData();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkySaver - Create password</title>
  <link href="../dist/styles.css" rel="stylesheet">
  <script src="../node_modules/swiper/swiper-element-bundle.min.js"></script>
  <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="../node_modules/@material-tailwind/html/scripts/ripple.js"></script>
</head>

<body>
  <div class="bg-blue-100 flex items-center justify-center h-screen py-5 w-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl h-fit">
      <h2 class="text-2xl font-bold mb-6 text-center">Create Password</h2>
      <form action="../controller/signup.process.controller.php" method="POST" id="signupForm">
        <!-- Personal Information -->
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" value="<?php echo $registerData['email'] ?>" class="mt-1 p-2 border border-gray-300 rounded-md w-full outline-none" readonly>
        </div>
        <div class="mb-4">
          <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
          <input type="text" id="username" name="username" class="mt-1 p-2 border border-gray-300 rounded-md w-full" placeholder="create a username">
        </div>
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" id="password" name="password" class="mt-1 p-2 border border-gray-300 rounded-md w-full" placeholder="create a password">
        </div>
        <div class="mb-4">
          <label for="passwordConfirm" class="block text-sm font-medium text-gray-700">Confirm password</label>
          <input type="password" id="passwordConfirm" name="passwordConfirm" class="mt-1 p-2 border border-gray-300 rounded-md w-full" placeholder="confirm your password">
        </div>

        <div class="mt-6">
          <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-md">Signup</button>
        </div>
      </form>
    </div>
  </div>
  <script>
    const signupForm = document.getElementById('signupForm');

    signupForm.addEventListener('submit', function(e) {
      e.preventDefault();
      // Create a new FormData object from the form
      const formData = new FormData(signupForm);
      // Fetch request with FormData
      fetch('../controller/signup.process.controller.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          if (!data.status) {
            alert(data.message)
            return;
          }
          console.log(data);
          window.location = 'login.php';
        })
        .catch(error => console.error('Error:', error));
    })
  </script>
</body>

</html>