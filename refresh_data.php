<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<title></title>
</head>
<body>
	<div id="show"></div>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() 
		{
			setInterval(function () 
			{
				$('#show').load('tampil_data.php')
			}, 1000);
		});
	</script>
</body>
</html>