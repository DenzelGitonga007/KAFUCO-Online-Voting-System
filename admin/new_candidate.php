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

        <!--	The links to the candidates in each division-->
	<div id="element" class="hero-body" style="background-color: #268b23; border: 1px solid;">
	
	<form method="POST" action="save_candidate.php" class="form-horizontal" enctype="multipart/form-data">
	<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>"/>
    <fieldset>
   	       <div class="pagination">
    <ul>

        <li  class="active"><a href="candidate_list.php" class="btn btn-info" style="color: whitesmoke;">All</a></li>
        <li><a href="candidate_for_governor.php" class="btn btn-info" style="color: whitesmoke">Governor</a></li>
        <li><a href="candidate_for_vice-governor.php" class="btn btn-info" style="color: whitesmoke">Vice-Governor</a></li>
        <li><a href="1st_year.php" class="btn btn-info" style="color: whitesmoke">1st Year Representative</a></li>
        <li><a href="2nd_year.php" class="btn btn-info" style="color: whitesmoke">2nd Year Representative</a></li>
        <li><a href="3rd_year.php" class="btn btn-info" style="color: whitesmoke">3rd Year Representative</a></li>
        <li><a href="4th_year.php" class="btn btn-info" style="color: whitesmoke">4th Year Representative</a></li>



    </ul>


    </div>

	<div class="pagination">
        <ul>
            <li>
                <a href="new_candidate.php" style="text-shadow: none; color: whitesmoke;">
                    <i class="icon-plus icon-large"></i>Add Candidates
                </a>
            </li>
        </ul>
	</div>
	<div class="candidate_margin" >
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter"style="background-color: whitesmoke; text-shadow: none;">
   
	<div class="control-group">
    <label class="control-label" for="input01">FirstName:</label>
    <div class="controls">
    <input type="text" name="rfirstname" class="rfirstname">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">LastName:</label>
    <div class="controls">
    <input type="text" name="rlastname" class="rlastname">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Gender:</label>
    <div class="controls">
   <select name="rgender" class="rgender" id="span2">
	<option>Male</option>
	<option>FeMale</option>
	
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Year Level:</label>
    <div class="controls">
   <select name="ryear" class="ryear" id="span2">
	<option>1st year</option>
	<option>2nd year</option>
	<option>3rd year</option>
	<option>4th year</option>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">MiddleName:</label>
    <div class="controls">
    <input type="text" name="rmname" class="rmnane">
    </div>
    </div>
	

	
	<div class="control-group">
    <label class="control-label" for="input01">Position:</label>
    <div class="controls">
   <select name="rposition" class="rposition" id="span22">
	<option>Governor</option>
	<option>Vice-Governor</option>
	<option>1st Year Representative</option>
	<option>2nd Year Representative</option>
	<option>3rd Year Representative</option>
	<option>4th Year Representative</option>
	
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Party:</label>
    <div class="controls">
    <input type="text" name="party" class="party">
    </div>
    </div>
	
	
	<div class="control-group">
	<label class="control-label" for="input01">Image:</label>
    <div class="controls">
	<input type="file" name="image" class="font"> 
    </div>
    </div>

	
	
	<div class="control-group">
    <div class="controls">
		<button class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
    </fieldset>
    </form>
	
	</div>
	<?php include('footer.php')?>	
</div>
</div>
</div>
</body>
</html>
	  