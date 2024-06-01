<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkySaver - Signup</title>
  <link href="../dist/styles.css" rel="stylesheet">
  <script src="../node_modules/swiper/swiper-element-bundle.min.js"></script>
  <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="../node_modules/@material-tailwind/html/scripts/ripple.js"></script>
</head>

<body>
  <div class="bg-blue-100 flex items-center justify-center h-max py-5 w-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl h-fit">
      <h2 class="text-2xl font-bold mb-6 text-center">Register Details</h2>
      <form action="../controller/signup.controller.php" method="POST" id="signupForm">
        <!-- Personal Information -->
        <div class="mb-4">
          <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
          <input type="text" id="first-name" name="first-name" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>
        <div class="mb-4">
          <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
          <input type="text" id="last-name" name="last-name" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>
        <div class="mb-4">
          <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
          <input type="date" id="dob" name="dob" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>
        <div class="mb-4">
          <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
          <select id="gender" name="gender" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="mb-4">
          <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality</label>
          <input type="text" id="nationality" name="nationality" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>

        <!-- Contact Information -->
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>
        <div class="mb-4">
          <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
          <input type="tel" id="phone" name="phone" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>

        <!-- Travel Documents -->
        <div class="mb-4">
          <label for="passport-number" class="block text-sm font-medium text-gray-700">Passport Number</label>
          <input type="text" id="passport-number" name="passport-number" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>
        <div class="mb-4">
          <label for="passport-expiry" class="block text-sm font-medium text-gray-700">Passport Expiry Date</label>
          <input type="date" id="passport-expiry" name="passport-expiry" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>

        <div class="mt-6">
          <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-md">Submit</button>
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
      fetch('../controller/signup.controller.php', {
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
          window.location = 'createpassword.php';
        })
        .catch(error => console.error('Error:', error));
    })
  </script>
</body>

</html>