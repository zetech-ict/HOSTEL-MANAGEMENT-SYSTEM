
<?php if($_SESSION['id'])
{ ?><div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px; color:#fff">Hostel Portal</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="my-profile.php"><i class="fa fa-user"></i>My Account</a></a></li>
					<li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Hostel Portal</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>