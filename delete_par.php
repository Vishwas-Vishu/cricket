<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"cricket");
	$query = "delete from paticipant where par_id = $_GET[id]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Participant Deleted...");
window.location.href = "ashow_Participant.php";
</script>