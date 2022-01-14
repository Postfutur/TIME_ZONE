<!DOCTYPE html>
<html>
<head>
<title>TIME ZONE</title>
<meta charset="UTF-8">
<script type="text/javascript" src="jquery.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes" />
<link href="./Css/Time_Zone.css" rel="stylesheet" >
</head>
<body>
<ul id="menu-accordeon">
<li><a href="#">Lien menu 1</a>
<ul>
<li><a href="#">lien sous menu 1</a></li>
<li><a href="#">lien sous menu 1</a></li>
<li><a href="#">lien sous menu 1</a></li>
<li><a href="#">lien sous menu 1</a></li>
</ul>
</li>
<li><a href="#">Lien menu 2</a>
<ul>
<li><a href="#">Lien sous menu 2</a></li>
<li><a href="#">Lien sous menu 2</a></li>
<li><a href="#">Lien sous menu 2</a></li>
<li><a href="#">Lien sous menu 2</a></li>
</ul>
</li>
<li><a href="#">Lien menu 3</a>
<ul>
<li><a href="#">Lien sous menu 3</a></li>
<li><a href="#">Lien sous menu 3</a></li>
<li><a href="#">Lien sous menu 3</a></li>
<li><a href="#">Lien sous menu 3</a></li>
</ul>
</li>
</ul>
<script type="text/javascript">
$(document).ready(function(){
$('#menu-accordeon>li').click(function(){
$(this).toggleClass('active');
$(this).siblings().removeClass('active');
})   
});
</script>
</body>
</html>