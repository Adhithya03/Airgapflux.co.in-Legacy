<!DOCTYPE html>
<html>
<head>
	<title>Timetable of Current Day</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        .container {
	max-width: 700px;
	margin: 50px auto;
	text-align: center;
}

h1 {
	font-size: 2.5rem;
	margin-bottom: 30px;
}

.button-container {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	margin-bottom: 30px;
}

button {
	background-color: #4CAF50;
	color: #fff;
	border: none;
	padding: 10px 20px;
	font-size: 1.25rem;
	cursor: pointer;
	margin: 10px;
}

.current-day {
	background-color: #ddd;
	color: #333;
	cursor: default;
}

table {
	border-collapse: collapse;
	margin: 0 auto;
	max-width: 600px;
}

th, td {
	border: 1px solid #ddd;
	padding: 10px;
	max-width: 300px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}

th {
	background-color: #f2f2f2;
	font-weight: bold;
}

td {
	font-weight: lighter;
}

    </style>
	<?php
		$json_data = '{ "Monday"    :[":smirk:"],
										"Tuesday"   :[":one:  :two:  :three:  Design of EM  _A1_  Lab  :lab_coat:|  Drives Lab  _A2_ :lab_coat:"   ,":four:   Consumer Electronics    :battery:"   ,":five:   Design of EM"   ,":six:    Lunch   :curry:"   , ":seven:   Protection"   , ":eight:   Special Machines  |  PLC scada"],
										"Wednesday" :[":one:   Consumer Electronics    :battery:"   ,":two:    Drives    :bullettrain_front: "   ,":coffee:   Break   :coffee:"   ,":three:   Design of EM"   ,":four:   Microprocessor"   ,":five:   Lunch   :curry:"   ,":five: :six: :seven:    Drives Lab  _A1_   :lab_coat:|  Design of EM DEM Lab  _A2_ :lab_coat:"],
										"Thursday"  :[":one:  :two:  :three:     Microprocessor Lab  _A1_   |  Innovation  _A2_ "   ,":four:    Drives    :bullettrain_front: "   ,":five:    Design of EM"   ,":six:   Lunch   :curry:"   ,":seven:     Consumer Electronics    :battery:"   ,":eight:    Microprocessor"],
										"Friday"    :[":one:      Protection"   ,":two:   PLC scada  |  Special Machines"   ,":coffee:   Break   :coffee:"   ,":three:      Consumer Electronics    :battery:"   ,":four:    Microprocessor"   ,":five:      Drives    :bullettrain_front: "   ,":six:   Lunch   :curry:"   ,":seven:      Design of EM"   ,":eight:    Protection"],
										"Saturday"  :[":one:       PLC scada  |  Special Machines"   ,":two:        Microprocessor"   ,":coffee:   Break   :coffee:"   ,":three:  Drives    :bullettrain_front: "   ,":four:      Protection"   ,":five:      Lunch   :curry:"   ,":five: :six:  :seven:    Innovation Lab  _A1_   :lab_coat:|  Microprocessor Lab  _A2_ :lab_coat:"],
										"Sunday"    :["The World Needs You, but not on **Sunday**."] }';
		$php_array = json_decode($json_data, true);

		$current_day = date("l");
		// $current_day = 'Tuesday';
		$timetable = $php_array[$current_day];
	?>
	
	<div class="container">
		<h1>Timetable for <?php echo $current_day ?></h1>
		<div class="button-container">
			<?php
				//creating buttons for each day of the week
				foreach ($php_array as $day => $timetable) {
					if ($day == $current_day) {
						//disabling the button for the current day
						echo "<button class='current-day' disabled>$day</button>";
					} else {
						//creating button for other days
						echo "<form action='tt.php' method='POST'>";
						echo "<button type='submit' name='selected_day' value='$day'>$day</button>";
						echo "</form>";
					}
				}
			?>
		</div>
		<table>
			<tr>
				<th>Time Slot</th>
				<th>Subject(s)</th>
			</tr>
			<?php
				$time_slot_counter = 1;
				foreach ($timetable as $subject) {
					echo "<tr>";
					echo "<td>$time_slot_counter</td>";
					echo "<td>$subject</td>";
					echo "</tr>";
					$time_slot_counter++;
				}
			?>
		</table>
	</div>
</body>
</html>
