<!DOCTYPE html>
<html>
<head>
<title>TIME ZONE LOCAL</title>
<meta charset="UTF-8">
<script type="text/javascript" src="jquery.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes" />
<link href="./Css/Time_Zone.css" rel="stylesheet">
</head>
<body>
<ul id="menu-vertical"><li><?php
echo "<a href='#'>" . date_default_timezone_get() . "</a><a href='#'>" . date("F j Y ") . "</br> " . date('h:i:s a P') . "</a>";
?></li></ul>
<script type="text/javascript">
$(document).ready(function() {
$('#menu-accordeon>li').click(function() {
$(this).toggleClass('active');
$(this).siblings().removeClass('active');
})
});
</script>
</body>
</html>