<?php
	function get_coach_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"cricket");
		$coach_count = "";
		$query = "select count(*) as c_id from coaches";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$coach_count = $row['c_id'];
		}
		return($coach_count);
    }

    function get_par_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"cricket");
		$par_count = "";
		$query = "select count(*) as par_id from paticipant";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$par_count = $row['par_id'];
		}
		return($par_count);
    }

    function get_user_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"cricket");
		$user_count = "";
		$query = "select count(*) as user_count from users";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_count = $row['user_count'];
		}
		return($user_count);
    }

    function get_courses_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"cricket");
		$course_count = "";
		$query = "select count(*) as c_id from courses";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$course_count = $row['c_id'];
		}
		return($course_count);
    }

?>