<header id="careerfy-header" class="careerfy-header-two">

            <aside class="col-md-2"> <a href="<?php echo SITE_URL; ?>" class="careerfy-logo"><img src="images/logo-two.png" alt="" class="img_logo"></a> </aside>
            <aside class="col-md-10">
                <div class="careerfy-right">
                    <nav class="careerfy-navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#careerfy-navbar-collapse-1" aria-expanded="false">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="careerfy-navbar-collapse-1">
                            <ul class="navbar-nav">
                                    <li class="active"><a href="<?php echo SITE_URL; ?>">Jobs</a></li>
                                    <!--<li><a href="companies_hiring.php">Companies hiring</a></li>
                                    <li><a href="#">Career tools</a></li>
                                    <li><a href="#">Blog</a></li>-->
									
									<?php if(isset($_SESSION['candidate_id']) AND ($_SESSION['candidate_login']==1)){?>
										<?php /*?><li><a href="candidate-logout.php">Logout</a></li><?php */?>
										<li><a href="candidate-dashboard-profile-seting.php">Dashboard</a></li>
									<?php }elseif(isset($_SESSION['company_id']) AND ($_SESSION['company_login']==1)) {?>
										<li><a href="company-dashboard-profile-seting.php">Dashboard</a></li>
									<?php }else{ ?>							
										<li><a href="candidate-login.php">Candidate</a></li>
										<li><a href="company-login.php">Company</a></li>
									<?php }?>
                                </ul>
                        </div>
                    </nav>
                    <!--<ul class="careerfy-user-option">
                        <li><a href="#" class="careerfy-post-btn"><i class="careerfy-icon careerfy-arrows-2"></i> Post Job</a></li>
                        <li><a href="#" class="careerfy-btn-icon careerfy-open-signin-tab"><i class="careerfy-icon careerfy-social-1"></i></a></li>
                    </ul>-->
                </div>
            </aside>

        </header>