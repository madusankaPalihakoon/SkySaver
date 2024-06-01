<?php
if (isset($_GET['data'])) {
  $encodedData = $_GET['data'];
  $jsonData = urldecode($encodedData);
  $flights = json_decode($jsonData, true);
} else {
  $data = [];
}
// Array ( [0] => Array ( [flight_id] => 2 [airline_name] => SriLankan Airlines [flight_number] => UL102 [departure_airport_code] => CMB [arrival_airport_code] => JAF [departure_date_time] => 2024-06-02 09:00:00 [arrival_date_time] => 2024-06-02 13:00:00 [available_seats] => 180 [class_of_service] => Business ) )
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
  <div class="flex w-screen h-screen justify-center bg-blue-100 flex-wrap items-center">
    <div class="flex w-11/12 h-fit bg-gray-300 rounded-md flex-wrap p-10">
      <h2 class=" w-full text-center text-2xl font-bold">Available Flights</h2>
      <?php foreach ($flights as $data) : ?>
        <?php
        echo '<div class="flex w-full bg-blue-200 p-5 rounded-md mt-2">
                <form class=" flex" action="./booking.php" method="get">
                  <input type="hidden" name="flight_id" value="' . $data['flight_id'] . '>">
                  <div class="flex flex-wrap w-1/4 items-center">
                    <span class=" w-full text-nowrap py-1">
                      <span class=" font-bold">Airline Name: </span>
                      <input class="bg-transparent" type="text" name="airline_name" id="" value="' . $data['airline_name'] . '" readonly>
                    </span>
                    <span class=" w-full text-nowrap py-1">
                      <span class=" font-bold">Flight Number: </span>
                      <input class=" bg-transparent outline-none" type="text" name="flight_number" id="" value="' . $data['flight_number'] . '" readonly>
                    </span>
                  </div>
                  <div class="flex flex-wrap w-1/4 items-center">
                    <span class=" w-full text-nowrap py-1">
                      <span class=" font-bold">Departure Airport: </span>
                      <input class=" bg-transparent outline-none" type="text" name="departure_airport_code" id="" value="' . $data['departure_airport_code'] . '" readonly>
                    </span>
                    <span class=" w-full text-nowrap py-1">
                      <span class=" font-bold">Arrival Airport: </span>
                      <input class=" bg-transparent outline-none" type="text" name="arrival_airport_code" id="" value="' . $data['arrival_airport_code'] . '" readonly>
                    </span>
                  </div>
                  <div class="flex flex-wrap w-1/4 items-center">
                    <span class=" w-full text-nowrap py-1">
                      <span class=" font-bold">Available Seats: </span>
                      <input class=" bg-transparent outline-none" type="text" name="available_seats" id="" value="' . $data['available_seats'] . '" readonly>
                    </span>
                    <span class=" w-full text-nowrap py-1">
                      <span class=" font-bold">Class of Service: </span>
                      <input class=" bg-transparent outline-none" type="text" name="class_of_service" id="" value="' . $data['class_of_service'] . '" readonly>
                    </span>
                  </div>
                  <div class="flex flex-wrap w-1/4 items-center justify-center">
                    <input class=" bg-blue-600 px-4 py-2 hover:bg-blue-700 font-bold text-nowrap text-blue-50 text-base rounded-md cursor-pointer" type="submit" value="Book Now">
                  </div>
                </form>
            </div>';
        ?>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>