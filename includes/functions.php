<?php

//use this function to clean values going into mysql
function mysql_prep($value)
{
	$magic_quotes_active = get_magic_quotes_gpc();//boolean - true if the quotes thing is turned on
	$new_enough_php = function_exists("mysql_real_escape_string");//boolean - true if the function exists (php 4.3 or higher)
	
	if($new_enough_php)
	{
		if($magic_quotes_active)
		{
			$value = stripslashes($value);//if its a new version of php but has the quotes thing running, then strip the slashes it puts in
		}
		$value = mysql_real_escape_string($value);//if its a new version use the function to deal with characters
	}
	else
		if(!$magic_quotes_active)//If its an old version, and the magic quotes are off use the addslashes function
		{
			$value = addslashes($value);
		}
	return $value;
}


function clean_up_ms($src)
{
	$src = str_replace("‘", "\'", $src);
	$src = str_replace("’", "\'", $src);
	$src = str_replace("”", '\"', $src);
	$src = str_replace("“", '\"', $src);
	$src = str_replace("–", "-", $src);
	$src = str_replace("…", "...", $src);
	return $src;	
}


function add_flag()
{
	if (isset($_POST['submit'])) //if post has been clicked
	{
		if(!empty ($_POST['subject']) && !empty ($_POST['message']))//if NOT empty
		{
			$subject = clean_up_ms(mysql_prep($_POST['subject']));
			$message = clean_up_ms(mysql_prep($_POST['message']));
			$name = clean_up_ms(mysql_prep($_POST['full-name']));
			$age = clean_up_ms(mysql_prep($_POST['age']));
			$country = clean_up_ms(mysql_prep($_POST['country']));
			$color = ($_POST['drop-down']);
			
			$query = "insert into flags values(' ', '$name', '$age', '$country', '$subject', '$message',  CURRENT_DATE, '$color')";
			$result = mysql_query($query);
			
			if (!$result)//no result print error
			{
				print "i got an error";
			}
		}
		else 
		{
			print "<p class='feedback error'>Please fill in all required fields</p>";
			print $query;
		}
	}
}


function display_flags()
{
	$query = "select id, name, age, country, subject, message, date, color from flags order by date DESC";
	$result = mysql_query($query);
	
	while($row = mysql_fetch_row($result))
	{
		list ($id, $name, $age, $country, $subject, $message, $date, $color) = $row;
		print "
			<div class='show-flags $color'>
				<h3>$subject</h3>
					<p class='output-message'>$message</p>
					<p class='output'>By: $name</p>
					<p class='output'>Age: $age</p>
					<p class='output'>Country: $country</p>
					<p class='output'>$date</p>
						<div id='social'>
							<img src='img/32x32/facebook.png'/>
							<img src='img/32x32/twitter2.png'/>
							<img src='img/32x32/googleplusone.png'/>
						</div>
			</div>";
	}
}


function get_width()
{
	$query = "select count(id) from flags";
	$result = mysql_query($query);
	$num_rows = mysql_fetch_row($result);
	$total_rows = $num_rows[0];
	$total_rows = $total_rows * 660;
	return $total_rows;
}


function flag_counter ()
{
	$query = "SELECT COUNT( * ) FROM flags";
	$result = mysql_query($query);
	echo $result;
}

?>