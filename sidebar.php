<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label"></li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>

<li><a href="book-hostel.php"><i class="fa fa-bed"></i>Book Hostel</a></li>
<li><a href="room-details.php"><i class="fa fa-info-circle"></i>Room Details</a></li>
<li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
<li><a href="change-password.php"><i class="fa fa-key"></i>Change Password</a></li>
<li><a href="access-log.php"><i class="fa fa-book"></i>Access log</a></li>
<?php } else { ?>
				
				<li><a href="registration.php"><i class="fa fa-user"></i> Student Registration</a></li>
				<li><a href="index.php"><i class="fa fa-users"></i> Student Login</a></li>
				<li><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li>
				<?php } ?>

			</ul>
		</nav>