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
	  <div class="thumbnail_gallery">
                <h2>KAFUCO Gallery</h2>
				<p><font color="black">Click the image to view more...</font></p>
				<div id="myGallery" class="spacegallery">
                    <img src="images/With%20President.jpg" alt="With the President"/>
                    <img src="images/Certs.jpg" alt="Certifications" />
                    <img src="images/Professors.jpg" alt="Professors" />
                    <img src="images/Team.jpg" alt="Athletics Team" />
                    <img src="images/Team%202.jpg" alt="Educational friends" />
                    <img src="images/Bus.jpg" alt="The trasportation means" />
                    <img src="images/SOBBE.jpg" alt="School of Business" />
                    <img src="images/Students%20outside.jpg" alt="Students in group work" />
                    <img src="images/Admission.jpg" alt="Admission Process" />
                    <img src="images/Front.jpg" alt="Aeriel View" />

            </div>
			</div>
			  <div class="thumbnail_mission">
			  <h2>Vision</h2>
			  <p>To be a University of Excellence in Teaching, Learning, Research, Innovation and Holistic Development
			  </p>
			   <a class="btn btn-info" data-toggle="modal" href="#mission"><i class="icon-list-alt icon-large"></i>&nbsp;Read More</a>
			   	<div class="modal hide fade" id="mission">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	   <h2>Philosophy</h2>
<p><font color="black">
        KAFUCO endeavours to be ranked amongst the world class universities based on academic excellence and research that impact on societal needs.
</p>	  

	   <h2>Motto</h2>
<p><font color="black">
        Spring of Knowledge
</p>	 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
	  
		</div>
		</div>
			   
			  </div>
			  
			   <div class="thumbnail_vission">
			   <h2>Mission</h2><p>Campus Level</p>
			  <p>To provide quality education and training, research and innovation to meet the needs of a dynamic Society
			  </p>
			  <a class="btn btn-info" data-toggle="modal" href="#read_objectives"><i class="icon-list-alt icon-large"></i>&nbsp;Read More</a>
			  
			  	<div class="modal hide fade" id="read_objectives">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">�</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
          <h2>Mandate</h2>
     <p>The University College derives its mandate from University Act 2012 No.42, of 13th December, 2012, which stipulates the objectives as follows.</p>
     <p>* Advancement of knowledge through teaching, scholarship research and scientific investigation.</p>
     <p>* Promotion of learning in the students body and society in general.</p>
     <p>* Support and contribution to realization of national economic and social development.</p>
	 <p>* Promotion of high standards in and quality of teaching and research.</p>
	 <p>* Education, training and retraining high level professionals, technical and management personnel</p>
	 <p>* Dissemination of outcomes of research conducted by the university to general community.</p>
     <p>* Facilitation of life-long learning through provision of adult and continuing education.</p>
     <p>* Fostering of capacity for independent critical thinking among its students.</p>
     <p>* Promotion of gender balance and equality of opportunity among students and employees.</p>
     <p>* Promotion of equalization for persons with disabilities, minorities and other marginalized groups.</p>
     <p>* To contribute to agricultural, industrial and technological development of Kenya in collaboration with industrial and institutions through the transfer of appropriate technology.</p>
     <p>* To develop and provide education, culture professional, technological and vocational services to the community and in particular, foster corporate social responsibility.</p>
     <p>* To provide programmers, products and services in ways that reflects the principles of equity and social justice.</p>
     <p>* To facilitate student mobility between different programmers and different training institutions, universities and industry.</p>
     <p>* To foster the general welfare of all staff and students.</p>
	 </div>
<!--                    Another closing button-->
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>

		</div>
		</div>
			  </div>
			
	</div>
	<?php include('footer.php')?>	
</div>
</div>
</body>
</html>
