<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkySaver - Login</title>
  <link href="../dist/styles.css" rel="stylesheet">
  <script src="../node_modules/swiper/swiper-element-bundle.min.js"></script>
  <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="../node_modules/@material-tailwind/html/scripts/ripple.js"></script>
</head>

<body>
  <div class="bg-blue-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
      <form action="#" method="POST">
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" id="password" name="password" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
        </div>
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
          </div>
          <div class="text-sm">
            <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Forgot your password?</a>
          </div>
        </div>
        <div class="mt-6">
          <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-md">Sign In</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>