<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/login-signup/admin_logo_img.png')}}">
    <title>PSIEC</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" type="text/css"
        href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/booking.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/payment.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/category.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/raw-material.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/total-payment.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
         #icon-container {
  position: fixed;
  bottom: 20px;
  right: 20px;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}

#scroll-icon {
  font-size: 24px;
  cursor: pointer;
}

.scroling {
    opacity: 1;
    background: #F2881D;
    width: 50px;
    height: 50px;
    border-radius: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}
    </style>
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <div class="main">
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
    </div>
    <script src="{{asset('js/productcategory.js')}}"></script>
    <script src="{{asset('js/booking.js')}}"></script>
    <script src="{{asset('js/order.js')}}"></script>
    <script>
        const iconContainer = document.getElementById("icon-container");
const scrollIcon = document.getElementById("scroll-icon");

// Function to check the scroll position and toggle the icon visibility
function toggleIconVisibility() {
  if (window.scrollY > 0) {
    iconContainer.style.opacity = "1";
  } else {
    iconContainer.style.opacity = "0";
  }
}

// Attach an event listener to the scroll event
window.addEventListener("scroll", toggleIconVisibility);

// Smoothly scroll to the top when the icon is clicked
scrollIcon.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});

    </script>
</body>
 
</html>