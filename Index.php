<!DOCTYPE html>
<html>

<head>
    <title>TIME ZONE</title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes" />
    <link href="./Css/Time_Zone.css" rel="stylesheet">
    <script src="./Menu_Accordeon.js"></script>
</head>

<body>
    <div>
        
    </div>
    <?php
        include './Function/Africa_Time_Zone_Call_Csv.php';
        include './Function/America_Time_Zone_Call_Csv.php';
        include './Function/Antartica_Time_Zone_Call_Csv.php';
        include './Function/Asia_Time_Zone_Call_Csv.php';
        include './Function/Atlantic_Time_Zone_Call_Csv.php';
        include './Function/Australia_Time_Zone_Call_Csv.php';
        include './Function/Europe_Time_Zone_Call_Csv.php';
        include './Function/India_Time_Zone_Call_Csv.php';
        include './Function/Pacific_Time_Zone_Call_Csv.php';
    ?>
    <div>
        <ul id="menu-accordeon">
            <li><a href="#">Time Zone Local</a><?php include 'Time_Zone_Local.php'; ?></li>
        </ul>
        <ul id="menu-accordeon">
            <li><a href="#">Africa Time Zone</a><?php include 'Africa_Time_Zone.php'; ?></li>
        </ul>
        <ul id="menu-accordeon">
            <li><a href="#">America Time Zone</a><?php include 'America_Time_Zone.php'; ?></li>
        </ul>
        <ul id="menu-accordeon">
            <li><a href="#">Antartica Time Zone</a><?php include 'Antartica_Time_Zone.php'; ?></li>
        </ul>
        <ul id="menu-accordeon">
            <li><a href="#">Asia Time Zone</a><?php include 'Asia_Time_Zone.php'; ?></li>
        </ul>
        <ul id="menu-accordeon">
            <li><a href="#">Atlantic Time Zone</a><?php include 'Atlantic_Time_Zone.php'; ?></li>
        </ul>
        <ul id="menu-accordeon">
            <li><a href="#">Australia Time Zone</a><?php include 'Australia_Time_Zone.php'; ?></li>
        </ul>
        <ul id="menu-accordeon">
            <li><a href="#">Europe Time Zone</a><?php include 'Europe_Time_Zone.php'; ?></li>
        </ul>
        <ul id="menu-accordeon">
            <li><a href="#">Indian Time Zone</a><?php include 'India_Time_Zone.php'; ?></li>
        </ul>
        <ul id="menu-accordeon">
            <li><a href="#">Pacific Time Zone</a><?php include 'Pacific_Time_Zone.php'; ?></li>
        </ul>
    </div>
    <script> ./toto.js </script>
</body>

</html>