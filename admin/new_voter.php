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

                        <li>
                            <a href="home.php" class="btn btn-success" style="color: whitesmoke">
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
                        <!--                        About details-->
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

	<form id="save_voter" class="form-horizontal">
	<input type="hidden" class="pc_date" name="pc_date"/>
	<input type="hidden" class="pc_time" name="pc_time" />
	<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>"/>
	
    <fieldset>
 	    <div class="pagination" style="text-shadow: none;">
    <ul>

    <li><a href="voter_list.php"><font color="white">All</font></a></li>
    <li  class=""><a href="Voted_voters.php"><font color="white">Voted Voters</font></a></li>
    <li  class=""><a href="Unvoted_voters.php"><font color="white">UnVoted Voters</font></a></li>
    <li  class="active"><a href="new_voter.php"><font color="white"><i class="icon-plus icon-large"></i>Add Voters</font></a></li>
  
   
 
  
    </ul>
    </div>
	
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
  
	<div class="control-group">
    <label class="control-label" for="input01">FirstName:</label>
    <div class="controls">
    <input type="text" name="FirstName" class="FirstName">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">LastName:</label>
    <div class="controls">
    <input type="text" name="LastName" class="LastName">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">MiddleName:</label>
    <div class="controls">
   <input type="text" name="Section" class="Section">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01" >Year Level:</label>
    <div class="controls">
   <select name="Year" class="Year" id="span2">
	<option>1st year</option>
	<option>2nd year</option>
	<option>3rd year</option>
	<option>4th year</option>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">UserName:</label>
    <div class="controls">
  <input type="text" name="UserName" class="UserName">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Password:</label>
    <div class="controls">
  <input type="text" name="Password" class="Password">
    </div>
    </div>
	
	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
    </fieldset>
    </form>
	
	
    </div>
    </li>
    </ul>
	
	<?php include('footer.php'); ?>	
	</div>
	</div>
	</div>
		
	
	
</div>

</body>
</html>

<script type="text/javascript">
$(document).ready( function () {

/*  another date shit*/

var myDate = new Date();
var pc_date = (myDate.getMonth()+1) + '/' + (myDate.getDate()) + '/' + myDate.getFullYear();
var pc_time = myDate.getHours()+':'+myDate.getMinutes()+':'+myDate.getSeconds();
jQuery(".pc_date").val(pc_date);
jQuery(".pc_time").val(pc_time);
/*asta d*/

jQuery('#save_voter').submit(function(e){
    e.preventDefault();
var FirstName = jQuery('.FirstName').val();
var LastName = jQuery('.LastName').val();
var Section = jQuery('.Section').val();
var Year = jQuery('.Year').val();
var UserName = jQuery('.UserName').val();
var Password = jQuery('.Password').val();
	
    e.preventDefault();
if (FirstName && LastName && Section && Year && UserName && Password){	
    var formData = jQuery(this).serialize();	
	
    jQuery.ajax({
        type: 'POST',
        url:  'save_voter.php',
        data: formData,
             success: function(msg){
            showNotification({
message: "Voter Successfully Added",
type: "success", 
autoClose: true, 
duration: 5 

});

		 var delay = 2000;
		setTimeout(function(){ window.location = 'voter_list.php';}, delay);  
	
        }
    });
	
}else
{
alert('All fields are required!');
return false;
}	
});


});
</script>