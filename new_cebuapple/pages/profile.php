<link rel="stylesheet" href="../assets/css/animate.min.css">
<link rel="stylesheet" href="../assets/css/animate-delay.css">
<link rel="stylesheet" href="../assets/lib/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-wysihtml5.css">
<link rel="stylesheet" type="text/css" href="../assets/datepicker/css/datepicker.css">
<link href="../assets/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<!-- <script src="../assets/lib/jquery/jquery.min.js"></script> -->
<script src="../assets/js/fileinput.js" type="text/javascript"></script>


<!-- for wysihtml5 textarea -->
<!-- <link rel="stylesheet" type="text/css" href="../assets/css/prettify.css"></link> -->
<style type="text/css" media="screen">
    .btn.jumbo {
        font-size: 20px;
        font-weight: normal;
        padding: 14px 24px;
        margin-right: 10px;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
    }
</style>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30181385-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- end -->

<style>
	.avatar{
		width: 80%;
		height: 80%;
	}
	.prof-img-con{
		margin-top: 23px;
	}
	#edit-profile{
		opacity: 0.7;
		background: black;
		width: 100%;
		height: 80px;
		margin-top: -80px;
		/* margin-left: 10%; */
		cursor: pointer;
	}
	.edit, .edit:active, .edit:visited{
		color: white;
		font-size: 24px;
	}
	.edit:hover{
		color: #EE6E73;
	}
	.del-skil, .del-skill:active, .del-skill:visited{
		color: black;
		font-size: 24px;
	}
	.del-skill:hover{
		color: #EE6E73;
	}

	.edit-resume:hover{ font-weight: bold; }
	/*.modal-dialog {
		position:absolute;
		top:50% !important;
		transform: translate(0, -50%) !important;
		-ms-transform: translate(0, -50%) !important;
		-webkit-transform: translate(0, -50%) !important;
		margin:auto 5%;
		width:90%;
		height:80%;
	}
	.modal-content {
	  	min-height:100%;
	  	position:absolute;
	  	top:0;
	  	bottom:0;
	  	left:0;
	  	right:0; 
	}
	.modal-body {
		position:absolute;
		top:45px; // height of header
		bottom:45px;  // height of footer
		left:0;
		right:0;
		overflow-y:auto;
	}
	.modal-footer {
	  	position:absolute;
	  	bottom:0;
	  	left:0;
	  	right:0;
	}*/
</style>
<div id="pcont" class="container-fluid">
	<!-- For Profile Update Notification -->
	<br/>
	<div id="success-alert" class="alert alert-success fade in" role="alert" style="display: none; float: right; width: 25%; z-index: 2;">
		Profile has been updated!
	</div>
	<!---->

    <div class="cl-mcont">
		<div class="row">

			<div id="heading" class="col-md-12 headline animated slideInDown">
				<h2>Lorenz Calang</h2>
				<p>Front-end Developer. Java Programmer. C Programmer.</p>

			</div>
			<div id="img-con" class="col-md-3 col-sm-6 prof-img-con animated slideInLeft">
				<img class="avatar" src="../assets/img/av.jpg" alt="">
			</div>

			<div class="col-md-3 col-sm-6">

				<div id="skillset-widget" class="profile-widget animated bounceInUp" style="background-color: white; padding-bottom: 5px; box-shadow: 0px 9px 26px -11px rgba(0,0,0,0.75);">
					<div style="background-color: #5C5757; padding: 5px;">
						<a style="color: white; font-size: 24px;">Skillset</a>
						<span style="float: right; margin-left: 10px;">
							<a href="#" title="Edit Skillset">
								<span data-toggle="modal" data-target="#mod-skill-edit">
								    <i class="fa fa-pencil edit"></i>
								</span>
							</a>
						</span>
						<span style="float: right;">
							<a href="#" title="Add Resume">
								<span data-toggle="modal" onclick="closeAddSkill(this)" data-target="#mod-skill-add">
									<i class="fa fa-plus edit"></i>
								</span>
							</a>
						</span>
					</div>
					<h6 style="padding-left: 5px;">UX Design</h6>
					<h6 style="padding-left: 5px;">HTML / CSS3 / SASS</h6>
					<h6 style="padding-left: 5px;">Javascript</h6>
					<h6 style="padding-left: 5px;">Ajax</h6>
				</div>

				<div id="social-widget" class="profile-widget animated flipInX">
					<h3>Social Profiles</h3>
					<ul class="widget-social">
						<li data-toggle="tooltip" title="Facebook"><a href="#"><i class="fa fa-facebook fa-fw" ></i></a></li>
						<li data-toggle="tooltip" title="Github"><a href="#"><i class="fa fa-github-alt" ></i></a></li>
						<li data-toggle="tooltip" title="Twitter"><a href="#"><i class="fa fa-twitter" ></i></a></li>
						<li data-toggle="tooltip" title="Google Plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>

			</div><!-- .col-md-3 -->

			<div class="col-md-6 col-sm-12">
				<div id="profile" class="animated rotateInDownRight" style="background-color: white; box-shadow: 0px 9px 26px -11px rgba(0,0,0,0.75);">
					<div style="background-color: #5C5757; padding: 5px;">
						<a style="color: white; font-size: 24px;">Profesional Profile</a>
						<span style="float: right;">
							<a href="#" title="Edit Profile">
								<span data-toggle="modal" data-target="#mod-prof-edit">
								    <i class="fa fa-pencil edit"></i>
								</span>
							</a>
						</span>
					</div>
					<p style="padding-left: 10px; padding-right: 10px;">
						I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. 
						I am so happy, my dear friend. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.
					 	I am so happy, my dear friend. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.
						I am so happy, my dear friend. I am so happy, my dear friend.
					</p>
					<p style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
						I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.
					</p>
				</div>
			</div>

		</div><!-- .row -->
		<div class="row">
			<div class="col-md-6 col-sm-12">

				<div id="education" class="animated fadeInLeft" style="background-color: white; box-shadow: 0px 9px 26px -11px rgba(0,0,0,0.75);">
					<div style="background-color: #5C5757; padding: 5px;">
						<a style="color: white; font-size: 24px;">Education</a>
						<span style="float: right; margin-left: 10px;">
							<a href="#" title="Edit Education">
								<span data-toggle="modal" data-target="#mod-educ-edit">
								    <i class="fa fa-pencil edit"></i>
								</span>
							</a>
						</span>
						<span style="float: right;">
							<a href="#" title="Add Education">
								<span data-toggle="modal" data-target="#mod-educ-add">
									<i class="fa fa-plus edit"></i>
								</span>
							</a>
						</span>
					</div>
					<?php
						$educ = array(
								array("Bachelor of Science in Information Technology", "University of Cebu - Main Campus", 2015),
								array("Bachelor of Science in Computer Engineering", "Cebu Institute of Technology - University", 2010),
								array("Computer Network Management", "Ateneo De La Salle University", 2007)
								);
						for($r = 0; $r < 3; $r++) {
							echo "<div style='padding: 5px;'>";
								echo "<ul style='list-style: none;'>";
								for($c = 0; $c < 3; $c++)
								{
									echo "<li>".$educ[$r][$c]."</li>";
								}
								echo "</ul>";
							echo "</div>";
						}
					?>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<!-- class name: prof-resume -->
				<div id="resume" class="prof-resume animated fadeInRight" style="background-color: white; box-shadow: 0px 9px 26px -11px rgba(0,0,0,0.75);">
					<div style="background-color: #5C5757; padding: 5px;">
						<a style="color: white; font-size: 24px;">Resume</a>
						<span style="float: right; margin-left: 10px;">
							<a href="#" title="Edit Resume">
								<span data-toggle="modal" data-target="#mod-res-edit">
								    <i class="fa fa-pencil edit"></i>
								</span>
							</a>
						</span>
						<span style="float: right; margin-left: 10px;">
							<a href="#" title="Upload Resume">
								<span data-toggle="modal" data-target="#mod-res-up">
									<i class="fa fa-upload edit"></i>
								</span>
							</a>
						</span>
						<span style="float: right;">
							<a href="#" title="Add Resume">
								<span data-toggle="modal" data-target="#mod-res-add">
									<i class="fa fa-plus edit"></i>
								</span>
							</a>
						</span>
					</div>
					
					<table class="table table-hover table-condensed">
						<thead>
							<th style="font-weight: bold; font-size: 16px;">
								Resume
							</th>
							<th style="font-weight: bold; font-size: 16px;">
								Date Added
							</th>
						</thead>
						<tbody>
							<tr>
								<td>
									resume.docx
								</td>
								<td>
									Aug 29, 2015
								</td>
							</tr>
							<tr>
								<td>
									resume with application letter.docx
								</td>
								<td>
									Jul 4, 2015
								</td>
							</tr>
							<tr>
								<td>
									written resume
								</td>
								<td>
									May 13, 2015
								</td>
							</tr>
							<tr>
								<td>
									resume.pdf
								</td>
								<td>
									Apr 1, 2015
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </div>

    <!-- Modal for Add Skillset -->
	<div class="modal fade" id="mod-skill-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" onclick="closeAddSkill(this)" aria-label="Close">
	        	<span aria-hidden="true">&times;</span>
	        </button>
	        <h4 class="modal-title" id="myModalLabel">Add Skillset</h4>
	      </div>
	      <div class="modal-body">

	      	<!-- Alert Message (SUCCESS) -->
	      	<div id="alertmsg-skill" class="alert alert-success fade in" role="alert" style="display: block;">
	      		Skill Added Successfully!
	      	</div>

	      	<!-- Alert Message (FAILED) -->
	      	<div id="alertmsg-skill-fail" class="alert alert-danger fade in" role="alert" style="display: block;">
				Failed Adding Skill!
			</div>



	      	<form>
	      		<div class="form-group">
	      			<label for="skillset">Skillset</label>
		      		<input id="skillset" type="text" class="form-control" placeholder="e.g. Ability to work under pressure , Budgeting, Communicating with young or old people">
		      	</div>
	      	</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" onclick="closeAddSkill(this)" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" onclick="addSkill(this)">Add</button>
	      </div>
	    </div>
	  </div>
	</div>

    <!-- Modal for Edit Skillset -->
	<div class="modal fade" id="mod-skill-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Edit Skillset</h4>
	      </div>
	      <div class="modal-body">
	      	<table class="table table-hover">
	      		<?php
		    		$skill = array("UX Design", "HTML / CSS3 / SASS", "Javascript", "Ajax");
		    		foreach($skill as $x){
		    			echo "<tr>";
		    			echo "<td>";
		    			echo $x."<a href='#'><span style='float: right;'><i class='fa fa-times del-skill'></i></span></a>";
		    			echo "</td>";
		    			echo "</tr>";
		    		}
		    	?>
	      	</table>
	    	
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" id="mod-prof-close" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

    <!-- Modal for Edit Profile -->
	<div class="modal fade" id="mod-prof-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
	      </div>
	      <div class="modal-body">
	        	
	        <!-- Alert Message (UPDATE) -->
	      	<div id="alertmsg-prof-info" class="alert alert-info fade in" role="alert" style="display: block;">
				Profile has been updated!
			</div>

	        <form class="form-group">
	        	<textarea id="textarea" class="form-control" placeholder="Write your profile here..." maxlength="250" style="height: 10em; width: 100%; resize: none;"></textarea>
	        	<div id="textarea_feedback"></div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" id="mod-prof-close" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

    <!-- Modal for Add Education -->
	<div class="modal fade" id="mod-educ-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" onclick="closeAddEduc(this)" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Add Education</h4>
	      </div>
	      <div class="modal-body">

	      	<!-- Alert Message (SUCCESS) -->
	      	<div id="alertmsg-ed" class="alert alert-success fade in" role="alert" style="display: block;">
	      		Education Added Successfully!
	      	</div>
	      	<!-- Alert Message (FAILED) -->
	      	<div id="alertmsg-ed-danger" class="alert alert-danger fade in" role="alert" style="display: block;">
				I understand you're a GENIUS, but that's ENOUGH!
			</div>

			<!-- Input Forms -->
	      	<form>
	      		<div class="form-group">
	      			<label for="course">Degree</label>
		      		<input id="course" type="text" class="form-control" placeholder="e.g. Bachelor, Master, Doctoral">
		      	</div>
		      	<div class="form-group">
					<label for="n_school">School</label>
		        	<input id="n_school" type="text" class="form-control" placeholder="e.g. University, Institute">
		      	</div>
		        <div class="form-group">
		        	<label for="grad_date">Year Graduated</label>
		        	<!-- <input id="grad_date" type="drop-down" class="form-control"> -->
		        	<select id="year">
		        		<?php
		        			for ($i=2015; $i >= 1970; $i--) { 
		        				echo "<option>".$i."</option>";
		        			}
		        		?>
		        	</select>
		      	</div>
	      	</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" onclick="closeAddEduc(this)" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" onclick="addEduc(this)">Add</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal for Edit Education -->
	<div class="modal fade" id="mod-educ-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Edit Education</h4>
	      </div>
	      <div class="modal-body">


	      	<table class="table table-hover" style="text-align: center;">
	      		
	      		<?php /*
	      			// $i = 0;
	      			for($i = 0; $i < 3; $i++)
	      			{
	      				echo "<tr>";
	      				echo " <td>";
	      				echo "  <div class='form-group'>
								  <input type='text' style='width: 100%' class='form-control' value='Bachelor of Science in Information Technology'>
							    </div>";
						echo " </td>";
						echo "<td>";
						echo "<button type='button' class='btn btn-danger' style='margin-top: 7%;'>Delete</button>";
						echo "</td>";
						echo "</tr>";
	      			}*/

	      			$educ_edit = array(
								array("Bachelor of Science in Information Technology", "University of Cebu - Main Campus", 2015),
								array("Bachelor of Science in Computer Engineering", "Cebu Institute of Technology - University", 2010),
								array("Computer Network Management", "Ateneo De La Salle University", 2007)
								);
	      			
	      			for($x = 0; $x <= 2; $x++){
	      				echo "<tr>";
	      				echo "<td>";
	      				echo "<form class='form-group'";
	      				for($y = 0; $y < 4; $y++){
	      					echo "<input type='text' class='form-control' value='".$educ_edit[$x][$y]."'>";
	      				}
	      				echo "</form";
	      				echo "</td>";
	      				echo "<td>";
	      				echo "<button type='button' class='btn btn-danger' style='margin-top: 10%;'>Delete</button>";
	      				echo "</td>";
	      				echo "</tr>";
	      			}
	      		?>
	      	</table>
	      	<!-- <div class="form-group">
		        <div class="checkbox">
					<label>
				    	<input type="checkbox" for="educ1"> <input type="text" style="width: 100%" class="form-control" value="Bachelor of Science in Information Technology">
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox">
					<label>
				    	<input type="checkbox" for="educ2"> <input type="text" class="form-control" value="Bachelor of Science in Computer Science">
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox">
					<label>
				    	<input type="checkbox" for="educ3"> <span><input type="text" class="form-control" value="Bachelor of Arts Major in Telecommunications"></span>
					</label>
				</div>
			</div> -->
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal for Add Resume-->
	<div class="modal fade bs-example-modal-lg" id="mod-res-add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Add Resume</h4>
	      </div>
	      <div class="modal-body">
	      	
	      	<!-- Alert Message (SUCCESS) -->
	      	<div id="alertmsg-res" class="alert alert-success fade in" role="alert" style="display: block;">
				Resume Added Succesfully!
			</div>
			
			<!-- Alert Message (FAILED) -->
			<div id="alertmsg-res" class="alert alert-danger fade in" role="alert" style="display: block;">
				Maximum Limit of Resumes!
			</div>


			<form class="form-group">
				<input id="res-title" type="text" class="form-control" placeholder="Title">
		        <textarea autofocus id="resume_add" class="form-control" placeholder="Write your resume here..." maxlength="5000" style="height: 40em; width: 100%; resize: none;" selected="selected"></textarea>
		    </form>
	      	<div id="div-textarea"></div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Add</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal for Upload Resume -->
	<div class="modal fade" id="mod-res-up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Upload Resume</h4>
	      </div>
	      <div class="modal-body">
	      	<form enctype="multipart/form-data">
                <div class="form-group">
                    <input id="file-4" type="file" class="file" data-upload-url="#">
                </div>
            </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal for Edit Resume -->
	<div class="modal fade" id="mod-res-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Edit Resume</h4>
	      </div>
	      <div class="modal-body">
	      	<table class="table table-hover"> 
	      		<?php 
	      			$resume = array("resume.docx", "resume with application letter.docx", "written resume", "resume(1).pdf");
	      			foreach ($resume as $i) {
	      				echo "<tr class='edit-resume'>";
		    			echo "<td>";
		    			echo "<a href='#' style='font-size: 16px;'>".$i."</a>"."<a href='#'><span style='float: right;'><i class='fa fa-times del-skill'></i></span></a>";
		    			echo "</td>";
		    			echo "</tr>";
	      			}
	      		?>
	      	</table>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
</div><!-- end of Container fluid -->

<script type="text/javascript">
//////////////////////////////////////////////////////////////////////
//For Skill Set Modal Script

// function addSkill(e){
// 	document.getElementById("skillset").value = '';
// 	document.getElementById("alertmsg-skill").style.display = "block";
// 	$('#alertmsg-skill').delay(2500).fadeOut(3000);
// }

// function closeAddSkill(e){
// 	document.getElementById("alertmsg-skill").style.display = "none";
// }

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//For Education Modal Script

// function addEduc(e){
// 	document.getElementById("course").value = '';
// 	document.getElementById("n_school").value = '';
// 	document.getElementById("year").value = '2015';
// 	document.getElementById("alertmsg-ed").style.display = "block";
// 	$('#alertmsg-ed').delay(2500).fadeOut(3000);
// }

// function closeAddEduc(e){
// 	document.getElementById("alertmsg-ed").style.display = "none";
// }

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//For Resume Modal Script

// function addResume(e){
// 	// document.getElementById();
// 	document.getElementById("alertmsg-res").style.display = "block";
// }

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

$(document).ready(function() {
    var text_max = 250;
    $('#textarea_feedback').html(text_max + ' characters remaining');

    $('#textarea').keyup(function() {
        var text_length = $('#textarea').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' characters remaining');
    });
});

$(document).ready(function() {
    var txt_max = 5000;
    $('#div-textarea').html(txt_max + ' characters remaining');

    $('#resume_add').keyup(function() {
        var txt_length = $('#resume_add').val().length;
        var txt_remaining = txt_max - txt_length;

        $('#div-textarea').html(txt_remaining + ' characters remaining');
    });
});

$("#file-4").fileinput({
		uploadExtraData: {kvId: '10'}
	});
    $(".btn-warning").on('click', function() {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });    
    $(".btn-info").on('click', function() {
        $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });
    /*
    $('#file-4').on('fileselectnone', function() {
        alert('Huh! You selected no files.');
    });
    $('#file-4').on('filebrowse', function() {
        alert('File browse clicked for #file-4');
    });
    */
</script>