<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link type="text/css" href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link type="text/css" href="vendor/notyf/notyf.min.css" rel="stylesheet">
    <link type="text/css" href="vendor/fullcalendar/main.min.css" rel="stylesheet">
    <link type="text/css" href="vendor/apexcharts/dist/apexcharts.css" rel="stylesheet">
    <link type="text/css" href="vendor/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <link type="text/css" href="vendor/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
    <link type="text/css" href="vendor/leaflet/dist/leaflet.css" rel="stylesheet">
    <link type="text/css" href="css/volt.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>
<script src="vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="vendor/countup.js/dist/countUp.umd.js"></script>
<script src="vendor/apexcharts/dist/apexcharts.min.js"></script>
<script src="vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
<script src="vendor/simple-datatables/dist/umd/simple-datatables.js"></script>
<script src="vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<script src="vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
<script src="vendor/fullcalendar/main.min.js"></script>
<script src="vendor/dropzone/dist/min/dropzone.min.js"></script>
<script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="vendor/notyf/notyf.min.js"></script>
<script src="vendor/leaflet/dist/leaflet.js"></script>
<script src="vendor/svg-pan-zoom/dist/svg-pan-zoom.min.js"></script>
<script src="vendor/svgmap/dist/svgMap.min.js"></script>
<script src="vendor/simplebar/dist/simplebar.min.js"></script>
<script src="vendor/sortablejs/Sortable.min.js"></script>
<script async defer="defer" src="https://buttons.github.io/buttons.js"></script>
<script src="assets/js/volt.js"></script>

</html>
