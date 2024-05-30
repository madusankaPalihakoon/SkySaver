<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/styles.css" rel="stylesheet">
    <title>SkySaver</title>
    <script src="node_modules/swiper/swiper-element-bundle.min.js"></script>
    <script src="node_modules/swiper/swiper-bundle.min.js"></script>
    <script src="node_modules/@material-tailwind/html/scripts/ripple.js"></script>
</head>
<body class=" bg-blue-100">
  <header>
  <nav class=" inline-flex bg-gray-200 h-auto w-screen py-3 items-center font-semibold text-gray-900">
        <div class="flex justify-start items-center">
          <div class="bg-slate-100 w-28 h-auto mx-5 rounded-md">
            <a href="">
              <img class="w-full h-auto object-fill" src="assets/logo/logo-sm.png" alt="logo" srcset="">
            </a>
          </div>
          <div class=" w-fit h-auto mx-5 rounded-md text-nowrap hover:text-blue-600">
            <a href="pages/information">
              FLIGHT INFORMATION
            </a>
          </div>
          <div class=" w-fit h-auto mx-5 rounded-md text-nowrap hover:text-blue-600">
            <a href="pages/experience">
              EXPERIENCE
            </a>
          </div>
          <div class=" w-fit h-auto mx-5 rounded-md text-nowrap hover:text-blue-600">
            <a href="pages/contact">
              CONTACT US
            </a>
          </div>
          <div class=" w-fit h-auto mx-5 rounded-md text-nowrap hover:text-blue-600">
            <a href="pages/about">
              ABOUT
            </a>
          </div>
        </div>
        <div class="w-full flex justify-end mr-5 hover:text-blue-600">
          <div class=" w-fit mx-5 h-auto">
            <a href="pages/login">
              LOGIN
            </a>
          </div>
        </div>
      </nav>
  </header>
  <main>
    <div class="w-screen h-96">
      <swiper-container class="mySwiper w-screen h-96" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
      centered-slides="true" autoplay-delay="3000" autoplay-disable-on-interaction="false">
          <swiper-slide>
            <img class=" w-full h-full object-cover" src="assets/img/swiper/01.jpg" alt="">
          </swiper-slide>
          <swiper-slide>
            <img class="w-full h-full object-cover" src="assets/img/swiper/02.jpg" alt="">
          </swiper-slide>
          <swiper-slide>
            <img class="w-full h-full object-cover" src="assets/img/swiper/03.jpg" alt="">
          </swiper-slide>
          <swiper-slide>
            <img class="w-full h-full object-cover" src="assets/img/swiper/04.jpg" alt="">
          </swiper-slide>
          <swiper-slide>
            <img class="w-full h-full object-cover" src="assets/img/swiper/05.jpg" alt="">
          </swiper-slide>
      </swiper-container>
    </div>
    <div class="flex w-4/5 h-64 bg-blue-200 py-5 px-2 -mt-5 z-10 absolute inset-x-px mx-auto rounded-md shadow-blue-300 shadow-xl">
      <form class="w-full inset-x-px mx-auto" action="" method="post">
        <div class="flex w-full py-2 mx-auto justify-between">
          <input class="p-2 rounded-sm w-1/2 mr-2" type="text" name="" id="" placeholder="From">
          <input class="p-2 rounded-sm w-1/2" type="text" name="" id="" placeholder="To">
        </div>
        <div class="flex w-full py-2 mx-auto">
          <!-- round -->
          <div class="w-1/2 justify-between mr-2 bg-white rounded-sm flex" id="round">
            <div class="flex flex-wrap w-5/12">
              <span class="text-gray-500 ml-2">Departure</span>
              <input class="p-2 rounded-sm" type="date" name="" id="">
            </div>
            <div class="flex flex-wrap w-5/12">
              <span class="text-gray-500 ml-2">Return</span>
              <input class="p-2 rounded-sm" type="date" name="" id="">
            </div>
          </div>
          <!-- round -->
          <!-- one way -->
          <div class="w-1/2 justify-between mr-2 hidden" id="one">
            <div class="flex flex-wrap w-full gap-5 items-center bg-white rounded-sm">
              <span class=" text-gray-500 ml-2">Departure</span>
              <input class="p-2 rounded-sm" type="date" name="" id="">
            </div>
          </div>
          <!-- one way -->
          <div class="flex w-1/2 items-center bg-white rounded-sm">
            <input class="p-2 rounded-sm w-full h-fit" type="number" name="" id="" placeholder="Number of passenger">
          </div>
        </div>
        <div class="flex w-full py-2 mx-auto gap-5 items-center text-nowrap h-fit">
          <div>
            <input class="p-2 w-5 h-5 select" type="radio" name="trip" value="Round Trip" id="radio-round" checked onclick="toggleFields()">
            <label class="ml-1" for="">Round Trip</label>
          </div>
          <div>
            <input class="p-2 w-5 h-5 select" type="radio" name="trip" value="One Way" id="radio-one" onclick="toggleFields()">
            <label class="ml-1" for="">One Way</label>
          </div>
          <div class="flex w-full justify-end mr-2">
          <input class="ml-2 px-6 py-2 rounded-md bg-blue-600 hover:bg-blue-700 cursor-pointer text-blue-50 font-semibold text-xl" type="submit" value="Search">
          </div>
        </div>
      </form>
    </div>
    <!-- offers -->
    <div class="flex mt-64 p-4 flex-wrap w-screen">
      <h2 class="w-full text-blue-600 font-bold text-2xl ml-2">OFFERS</h2>
      <!-- wifi -->
      <div class="flex w-11/12 bg-blue-300 mx-auto p-3 h-max mt-2 rounded-md shadow-blue-400 shadow-md">
        <div class="w-1/2">
          <h2 class=" text-gray-900 font-bold mb-2 text-xl">In-flight Wi-Fi</h2>
          <img class="w-4/5 h-80 object-cover rounded-md hover:scale-105 transition duration-1000" src="assets/img/inflight.jpg" alt="">
        </div>
        <div class="w-1/2">
          <p class=" text-justify text-lg p-2">
            Stay productive while you fly with in-flight Wi-Fi on SriLankan Airlines. Answer your emails, surf the internet or chat with your friends online - just as you would do on the ground.
            The in-flight Wi-Fi facility is available for purchase on our new A330-300 and A320/321 Neo fleet. Our cabin crew will let you know if your flight is equipped with our inflight Wi-Fi facility during the flight.
          </p>
          <div class="py-4 w-full flex justify-center">
            <a class=" bg-blue-600 px-2 py-4 text-blue-50 font-semibold text-lg rounded-md hover:bg-blue-700" href="Wi-Fi">Find out more</a>
          </div>
        </div>
      </div>
      <!-- wifi -->
      <!-- book now pay cash -->
      <div class="flex w-11/12 bg-blue-300 mx-auto p-3 h-max mt-2 rounded-md shadow-blue-400 shadow-md">
        <div class="w-1/2">
          <h2 class=" text-gray-900 font-bold mb-2 text-xl">Book Now, Pay In Cash</h2>
          <img class="w-4/5 h-80 object-cover rounded-md hover:scale-105 transition duration-1000" src="assets/img/booknow.jpg" alt="">
        </div>
        <div class="w-1/2">
          <p class=" text-justify text-lg p-2">
          You don't need a credit card anymore!
          Convenient payment option that is absolutely credit card-free
          SriLankan Airlines team up with Exchange Houses in the United Arab Emirates to bring you in full swing to have flamboyant travel experience .
          This unique offer which brings utmost convenience to air travelers through a synergy of book online and pay in cash through a wide range of touch points.
          </p>
          <div class="py-4 w-full flex justify-center">
            <a class=" bg-blue-600 px-2 py-4 text-blue-50 font-semibold text-lg rounded-md hover:bg-blue-700" href="Book-Now">Find out more</a>
          </div>
        </div>
      </div>
      <!-- book now pay cash -->
      <!-- baggage allowance -->
      <div class="flex w-11/12 bg-blue-300 mx-auto p-3 h-max mt-2 rounded-md shadow-blue-400 shadow-md">
        <div class="w-1/2">
          <h2 class=" text-gray-900 font-bold mb-2 text-xl">Baggage Allowance</h2>
          <img class="w-4/5 h-80 object-cover rounded-md hover:scale-105 transition duration-1000" src="assets/img/baggage.jpg" alt="">
        </div>
        <div class="w-1/2">
          <h2 class=" text-gray-900 font-bold mb-2 text-xl">Pre-purchase excess baggage at discounted rates</h2>
          <p class=" text-justify text-lg p-2">
            Save time, money and avoid hassle at the airport by pre-purchasing excess baggage at a discount from airport rates on Srilankan.com.
          </p>
          <p class=" text-justify text-lg p-2">
            You can purchase discounted extra baggage while booking your flight or via our Manage my Booking feature on Srilankan.com even 3 hours prior to your scheduled departure!
          </p>
          <p class=" text-justify text-lg p-2">
            Get discounts on Pre-purchased Baggage Allowance
          </p>
          <div class="py-4 w-full flex justify-center">
            <a class=" bg-blue-600 px-2 py-4 text-blue-50 font-semibold text-lg rounded-md hover:bg-blue-700" href="Book-Now">Find out more</a>
          </div>
        </div>
      </div>
      <!-- baggage allowance -->
    </div>
    <!-- shedule main -->
    <div class="flex mt-2 p-4 flex-wrap w-screen">
      <h2 class="w-full text-blue-600 font-bold text-2xl ml-2">SHEDULES</h2>
      <!-- shedule -->
      <div class="ml-2 flex w-1/4 bg-green-300 rounded-lg mt-2 overflow-hidden shadow-lg shadow-slate-600">
        <div class="w-full h-fit">
          <img class="w-full h-44 object-cover" src="assets/img/swiper/01.jpg" alt="">
          <div class="mx-2 my-4">
              <h2 class=" text-wrap w-full text-blue-600 font-bold text-xl">
                Colombo(CMB) to Melbourne(MLE)
              </h2>
              <h4 class="w-full">
                06/13/2024 - 07/14/2024
              </h4>
              <div class="w-full text-right">
                <span class=" grid mr-2">from</span>
                <span class=" grid mr-2">LKR 328,932*</span>
                <span class=" grid mr-2">seen: 7hrs ago</span>
                <span class=" grid mr-2">Round-trip/Economy</span>
              </div>
            </div>
          </div>
      </div>
      <!-- shedule -->
      <!-- shedule -->
      <div class="ml-2 flex w-1/4 bg-green-300 rounded-lg mt-2 overflow-hidden shadow-lg shadow-slate-600">
        <div class="w-full h-fit">
          <img class="w-full h-44 object-cover" src="assets/img/swiper/01.jpg" alt="">
          <div class="mx-2 my-4">
              <h2 class=" text-wrap w-full text-blue-600 font-bold text-xl">
                Colombo(CMB) to Melbourne(MLE)
              </h2>
              <h4 class="w-full">
                06/13/2024 - 07/14/2024
              </h4>
              <div class="w-full text-right">
                <span class=" grid mr-2">from</span>
                <span class=" grid mr-2">LKR 328,932*</span>
                <span class=" grid mr-2">seen: 7hrs ago</span>
                <span class=" grid mr-2">Round-trip/Economy</span>
              </div>
            </div>
          </div>
      </div>
      <!-- shedule -->
    </div>
  </main>
  <footer>
    <div class="grid w-screen bg-gray-900 overflow-hidden">
      <div class="flex w-11/12 mx-auto py-5 flex-wrap">
        <div class="w-3/12 text-blue-50">
          <h2 class=" font-bold text-lg py-4">ABOUT US</h2>
          <ul class=" text-base">About SkySaver</ul>
          <ul class=" text-base">Sri Lankan Tourism</ul>
          <ul class=" text-base">Careers</ul>
        </div>
        <div class="w-3/12 text-blue-50">
          <h2 class=" font-bold text-lg py-4 uppercase">help</h2>
          <ul class=" text-base">Contact Center</ul>
          <ul class=" text-base">Online Chat Support</ul>
          <div class="items-center h-fit w-fit py-1">
            <a class="inline-flex gap-1 items-center" href="facebook">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
              </svg>
              <span>Facebook</span>
            </a>
          </div>
          <div class="items-center h-fit w-fit py-1">
            <a class="inline-flex gap-1 items-center" href="facebook">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
              </svg>
              <span>WhatsApp</span>
            </a>
          </div>
        </div>
        <div class="w-3/12 text-blue-50">
          <h2 class=" font-bold text-lg py-4 uppercase">services</h2>
          <ul class=" text-base">Cargo</ul>
          <ul class=" text-base">Catering</ul>
        </div>
        <div class="w-3/12 text-blue-50">
          <h2 class=" font-bold text-lg py-4 uppercase">term & conditions</h2>
          <ul class=" text-base">Online Booking Terms of Use</ul>
          <ul class=" text-base">Conditions of Carriage</ul>
          <ul class=" text-base">Notices For Travel Agents</ul>
        </div>
        <div class="w-full flex flex-wrap mt-2">
          <h2 class="w-full text-blue-50 font-bold text-xl uppercase pt-2">subscribe to our special offers</h2>
          <form action="" method="post">
            <div class="inline-flex w-full items-center pt-2">
              <input type="checkbox" name="agree" id="">
              <span class="ml-2 text-blue-50">Yes, I would like to receive promotional content from SriLankan Airlines</span>
            </div>
            <div class="inline-flex w-full gap-8 items-center">
              <input class="p-2 rounded-md" type="text" name="email" id="" placeholder="Enter email address">
              <input class="p-2 rounded-md" type="text" name="country" id="" placeholder="Select country">
              <input class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-blue-50 text-lg font-bold rounded-md cursor-pointer" type="submit" value="Subscribe">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="w-screen flex justify-center bg-gray-800 text-blue-50 text-base py-2">
      2023 &copy 
    </div>
  </footer>
<script>
  function toggleFields() {
    const selectedOption = document.querySelector('input[name="trip"]:checked').value;

    // Get the fields divs
    const roundTripFields = document.getElementById('round');
    const oneWayFields = document.getElementById('one');

    // Toggle visibility based on selected option
    if (selectedOption === 'Round Trip') {
      roundTripFields.classList.replace('hidden', 'flex');
      oneWayFields.classList.replace('flex', 'hidden');
    } else if (selectedOption === 'One Way') {
        roundTripFields.classList.replace('flex', 'hidden');
        oneWayFields.classList.replace('hidden', 'flex');
    }
  }

  // Automatically call toggleFields when the page loads
  window.onload = function() {
    toggleFields();
  }
</script>
</body>
</html>
