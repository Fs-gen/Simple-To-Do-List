<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ClockPicker</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="css/github.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-clockpicker.min.js"></script>
</head>
<body>
	<div class="container">
		<input id="input-a" value="" data-default="20:48">
		<!-- <button type="button" id="button-a">Check the  minutes</button>
		<button type="button" id="button-b">Check the  hours</button> -->
	</div>

<script>
	var input = $('#input-a');
input.clockpicker({
    autoclose: true
});
	</script>
</body>
</html>
