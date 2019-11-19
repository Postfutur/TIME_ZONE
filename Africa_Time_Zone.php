<!DOCTYPE html>
<html>

<head>
	<title>OTHER TIME ZONE</title>
	<meta charset="UTF-8">
	<script type="text/javascript" src="jquery.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes" />
	<link href="Css/Time_Zone.css" rel="stylesheet">
</head>

<body>
<?php
		session_name('SESSION_AFRICA');
		//session_start();
		//session_regenerate_id(true);
		/* variable in constante not in variable */
		//echo File_To_Open_Csv; // for TEST uncoment
		// $xxxx ne conserve pas la valeur donc DEFINE
		//$File_To_Open_Csv = $_POST["Time_Zone_Db/Pays.csv"]; Remplacé par constante avec DEFINE								
		define('AFRICA_FILE_TO_OPEN_CSV', './Time_Zone_Db/Data_Country_Africa.csv');
		//$Zise_File_Csv = $_POST[1024]; Remplacé par constante avec DEFINE
		define('AFRICA_SIZE_FILE_CSV', 100000);
		//$Delimiter_Csv = $_POST[","]; Remplacé par constante avec DEFINE
		define('AFRICA_DELIMITER_CSV', ",");
		//$Enclosure_Csv = $_POST["'"]; Remplacé par constante avec DEFINE
		define('AFRICA_ENCLOSURE_CSV', "'");
		//$Escape_Csv = $_POST[""]; Remplacé par constante avec DEFINE
		define('AFRICA_ESCAPE_CSV', ";");
		/* Call listing csv file */
		Africa_Full_Listing_Time_Zone();

session_write_close();
//session_regenerate_id();
//session_destroy();
?>
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