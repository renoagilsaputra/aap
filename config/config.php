<?php 
//Connection
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "aap";

	$conn = new mysqli($host,$user,$pass,$db);

	if($conn->connect_errno) {
		echo $conn->connect_error();
	}

//function
	function val($i) {
		global $conn;
		return $conn->real_escape_string($i);
	}
	function alert($a) {
		echo "<script>
				alert('".$a."');
			</script>";
	}
	function redir($r) {
		echo "<script>
				document.location = '".$r."';
			</script>";
	}
	function error($e) {
		echo "<div class='alert alert-danger alert-dismissible fade show'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>ERROR!</strong> '".$e."'
            </div>";
	}
?>