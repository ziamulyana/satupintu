<nav class="navbar navbar-static-top">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<!-- Notifications: style can be found in dropdown.less -->
			<li class="dropdown notifications-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-danger" id="notif"></span>
            </a>
				<ul id="pesan" class="dropdown-menu">
					<li class="header">You have 10 notifications</li>
					<li>
						<!-- inner menu: contains the actual data -->
						<ul class="menu">
							<li>
								<a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
							</li>
							<li>
								<a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
							</li>
							<li>
								<a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
							</li>
							<li>
								<a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
							</li>
							<li>
								<a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
							</li>
						</ul>
					</li>
					<li class="footer"><a href="#">View all</a></li>
				</ul>
			</li>
			<!-- Tasks: style can be found in dropdown.less -->

			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets/uploads/images/foto_profil/1526456245974.png'); ?>" class="user-image">
                <span class="hidden-xs"></span>
            </a>
				<ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
						<img src="<?= base_url('assets/uploads/images/foto_profil/1526456245974.png'); ?>" class="img-circle">
						<p>
							
							<small>Anda Masuk Sebagai Admin</small>
						</p>
					</li>
					<!-- Menu Footer-->
					<li class="user-footer">
						<div class="pull-left">
							<a href="<?php echo base_url() ?>auth/profile" class="btn btn-default btn-flat"><i class="fa fa-user" aria-hidden="true"></i> Profil</a>
						</div>
						<div class="pull-right">
							<a href="<?php echo base_url() ?>auth/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a>
						</div>
					</li>
				</ul>
			</li>
			<!-- Control Sidebar Toggle Button -->
		</ul>
	</div>
</nav>
<style>
.skin-blue .main-header .navbar {
    background-color: #00537d;
}
</style>
