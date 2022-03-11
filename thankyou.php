<?php 
include('session.php');
include('dbcon.php');
include('header.php');
 ?>
 <link rel="stylesheet" type="text/css" href="admin/css/style.css" />
 <script type="text/javascript">
	$(document).ready(function()
		{
		 var delay = 200000;
		setTimeout(function(){ window.location = 'index.php';}, delay);  
    });
	
	

</script>

<script src="jquery.iphone-switch.js" type="text/javascript"></script>
</head>
<body>
<!--The voters header file-->
<?php include('voters_nav_top.php'); ?>
<div class="wrapper">
<?php 
$result=mysqli_query($conn,"select * from voters where VoterID='$session_id'") or die(mysqli_error());
$row=mysqli_fetch_array($result);
?>
<div class="thank_you" style="background-color: #268b23; text-shadow: none;">
<div class="thank">
<h2><font size="6" color="white">Thank You For Voting:&nbsp;&nbsp;<?php echo $row['FirstName']." ".$row['LastName'];?></font></h2>
</div>
<?php session_destroy(); ?>

</div>
</div>




	
</div>

    </body>
	
</html>
												
											
	