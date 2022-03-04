<?php session_start(); ?>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php include('dbcon.php');
include('header.php');
 ?>
</head>
<body style="background: whitesmoke;">

	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container-fluid" style="background-color: #268b23; height: 20vh;">
	     <div class="nav_align" style="display: block; align-items: center; justify-content: space-around;">
		<a class="brand">
		<img src="images/kafuco%20logo%20white%20bg.png" width="70" height="70";>
 	</a>
	<a class="brand">
	 <h2 style="color: #d9a43a;font-style: normal; font-size: 35px; text-align: justify;text-shadow:lightseagreen;">KAFUCO Voting System</h2>
	 <div class="chmsc_nav" style="color: whitesmoke; text-shadow: none; text-align: justify;">Conducting transparent, efficient, and impartial elections</div>
 	</a>
         </div>

	<?php include('head.php'); ?>

	</div>
	</div>
	</div>
<div class="wrapper_admin">
</br>
</br>
</br>
<!--    The login form-->
	<div id="element" class="hero-body-index" style="background-color: darkgoldenrod; border: 1px solid;">

	<p><h2 style="color: #17eb25; text-shadow:none;">Admin Login</h2></p>
	
	<form method="POST">
	<table>
    <tr>
        <td style="color: whitesmoke; text-shadow: none;">UserName:&nbsp;&nbsp;</td> &nbsp;&nbsp;
        <td>
             <input type="text"  name="UserName" class="UserName_hover">
        </td>
    </tr>
<!--        The spacing-->
	<tr>
        <td style="color: darkgoldenrod;">...<td>
    </tr>
    <tr>
        <td style="color: whitesmoke; text-shadow: none;">Password:&nbsp;&nbsp;</td>
        <td>
            <input type="Password" name="Password" class="Password_hover">
        </td>
    </tr>
<!--        The spacing-->
	<tr>
        <td style="color: darkgoldenrod;">...<td></tr>
	<tr><td></td><td>
	<button class="btn btn-success" name="Login"><i class="icon-ok icon-large"></i>&nbsp;Login</button>
	</td></tr>
	<tr><td>
	</td><tr>
	</form>
	</table>
	
	</br>
	<div class="error">
	<?php

if (isset($_POST['Login'])){

$UserName=$_POST['UserName'];
$Password=$_POST['Password'];

$login_query=mysqli_query($conn,"select * from users where UserName='$UserName' and Password='$Password'");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);
$f=$row['FirstName'];
$l=$row['LastName'];

if ($count > 0){
$_SESSION['id']=$row['User_id'];
$_SESSION['User_Type']=$row['User_Type'];
$type=$row['User_Type'];

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Login', NOW(),'$type')")or die(mysqli_error());


_redirect('home.php');
}else{
?>
    <div class="alert alert-error">
    <button class="close" data-dismiss="alert">�</button>
   Please check your UserName and Password
    </div>
<?php } 

}

?>	
</div>
</div>
</br>
</br>
</br>
</br>
</br>

	<?php include('footer3.php')?>	
</div>

    </body>
	
</html>
																				
											
	