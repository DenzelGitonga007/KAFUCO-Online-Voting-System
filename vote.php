<?php 
include('session.php');
include('dbcon.php');
include('header.php');
 ?>
<?php
if (isset($_POST['vote'])){
$gov=$_POST['gov'];
mysqli_query($conn,"insert into votes (CandidateID)values('$gov')")or die(mysqli_error());

$vice=$_POST['vice'];
mysqli_query($conn,"insert into votes (CandidateID)values('$vice')")or die(mysqli_error());

$rep1=$_POST['rep1'];
mysqli_query($conn,"insert into votes (CandidateID)values('$rep1')")or die(mysqli_error());


$rep2=$_POST['rep2'];
mysqli_query($conn,"insert into votes (CandidateID)values('$rep2')")or die(mysqli_error());

$rep3=$_POST['rep3'];
mysqli_query($conn,"insert into votes (CandidateID)values('$rep3')")or die(mysqli_error());


mysqli_query($conn,"update voters set Status='Voted' where VoterID='$session_id'") or die(mysqli_error());

?>

<?php

_redirect('thankyou.php');
}
?>
<link rel="stylesheet" type="text/css" href="admin/css/style.css" />
<script src="jquery.iphone-switch.js" type="text/javascript"></script>
</head>
<body>
<!--The voters header file-->
<?php include('voters_nav_top.php'); ?>
<br><div class="wrapper">
<!--The Back button-->
<div class="hero-body-voting" style="background-color: #b58815;">
<div class="vote_wise1" style="text-shadow: none;"><font color="white" size="6">"Official Ballot"</font></div>
<div class="back">
<a class="btn btn-success" id="bak"  href="voting.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
</div>
</div>

<div class="hero-body-456" >
</div>

<form method="POST">

<?php 

if (isset($_POST['save'])){
$governor=$_POST['governor'];
$vice1=$_POST['vice'];
$representative1=$_POST['representative1'];
$representative2=$_POST['representative2'];
$representative3=$_POST['representative3'];

if($representative1=='--Select Candidate--' &&  $representative2=='--Select Candidate--'  && $representative3=='--Select Candidate--'){
echo '';
}
if($representative1=='--Select Candidate--' &&  $representative3=='--Select Candidate--' ){
echo '';
}else if($representative2=='--Select Candidate--' &&  $representative3=='--Select Candidate--' ){

echo '';

}else if($representative1=='--Select Candidate--' &&  $representative2=='--Select Candidate--' ){

echo '';

}


else if($representative1==$representative2  || $representative1==$representative3){
?>
<script type="text/javascript">
alert('Same Representative is not aloud');
window.location="voting.php";
</script>
<?php
}
else if($representative2==$representative1  || $representative2==$representative3
 ){
?>
<script type="text/javascript">
alert('Same Representative is not aloud');
window.location="voting.php";
</script>
<?php
}
else if($representative3==$representative1  || $representative3==$representative2
 ){
?>
<script type="text/javascript">
alert('Same Representative is not aloud');
window.location="voting.php";
</script>
<?php
}
}

//governor
$result=mysqli_query($conn,"select * from candidate where CandidateID='$governor'")or die(mysqli_query($conn,));
$row=mysqli_fetch_array($result);
$name=$row['FirstName']."  ".$row['LastName'];
//
//vice-governor
$vice=mysqli_query($conn,"select * from candidate where CandidateID='$vice1'")or die(mysqli_query($conn,));
$row_vice=mysqli_fetch_array($vice);

$name1=$row_vice['FirstName']."  ".$row_vice['LastName'];
//
//Representative1
$Representative1=mysqli_query($conn,"select * from candidate where CandidateID='$representative1'")or die(mysqli_query($conn,));
$Representative1_row=mysqli_fetch_array($Representative1);

$name2=$Representative1_row['FirstName']."  ".$Representative1_row['LastName'];
//
//Representative2
$Representative2=mysqli_query($conn,"select * from candidate where CandidateID='$representative2'")or die(mysqli_query($conn,));
$Representative2_row=mysqli_fetch_array($Representative2);

$name3=$Representative2_row['FirstName']."  ".$Representative2_row['LastName'];
//

//Representative3
$Representative3=mysqli_query($conn,"select * from candidate where CandidateID='$representative3'")or die(mysqli_query($conn,));
$Representative3_row=mysqli_fetch_array($Representative3);

$name4=$Representative3_row['FirstName']."  ".$Representative3_row['LastName'];
//



 ?>
<!--What will be displayed upon voting-->
<div class="ballot" style="background-color: #268b23; border: 1px solid; border-radius: 6px; color:whitesmoke; text-shadow: none; ">

<div class="cent">
<p>Governor:&nbsp;&nbsp;</p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php  echo $name; 
if ($governor == "--Select Candidate--"){
echo 'NO Candidate Selected'; 
}
?>



 <input type="hidden" name="gov" value="<?php echo $governor; ?>"/>
 
</div>
</br>
</br>
<div class="cent">
<p>Vice-Governor:&nbsp;&nbsp;</p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php  echo $name1;
if ($vice1 == "--Select Candidate--"){
echo 'NO Candidate Selected'; 
}

 ?>
 <input type="hidden" name="vice" value="<?php echo $vice1; ?>"/>
</div>
</br>
</br>
<div class="cent">
<p>1st Year Representative:&nbsp;&nbsp;</p>

<div class="rep2">
<?php  ?>
<?php
if ($representative1=='--Select Candidate--' && $representative2=='--Select Candidate--' && $representative3=='--Select Candidate--'){
echo 'No Candidate Selected';
}else{
echo $name2; 
}
?>
 <input type="hidden" name="rep1" value="<?php echo $representative1; ?>"/>
</div>
<div class="rep2">
<?php  echo $name3; ?>
 <input type="hidden" name="rep2" value="<?php echo $representative2; ?>"/>
</div>
<div class="rep2">
<?php  echo $name4; ?>
 <input type="hidden" name="rep3" value="<?php echo $representative3; ?>"/>
</div>


</div>



</div>

<!--Inserting into the votes reports. -->
<?php
if (isset($_POST['vote'])){
$gov=$_POST['gov'];
mysqli_query($conn,"insert into votes (CandidateID)values('$gov')")or die(mysqli_error());

$vice=$_POST['vice'];
mysqli_query($conn,"insert into votes (CandidateID)values('$vice')")or die(mysqli_error());

$rep1=$_POST['rep1'];
mysqli_query($conn,"insert into votes (CandidateID)values('$rep1')")or die(mysqli_error());


$rep2=$_POST['rep2'];
mysqli_query($conn,"insert into votes (CandidateID)values('$rep2')")or die(mysqli_error());

$rep3=$_POST['rep3'];
mysqli_query($conn,"insert into votes (CandidateID)values('$rep3')")or die(mysqli_error());


mysqli_query($conn,"update voters set Status='Voted' where VoterID='$session_id'") or die(mysqli_error());

?>

<?php

_redirect('thankyou.php');
}
?>

<div class="hero-body-456" style="background-color: #b58815; text-shadow: none;">
<div class="ok_vote">

		<a class="btn btn-success" id="logout" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Submit Final Votes</a>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">X</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to Submit Final Votes?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn btn-info" data-dismiss="modal">No</a>
		<button id="save_voter" class="btn btn-success" name="vote"><i class="icon-save icon-large"></i>&nbsp;Yes</button>
		</div>
		</div>
	</div>
</div>



</form>
	<?php include('footer1.php')?>	
</div>

    </body>
	
</html>
												
											
	