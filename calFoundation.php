<!DOCTYPE html>
<html>
<head>
	<title>Calendar Foundation</title>
	<!-- STYLES -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.css">
	<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">
	<link rel="stylesheet" type="text/css" href="css/foundation.calendar.css">

	<!-- SCRIPTS -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	<script>
		$(document).ready(function() {
		    $(document).foundation();
		})
	</script>

</head>
<body>

	<?php 

	// set variables
	$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	$current_month= date('n');
	$current_year= date('Y');
	$current_day= date('d');
	$month=0;

	//table

	echo '<section class="monthSection">';
	echo '<h2 class="text-center">'.$current_year.'</h2>';

		// Table of months

		// loop the table of months
		
		echo '<ul class=calendar>';
		for ($section=1; $section<=12; $section++) {
				echo '<li">';
				$month++;

			// Month Cell

			echo '<section>';
			echo '<li class="title">'.$months[$month-1].'</li>';
			echo '<li class="day-header">';
				echo '<div class="large-1 day">Sunday</div>';
				echo '<div class="large-1 day">Monday</div>';
				echo '<div class="large-1 day">Tuesday</div>';
				echo '<div class="large-1 day">Wednesday</div>';
				echo '<div class="large-1 day">Thursday</div>';
				echo '<div class="large-1 day">Friday</div>';
				echo '<div class="large-1 day">Saturday</div>';					
			echo '</li>';

			$first_day_in_month=date('w',mktime(0,0,0,$month,1,$current_year));// gets the first Monday of current month
			$month_days=date('t',mktime(0,0,0,$month,1,$current_year));// gets number of days of current month
			
			echo '<li class="week">';
			
				
				//print out blank cells
				for($i=1; $i<=$first_day_in_month; $i++) {
					echo '<div class="large-1 day"> </div>';
			 	}
			//print days of the month
			//loops through days from 1-31 or 1-30
			
			for($day=1; $day<=$month_days; $day++) {
				$pos=($first_day_in_month)%7;
				echo '<div class="large-1 day">'.$day.'</div>';
			}	
			echo '</section>'; //close title or month
			echo '</li>';
		}
			echo '</ul>';
	
	echo '</section>';
?>	

</body>
</html>
