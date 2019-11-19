<!DOCTYPE html >
<html>
<head>
	<title>EUROPE Time Zone</title>
	<meta charset="UTF-8">
</head>

<body>
<!-- FUNCTION FULL LISTING -->
<?php
	function Europe_Full_Listing_Time_Zone()
							{
// VAR as CONSTANT
								$File_To_Open = EUROPE_FILE_TO_OPEN_CSV;
								$Zise = EUROPE_SIZE_FILE_CSV;
								$Delimiter = EUROPE_DELIMITER_CSV;
								$Enclosure = EUROPE_ENCLOSURE_CSV;
								$Escape = EUROPE_ESCAPE_CSV;
/* ouverture en lecture */
								if($file_opened = fopen($File_To_Open,"r"))
									{
/* extraction d'une ligne */
										while ($Line_File_Opened = fgetcsv($file_opened, $Zise, $Delimiter, $Enclosure, $Escape))
											{
/* affichage des champs */
												foreach($Line_File_Opened as $Element)
													{
														echo "<ul><li><a href='#'>" . $Element . "</a>";
														$date = new DateTime(date("F-j-Y g:i a"), new DateTimeZone($Element));
														$date->setTimezone(new DateTimeZone($Element));
														echo $date->format('F j Y '). "</br> " /*. $date->format('H:i:s P') . "</br>"*/. $date->format('h:i:s a P') . "</br>";
														echo "</li></ul>";

													}
											}
										fclose($file_opened);
									}
/* fermeture fichier */
								else
									{
										echo "Ouverture impossible.";
									}
								}
?>