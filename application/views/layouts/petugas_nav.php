<nav class="navbar navbar-static-top">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
		<span class="sr-only">Toggle navigation</span>
	</a>

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<!-- Notifications: style can be found in dropdown.less -->
			<li class="dropdown notifications-menu">
				<a id="noti_Button" href="" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-bell-o"></i>
					<span id="noti_Counter" class="badge bg-red"></span>
				</a>
				<div ></div>
				<ul id="notifications" class="dropdown-menu">
					<li class="header">Anda Memiliki <?php echo $this->db->where('closed =', 0)->from("tbl_feedback")->count_all_results(); ?> Notifikasi</li>
					<li>
						<!-- inner menu: contains the actual data -->
						<ul class="menu">
							<li >
								<?php

								$this->db->select('*');
								$this->db->from('tbl_feedback');
								$this->db->where('closed =', 0);
								$this->db->order_by('tglFeedback', 'DESC');
								$query = $this->db->get();

								?>

								<?php

								if (isset($query)) {
									foreach ($query->result() as $row) {

										echo "<a href=''><i class='fa fa-envelope text-green'></i>" . $row->isiFeedback . '</a>';
									}
								} else {
									echo "no record found";
								}

								?>

							</li>
						</ul>
					</li>
				</ul>
			</li>
			<!-- Tasks: style can be found in dropdown.less -->

			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?= base_url('assets/uploads/images/foto_profil/1583991814826.png'); ?>" class="user-image">
					<span class="hidden-xs"></span>
				</a>
				<ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
						<img src="<?= base_url('assets/uploads/images/foto_profil/1583991814826.png'); ?>" class="img-circle">
						<p>

							<small>Anda Masuk Sebagai Petugas</small>
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