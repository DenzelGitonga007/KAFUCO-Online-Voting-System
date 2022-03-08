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
	<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>Date</th>
				<th>Action</th>
				<th>Data</th>
				<th>User</th>
				</tr>
			</thead>
			<tbody>

<?php $history_query=mysqli_query($conn,"select  * from history");
		while($history_rows=mysqli_fetch_array($history_query)){ $id=$history_rows['history_id'];?>

<tr class="del<?php echo $id ?>">
	<td>&nbsp;<?php echo $history_rows['date']; ?></td>
	<td><?php echo $history_rows['action']; ?></td>
	<td><?php echo $history_rows['data']; ?></td>
	<td>&nbsp;<?php echo $history_rows['user']; ?></td>
		
	
	</tr>
<?php } ?>

			</tbody>
		</table>
	</div>
	</div>
	<?php include('footer.php')?>	
</div>
</body>
</html>
