<?php
if (isset($_GET)) {
  $data = $_GET;
} else {
  $data = [];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkySaver - Airport Information</title>
  <link href="../dist/styles.css" rel="stylesheet">
  <script src="../node_modules/swiper/swiper-element-bundle.min.js"></script>
  <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="../node_modules/@material-tailwind/html/scripts/ripple.js"></script>
</head>

<body>
  <div class="flex w-screen h-fit justify-center bg-blue-100 flex-wrap items-center py-5 bg-cover">
    <div class="flex w-11/12 h-fit bg-gray-300 rounded-md flex-wrap p-10">
      <h2 class=" w-full text-center text-2xl font-bold">Comform your Booking</h2>
      <div class="flex w-full p-5 rounded-md mt-2 justify-center ">
        <form class=" flex flex-wrap w-5/6 mx-auto" action="./booking.php" method="get">
          <span class="w-full text-xl text-blue-500 font-semibold">Personal Details</span>
          <div class="flex w-full py-2 mx-auto text-xl flex-wrap">
            <label class=" w-full font-bold my-1" for="name">Name: </label>
            <input class=" w-full my-1 p-1 outline-none rounded-md" type="text" name="name" id="name" readonly>
          </div>
          <div class="flex w-full py-2 mx-auto text-xl flex-wrap">
            <label class=" w-full font-bold my-1" for="address">Address: </label>
            <input class=" w-full my-1 p-1 outline-none rounded-md" type="text" name="address" id="address" readonly>
          </div>
          <div class="flex w-full py-2 mx-auto text-xl flex-wrap">
            <label class=" w-full font-bold my-1" for="email">Email: </label>
            <input class=" w-full my-1 p-1 outline-none rounded-md" type="email" id="email" readonly>
          </div>
          <span class="w-full text-xl text-blue-500 font-semibold">Flight Details</span>
          <div class="flex w-full py-2 mx-auto text-xl flex-wrap">
            <label class=" w-full font-bold my-1" for="airline_name">Airline Name: </label>
            <input class=" w-full my-1 p-1 outline-none rounded-md" type="text" name="airline_name" id="airline_name" readonly>
          </div>
          <div class="flex w-full py-2 mx-auto text-xl flex-wrap">
            <label class=" w-full font-bold my-1" for="flight_number">Flight Number: </label>
            <input class=" w-full my-1 p-1 outline-none rounded-md" type="text" name="flight_number" id="flight_number" readonly>
          </div>
          <div class="flex w-full py-2 mx-auto text-xl flex-wrap">
            <label class=" w-full font-bold my-1" for="departure_airport_code">Departure Airport: </label>
            <input class=" w-full my-1 p-1 outline-none rounded-md" type="text" name="departure_airport_code" id="departure_airport_code" readonly>
          </div>
          <div class="flex w-full py-2 mx-auto text-xl flex-wrap">
            <label class=" w-full font-bold my-1" for="arrival_airport_code">Arrival Airport: </label>
            <input class=" w-full my-1 p-1 outline-none rounded-md" type="text" name="arrival_airport_code" id="arrival_airport_code" readonly>
          </div>
          <div class="flex w-full py-2 mx-auto text-xl flex-wrap">
            <label class=" w-full font-bold my-1" for="available_seats">Available Seats: </label>
            <input class=" w-full my-1 p-1 outline-none rounded-md" type="text" name="available_seats" id="available_seats" readonly>
          </div>
          <div class="flex w-full py-2 mx-auto text-xl flex-wrap">
            <label class=" w-full font-bold my-1" for="class_of_service">Class of Service: </label>
            <input class=" w-full my-1 p-1 outline-none rounded-md" type="text" name="class_of_service" id="class_of_service" readonly>
          </div>
          <span class="w-full text-xl text-blue-500 font-semibold">Payment option</span>
          <div class="flex w-full py-2 mx-auto text-xl flex-wrap">
            <label class=" w-full font-bold my-1" for="payment_option">Payment option: </label>
            <select class=" w-full my-1 p-1 outline-none rounded-md" name="payment_option" id="payment_option">
              <option value="">Select payment option</option>
              <option value="Book_Now">Book Now, Pay In Cash</option>
              <option value="Cash_Deposit">Cash Deposit</option>
            </select>
          </div>
          <div class="flex w-full mt-5 flex-wrap justify-center">
            <input class=" bg-blue-600 px-4 py-2 rounded-md hover:bg-blue-700 text-xl mt-5 text-blue-50 font-bold cursor-pointer" type="submit" value="Process">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>