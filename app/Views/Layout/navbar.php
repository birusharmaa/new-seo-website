<?php $session = \Config\Services::session()?>
<div class="main-header side-header sticky">
	<div class="container-fluid">
		<div class="main-header-left">
			<a class="main-header-menu-icon" href="#" id="mainSidebarToggle"
				><span></span
			></a>
		</div>
		<div class="main-header-center">
			<div class="responsive-logo">
				<a class="main-logo text-white" href="#"> SEO </a>
			</div>
		
		</div>
		<div class="main-header-right">
			<div class="dropdown d-md-flex">
				<a class="nav-link icon full-screen-link" href="#">
					<i
						class="fe fe-maximize fullscreen-button fullscreen header-icons"
					></i>
					<i
						class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"
					></i>
				</a>
			</div>
			
			<?php 
			if($session->has('login_user')){
				$user_data = $session->get('login_user');
				$status = "Online";
			}
			?>
			
			<div class="dropdown main-profile-menu">
				<a class="d-flex" href="#">
					<span class="main-img-user">
						<?php if($user_data['business_logo'] ){ ?>
							<img alt="avatar" src="<?php echo base_url().env('SEO_SUBPATH')."/uploads/img/business_logo/".$user_data['business_logo'] ?>"/>
						<?php }else{ ?>
							<img alt="avatar" src="<?= env('SEO_SUBPATH');?>/assets/img/users/1.jpg"/>
						<?php }?>	
					</span>
				</a>
				
				<div class="dropdown-menu">
					<div class="header-navheading">
						<h6 class="main-notification-title"><?php echo $user_data['user_name']; ?></h6>
						<p class="main-notification-text text-success"><?php echo $status; ?></p>
					</div>
				
					<a class="dropdown-item border-top" href="<?=base_url();?>/manage/profile">
						<i class="fe fe-user"></i> My Profile
					</a>
					<a class="dropdown-item" href="<?php echo base_url('manage/sign-out')?>">
						<i class="fe fe-power"></i> Sign Out
					</a>
					<div class="swichermainleft my-4">
						<h5 class="text-center">Change Theme Color</h5>
						<div class="themeVarients">
							<a data-themeColor="red" class="theme-red changeThemeBtn" href="#" onclick="updateTheme('red');"></a>
							<a data-themeColor="primary" class="theme-primary changeThemeBtn" href="#" onclick="updateTheme('primary');" ></a>
							<a data-themeColor="green" class="theme-green changeThemeBtn" href="#" onclick="updateTheme('green');" ></a>
							<a data-themeColor="blue" class="theme-blue changeThemeBtn" href="#" onclick="updateTheme('blue');" ></a>
							<a data-themeColor="purple" class="theme-purple changeThemeBtn" href="#" onclick="updateTheme('purple');" ></a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>