<?php
include('session.php');
include('header.php');
include('dbcon.php');
?>
</head>

<body>
<?php include('nav_top.php'); ?>
<div class="wrapper">
 
<div class="home_body">
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid" style="background-color: #b58815;">
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="home.php" class="btn btn-success">
                        Home
                    </a>
                </li>

                <li>
                    <a  href="candidate_list.php" class="btn btn-success" style="color: whitesmoke;">
                        Candidates List
                    </a>
                </li>

                <li>
                    <a  href="voter_list.php" class="btn btn-success" style="color: whitesmoke;">
                        Voters List
                    </a>
                </li>
                <li>
                    <a  href="canvassing_report.php" class="btn btn-success" style="color: whitesmoke;">
                        Canvassing Report
                    </a>
                </li>
                <li>
                    <a  href="History.php" class="btn btn-success" style="color: whitesmoke;">
                        History Log
                    </a>
                <li>
                    <a data-toggle="modal" href="#about" class="btn btn-success" style="color: whitesmoke;">
                        About
                    </a>
                </li>

                <div class="modal hide fade" id="about">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">X</button>
                        <h3> </h3>
                    </div>
                    <div class="modal-body">
                        <?php include('about.php') ?>
                        <!--          Another close button below the pop-up-->
                        <!--	  <div class="modal-footer_about">-->
                        <!--	    <a href="#" class="btn" data-dismiss="modal">Close</a>-->
                        <!--		</div>-->
                    </div>
	 </ul>
            <form class="navbar-form pull-right">
                <?php $result=mysqli_query($conn,"select * from users where User_id='$id_session'");
                $row=mysqli_fetch_array($result);
                ?>
                <font color="#f5f5f5">Welcome:<?php echo $row['User_Type']; ?></font>
                <a class="btn btn-danger" id="logout" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Logout</a>
                <div class="modal hide fade" id="myModal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">�</button>
                        <h3> </h3>
                    </div>
                    <div class="modal-body">
                        <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-info" data-dismiss="modal">No</a>
                        <a href="logout.php" class="btn btn-success">Yes</a>
                    </div>
                </div>

            </form>
	</div>
	</div>
	</div>
	<div id="element" class="hero-body" style="background-color: #268b23; border: 1px solid;">
	    <div class="pagination">
    <ul>

        <li class="active"><a href="candidate_list.php" class="btn btn-info" style="color: whitesmoke;">All</a></li>
        <li><a href="candidate_for_governor.php" class="btn btn-info" style="color: whitesmoke">Governor</a></li>
        <li><a href="candidate_for_vice-governor.php" class="btn btn-info" style="color: whitesmoke">Vice-Governor</a></li>
        <li><a href="1st_year.php" class="btn btn-info" style="color: whitesmoke">1st Year Representative</a></li>
        <li><a href="2nd_year.php" class="btn btn-info" style="color: whitesmoke">2nd Year Representative</a></li>
        <li><a href="3rd_year.php" class="btn btn-info" style="color: whitesmoke">3rd Year Representative</a></li>
        <li><a href="4th_year.php" class="btn btn-info" style="color: whitesmoke">4th Year Representative</a></li>
   
 
  
    </ul>
    </div>
	<?php
	$query=mysqli_query($conn,"select  * from candidate");
	$row=mysqli_fetch_array($query); $id_excel=$row['CandidateID'];	
	?>
	
		<form method="POST" action="canvassing_excel.php">
	<input type="hidden" name="id_excel" value="<?php echo $id_excel; ?>">
	<button id="save_voter" class="btn btn-success" name="save"><i class="icon-download icon-large"></i>Download Excel File</button>
	</form>
	<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th class="hide">Abc</th>
				<th>Position</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>Year</th>
			
				<th>Photo</th>
				<th>No. of Votes</th>
				
				</tr>
			</thead>
			<tbody>

<?php $candidate_query=mysqli_query($conn,"select  * from candidate");
		while($candidate_rows=mysqli_fetch_array($candidate_query)){ $id=$candidate_rows['CandidateID'];
		$fl=$candidate_rows['FirstName'];
	
		?>

<tr class="del<?php echo $id ?>">
	<td align="center" class="hide"><?php echo $candidate_rows['abc']; ?></td>
	<td align="center"><?php echo $candidate_rows['Position']; ?></td>
	<td><?php echo $candidate_rows['FirstName']; ?></td>
	<td><?php echo $candidate_rows['LastName']; ?></td>
	<td align="center"><?php echo $candidate_rows['Year']; ?></td>
	
	<td align="center"><img class="pic" width="40" height="30" src="<?php echo $candidate_rows['Photo'];?>" border="0" onmouseover="showtrail('<?php echo $candidate_rows['Photo'];?>','<?php echo $candidate_rows['FirstName']." ".$candidate_rows['LastName'];?> ',200,5)" onmouseout="hidetrail()"></a></td>
		<td align="center">
	<?php $votes_query=mysqli_query($conn,"select * from votes where CandidateID='$id'");
	$vote_count=mysqli_num_rows($votes_query);
	echo $vote_count;
	?>
</td>	




	
	
	
<input type="hidden" name="data_name" class="data_name<?php echo $id ?>" value="<?php echo $candidate_rows['FirstName']." ".$candidate_rows['LastName']; ?>"/>
	<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>"/>
	
	</tr>
<?php } ?>

			</tbody>
		</table>
	</div>	
	</div>	
	
<?php include('footer.php')?>
	
</div>
<input type="hidden" class="pc_date" name="pc_date"/>
<input type="hidden" class="pc_time" name="pc_time"/>
</body>
</html>
