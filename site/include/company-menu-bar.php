<div class="careerfy-employer-dashboard-nav">
	<figure>
		<?php 
		$sqlv = "SELECT imagename, name FROM tbl_company WHERE id = '".$_SESSION['company_id']."'";
		$queryv = mysqli_query($connt, $sqlv);
		$rowv = mysqli_fetch_assoc($queryv);		
		
		?>	
	
		<a href="#" class="employer-dashboard-thumb"><img src="<?php echo SITE_URL; ?>uploads/company/<?php echo $rowv["imagename"]; ?>" alt="" style="height: 100%;max-width: 100%;"></a>
		
		<figcaption>
			<div class="careerfy-fileUpload">
				<!--<span><i class="careerfy-icon careerfy-add"></i> Upload Photo</span>
				<input type="file" class="careerfy-upload" />-->
			</div>
			<h2><?php echo $rowv["name"]; ?></h2>
		</figcaption>
	</figure>
	<ul>
		<?php $pagename  = basename($_SERVER['PHP_SELF']);?>
		
		
	
		<li <?php if($pagename == "company-dashboard-profile-seting.php"){ ?>  class="active" <?php } ?>><a href="<?php echo SITE_URL; ?>company-dashboard-profile-seting.php"><i class="careerfy-icon careerfy-user"></i> Company Profile</a></li>
		
		<li <?php if($pagename == "company-dashboard-manage-jobs.php"){ ?>  class="active" <?php } ?> ><a href="<?php echo SITE_URL; ?>company-dashboard-manage-jobs.php"><i class="careerfy-icon careerfy-briefcase-1"></i> Manage Jobs</a></li>
		<li <?php if($pagename == "employer-dashboard-newjob.php"){ ?>  class="active" <?php } ?> ><a href="<?php echo SITE_URL; ?>employer-dashboard-newjob.php"><i class="careerfy-icon careerfy-plus"></i> Post a New Job</a></li>
		
		<li <?php if($pagename == "employer-dashboard-resumes.php"){ ?>  class="active" <?php } ?> ><a href="<?php echo SITE_URL; ?>employer-dashboard-resumes.php"><i class="careerfy-icon careerfy-heart"></i> Shortlisted Resumes</a></li>

		<li <?php if($pagename == "company-dashboard-changed-password.php"){ ?>  class="active" <?php } ?> ><a href="company-dashboard-changed-password.php"><i class="careerfy-icon careerfy-multimedia"></i> Change Password</a></li>
		<li><a href="company-logout.php"><i class="careerfy-icon careerfy-logout"></i> Logout</a></li>
	</ul>
</div>