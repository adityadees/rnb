<html>
<head>
    <title>Laravel Google Maps Example</title>
    {!! $map['js'] !!}
</head>
<body>
<div class="container">
    {!! $map['html'] !!}
    <div id="directionsDiv"></div>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAogXD-AHrsmnWinZIyhRORJ84bgLwDPpg"></script>

</body>
</html>