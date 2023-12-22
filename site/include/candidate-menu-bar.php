<div class="careerfy-employer-dashboard-nav">
	<figure>
		<a href="#" class="employer-dashboard-thumb">
		<!--<img src="extra-images/candidate-dashboard-navthumb.jpg" alt="">-->
		<?php 
		$sqlv = "SELECT imagename, name, required_skills FROM tbl_candidate WHERE id = '".$_SESSION['candidate_id']."'";
		$queryv = mysqli_query($connt, $sqlv);
		$rowv = mysqli_fetch_assoc($queryv);		
		
		?>
		<img src="<?php echo SITE_URL; ?>uploads/candidate/<?php echo $rowv["imagename"]; ?>" alt="" style="height: 100%;max-width: 100%;">
		</a>
		<figcaption>
			<!--<div class="careerfy-fileUpload">
				<span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span>
				<input type="file" class="careerfy-upload" />
			</div>-->
			<h2><?php echo $rowv["name"]; ?></h2>
			<span class="careerfy-dashboard-subtitle"><?php echo $rowv["required_skills"]; ?> Developer</span>
		</figcaption>
	</figure>
	<ul>
		<li class="active"><a href="candidate-dashboard-profile-seting.php"><i class="careerfy-icon careerfy-user"></i> My Profile</a></li>
		<!--<li><a href="candidate-dashboard-resume.php"><i class="careerfy-icon careerfy-resume"></i> My Resume</a></li>-->
		<!--<li><a href="candidate-dashboard-saved-jobs.html"><i class="careerfy-icon careerfy-heart"></i> Saved jobs</a></li>-->
		<li><a href="candidate-dashboard-applied-jobs.php"><i class="careerfy-icon careerfy-briefcase-1"></i> Applied jobs</a></li>
		<li><a href="candidate-dashboard-job-alert.html"><i class="careerfy-icon careerfy-alarm"></i> Job Alerts</a></li>
		<!--<li><a href="candidate-dashboard-cv-manager.html"><i class="careerfy-icon careerfy-id-card"></i> CV Manager</a></li>-->
		<li><a href="candidate-dashboard-changed-password.php"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a></li>
		<li><a href="candidate-logout.php"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
	</ul>
</div>