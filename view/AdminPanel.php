<!doctype html>
<?php session_start();
 if ($_SESSION['Username'] && $_SESSION['UserRole'] == 'admin') { ?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GigPals</title>
	<link href="bootstrap-5.2.3-dist\css\bootstrap.min.css"
	rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="css\AdminPanel.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
	href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@1,700&family=Montserrat:ital,wght@0,800;1,700;1,900&family=Raleway:ital,wght@1,900&display=swap"
	rel="stylesheet">
</head>

<body>

	<div>
		<nav id="navbar" class="navbar-fixed-top bg-light ">
			<div class="container-fluid">
				<span class="navbar-brand mb-0 h1" style="--bs-navbar-brand-font-size:2rem;">GigPals</span>
			</div>
			<ul class="navbar-nav ms-auto">
			<li class="nav-item">
            <a href="../controller/LogoutController.php" class="nav-link me-4 nav_items float-right fa fa-chevron-circle-left">logout</a>
            
          </li>
			</ul>
		</nav>
		<div class="row ">
			<div class="col-6">
				<div class="admin panel_primary">
					<div class="user-interaction">
						<div class="add-user">
							<div class="title"><strong>Signup for user</strong></div>
							<form action="../controller/AddUserController.php" method="post">
								<div class="input-boxes">
									<div class="input-box">
										<i class="fas fa-user"></i>
										<input type="text" name="username" placeholder="username" required>
									</div>
									<div class="input-box">
										<i class="fas fa-user"></i>
										<input type="password" name="password" placeholder="password" required>
									</div>
									<div class="input-box">
										<i class="fas fa-user"></i>
										<input type="text" name="FName" placeholder="First Name" required>
									</div>
									<div class="input-box">
										<i class="fas fa-user"></i>
										<input type="text" name="LName" placeholder="Last Name" required>
									</div>
									<div class="input-box">
										<i class="fas fa-envelope"></i>
										<input type="email" name="Email" placeholder="Email" required>
									</div>
									<div class="input-box">
										<i class="fa fa-mobile"></i>
										<input type="text" name="PhoneNo" placeholder="Phone Number" required>
									</div>
									<div class="input-box">
										<i class="fa fa-camera"></i>
										<input type="file" name="ProfileImg" placeholder="profile Image" required>
									</div>
									<i class="fa fa-users"></i>
									<label id="role_label" for="role"> Role</label>
									<div class="btn-group" id="role" role="group" aria-label="Basic radio toggle button group">
										<input type="radio" class="btn-check" name="UserRole" id="btnradio1" autocomplete="off" value="client" checked>
										<label class="btn btn-outline-primary" for="btnradio1">Client</label>
										<input type="radio" class="btn-check" name="UserRole" id="btnradio2" autocomplete="off" value="freelancer">
										<label class="btn btn-outline-primary" for="btnradio2">Freelancer</label>
									</div>
									<div class="button input-box">
										<input type="submit" name="Register" value="Register">
									</div>
								</div>
							</form>

						</div>
						<div class="remove-user">
							<form class="" action="../controller/RemoveUserController.php" method="post">
								<div class="input-box">
								<i class=""></i>
								<input type="text" name="username" required placeholder="enter username to remove">
							</div>
							<div class="button input-box">
								<input type="submit" name="Remove" value="remove User">
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="posts-interaction"> <!--Post interaction class-->
					<?php
					include_once '../controller/GetAdminPostController.php';

                    ?>
					<?php for ($i = 0; $i < $postsNumber['NumberOfPosts']; $i++) {
		$row = $post->displayOnAdminPanel(); ?>
						<div class="accept-post"> <!--Post acceptance class-->
							<div class="btn-accept" for="btnradio" id="btnradio3">
							<form action="../controller/AcceptPostController.php" class ="accept-form" method="post"> <!--Post acceptance form-->


									<div class="post_container">
										
											<div class="post">
												<div class="row post_header">
													<div class="col-md-auto">
														<img class="profile_pic" src="<?php echo $row[$i]['ProfileImg']; ?>" alt="">
													</div>
													<div id="user_name" class="form-text col-6 name">
														<label for=""><?php echo $row[$i]['FName']; ?></label>
														<h2><?php echo $row[$i]['PostTitle'] ?></h2>
													</div>
													<div class="info_container col">
														<p class="row info "><?php echo $row[$i]['PostCreateDate']; ?></p>  <!--Date-->
														<p class="row info "><?php echo $row[$i]['PayType']; ?></p> <!--Payment type-->
														<p class="row info "><?php echo $row[$i]['Budget']; ?>$</p>   <!--budget-->
													</div>

												</div>

												<div class="row post_descript">
													<div class="form-text descript_text">   <!--Job Description-->
														<p><?php echo $row[$i]['PostDesc']; ?></p>
													</div>
												</div>
											</div>
										



								</div>
								<div class="btn-group choices-for-acceptance" id="role" role="group" aria-label="Basic radio toggle button group">
									<input type="radio" class="btn-accept btn-check" name="acceptValue" value="1" required id="btncheck1" autocomplete="off">
									<label class="btn btn-outline-primary" for="btncheck1">Accept post</label>
									<input type="hidden" name="PostID" value="<?php echo $row[$i]['PostID']; ?>">
									<input type="radio" class="btn-refuse btn-check" name="acceptValue" value="0" required id="btncheck2" autocomplete="off">
									<label class="btn btn-outline-primary" for="btncheck2">Refuse post</label>
								</div>
								<div class="button input-box">
									<input type="submit" name="CheckAccept" value="Submit Choice">
								</div>
							</form>

						</div>
					</div>
					<?php } ?>

					<div class="removepost"> <!--Post Removal class-->
						<form class="remove-form" action="../controller/RemovePostController.php" method="post"><!--Post removal form-->
							<div class="input-box">
								<i class=""></i>
								<input type="text" maxlength="30" name="PostID" placeholder="Removed-PostID" required>
							</div>
							<div class="button input-box">
								<input type="submit" name="removePost" value="submit RemovedPost">
							</div>
						</form>
					</div>
					<div class="update-post"> <!--update class-->
						<form class="update-form" action="../controller/EditPostController.php" method="post"> <!--post update form-->
							<div class="input-box">
								<i class="fa fa search"></i>
								<input type="text" maxlength="30" name="PostID" placeholder="Search-PostID" required>
							</div>
								<div class="mb-3">
									<label for="ProposalDescription" class="form-label">Title:</label>
									<input type="text" class="form-control" name="JobTitle" id="ProposalDescription" aria-describedby="emailHelp">
								</div>
							
								<div class="mb-3">
									<label for="ProposalDescription" class="form-label">Description:</label>
									<input type="text" class="form-control" name="JobDesc" id="ProposalDescription" aria-describedby="emailHelp">
								</div>
								<div class="mb-3">
									<label for="jobType" class="form-label">Job type:</label>
									<input type="text" name="PayType" class="form-control" id="jobType">
									<div id="emailHelp" class="form-text">fixed/hourly</div>
								</div>
								<div class="mb-3">
									<label for="Budget" class="form-label">Budget:</label>
									<input type="number" name="Budget"class="form-control" id="Budget">
								</div>
              
          

							
							<div class="button input-box">
								<input type="submit" name="update" value="update">
							</div>
						</form>
					</div>


				</div>
			</div>
		</div>
	</div>
	</body>

</html>
<?php }?>