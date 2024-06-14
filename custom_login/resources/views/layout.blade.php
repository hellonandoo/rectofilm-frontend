<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Rectofilm')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
          display: flex;
          flex-direction: column;
          min-height: 100vh;
      }
      .navbar-custom {
          background-color: #333;
          color: white;
      }
      .navbar-custom .navbar-brand {
          font-family: 'Lobster', cursive;
          color: white;
      }
      .navbar-custom .navbar-brand:hover {
          color: #ffd700; /* Custom color on hover */
      }
      .navbar-custom .form-inline {
          flex-grow: 1;
          max-width: 500px;
      }
      .navbar-custom .form-inline input {
          width: 100%;
      }
      .navbar-custom .nav-item a {
          color: white;
      }
      .navbar-custom .nav-item a:hover {
          color: #ffd700; /* Custom color on hover */
      }
      .profile {
          display: flex;
          align-items: center;
      }
      .profile img {
          height: 30px;
          border-radius: 50%;
          margin-right: 10px;
      }
      .content {
          flex: 1;
          margin-top: 20px;
      }
      .footer-custom {
            background-color: #333;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
      }
      #map {
          width: 100%;
          height: 400px;
          border: 1px solid #ced4da;
          border-radius: 4px;
      }
  </style>
  </head>
  <body>
    @include('include.header')
    @yield('content')
    @include('include.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>