<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="..\view\bootstrap-5.2.3-dist\css\bootstrap.min.css">
    <script src="..\view\bootstrap-5.2.3-dist\js\bootstrap.bundle.min.js.map"></script>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
    <link rel="stylesheet" href="..\view\css\FreeLancerProfile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@1,700&family=Montserrat:ital,wght@0,800;1,700;1,900&family=Raleway:ital,wght@1,900&display=swap" rel="stylesheet">
    <title>GigPals | My Profile</title>
  </head>
  <body>

    <!-- Modal ADD PROPOSAL -->
    

    <!-- Modal change password -->
    <div class="modal fade" id="changePassWordModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="postModalLabel">Change Password</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">

            <form action="../controller/ChangePasswordController.php" method="post">
              <div class="mb-3">
                <label for="newPassword" class="form-label">New Password:</label>
                <input type="password" name="password" class="form-control" id="newPassword" aria-describedby="passWordHelp">
                <div id="passWordHelp" class="form-text"></div>
              </div>

              <input type="submit" name="ChangePass" class="btn btn-primary" value="Change Password">
          </form>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Discard</button>
          </div>
        </div>
      </div>
    </div>


    <div class="row"> <!--Navigator-->
      <div class="custom-shape-divider-top-1670530548">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>
        <nav class="navbar navbar-expand-lg  fixed-top">
        <a href="#" class="ms-4 navbar-brand gigPal_logo" style="">GigPals</a>
        <div class="ms-auto">
          
        </div>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="..\view\wallpage.php" class="nav-link me-4 nav_items float-right fa fa-chevron-circle-left">Back</a>
            
          </li>
          <li class="nav-item">
            <a href="../controller/LogoutController.php" class="nav-link me-4 nav_items float-right fa fa-chevron-circle-left">logout</a>
            
          </li>
        </ul>
        
      </nav>
    </div>




    

    <div class="row main_page"> <!--main page-->
      <div class="col-2 ">    <!--left side column-->
              <!--leve empty for now-->
      </div>

      <div class="column col-8"> <!--Post area-->
        <div class="row profile_info_container">
        <form class="" action="" method="post">
          <div class="profile_info">
            <h1 class="h1_yourProfileInfo">Your Profile Info</h1>

            <div class="row info_imgEmail">
              <div class="col-sm-auto">
                <img id="userImg" src="<?php echo $_SESSION['ProfileImg']; ?>" alt="">
              </div>
              <div class="col-8">
                <div class="row info_name">
                  <label class="label_style" for="firstName">First Name :</label>       <!--FIRSTNAME-->
                  <h2 id="firstName"><?php echo $_SESSION['FName']; ?></h2>
                  <label class="label_style" for="lastName">Last Name :</label>         <!--LASTNAME-->
                  <h3 id="lastName"><?php echo $_SESSION['LName']; ?></h3>
                  <label class="label_style" for="userRole">Role :</label>               <!--USER ROLE FREELANCER/CLIENT-->
                  <h3 id="userRole">Freelancer</h3>
                </div>
              </div>

            </div>

            <div class="row hr_row">       <!--Break line between post content and proposal-->
              <hr class="hr_style">
            </div>

            <div class="row info_phone">
              <label class="label_style" for="userName">Username :</label>            <!--USERNAME-->
              <h2 id="userName"><?php echo $_SESSION['Username']; ?></h2>

              <label class="label_style" for="email">E-Mail :</label>                   <!--EMAIL-->
              <h2 id="phoneNumber"><?php echo $_SESSION['Email']; ?></h2>

              <label class="label_style" for="phoneNumber">Phone Number :</label>         <!--PHONE NUMBER-->
              <h2 id="phoneNumber"><?php echo $_SESSION['PhoneNo']; ?></h2>
            </div>

            <div class="row hr_row">       <!--Break line between post content and proposal-->
              <hr class="hr_style">
            </div>

            <div class="row">
              <div class="col-8">
                <label class="label_style" for="passWord">Password :</label>         <!--PASSWORD-->
                <h2 id="passWord"></h2>
              </div>
              <div class="col-4">        <!--CHANGE PASSWORD BUTTON :TRIGGERS CHANGE PASS WORD MODA (LINE-50)-->
                <button type="button" name="button" class="btn btn-outline-danger change_pass_btn" data-bs-toggle="modal" data-bs-target="#changePassWordModal">Change Password</button>
              </div>
            </div>

          </div>
        </form>
      </div>
      <div class="row history_container">
        <div class="row">
          <h1 class="h1_yourSavedPosts">Saved posts</h1>
        </div>

        <div class="column col"> <!--Post area-->
        <?php include_once '../controller/GetSavedPostsController.php';
              for ($i=0;$i<$numberOfSavedPosts['numberOfSavedPosts'];$i++){       
        ?>
        <div class="modal fade" id="postModal<?php echo $i;?>" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="postModalLabel">Add Proposal</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">

            <form action="../controller/AddProposalController.php" method="post">
              <div class="mb-3">
                <label for="ProposalDescription" class="form-label">Proposal Description:</label>
                <input type="text" name="desc" class="form-control" id="ProposalDescription" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Descripe your Proposal for the clinet,Short Descriptions are always Better ;)</div>
              </div>
              <input type="hidden" name="UserID" value="">
              <div class="mb-3">
                <label for="Budget" class="form-label">Budget:</label>
                <input type="number" name="budget" class="form-control" id="Budget">
              </div>
              <input type="submit" name="AddProposal" value="SubmitProposal" class="btn btn-primary">
          </form>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Discard Proposal</button>
          </div>
        </div>
      </div>
    </div>
          <div class="post_container">
          <form class="" action="" method="post">
            <div class="post">
              <div class="row post_header">
                <div class="col-md-auto">
                  <img class="profile_pic" src="<?php echo $savedposts[$i]['ProfileImg']?>" alt="">
                </div>
                <div id="user_name" class="form-text col-6 name">
                  <label for=""><?php echo $savedposts[$i]['FName'], " ", $savedposts[$i]['LName']; ?></label>
                  <h2><?php echo $savedposts[$i]['PostTitle'];?></h2>
                </div>
                <div class="info_container col">
                  <p class="row info "><?php echo $savedposts[$i]['PostCreateDate'];?></p>  <!--Date-->
                  <p class="row info "><?php echo $savedposts[$i]['PayType'];?></p> <!--Payment type-->
                  <p class="row info "><?php echo $savedposts[$i]['Budget']?>$</p>   <!--budget-->
                </div>

              </div>

              <div class="row post_descript">
                <div class="form-text descript_text">   <!--Job Description-->
                <?php echo $savedposts[$i]['PostDesc']?>
                </div>
              </div>
              <div class="row ">
                <form action="../controller/AddProposalController.php" method="POST">
                <div class="add_proposal_btn">    <!--Add proposal BUTTON :TRIGGERS ADD PROPOSAL MODEL (LINE-17)-->
                    <input type="submit" class="btn btn-success postModal" data-bs-toggle="modal" name="Propose" data-bs-target="#postModal<?php echo $i;?>" value="Add Your Propsal">
                    
                </div>
              </form>
              </div>

              <div class="row hr_row">       <!--Break line between post content and proposal-->
                <hr class="">
              </div>


            

            </div>
          </form>
        </div>
        <?php }?>
      </div>

      </div>

    </div>

      <div class="col-2 right_column">    <!--post modal button-->
    </div>
                
  </div>
  




  <script src="..\view\bootstrap-5.2.3-dist\js\bootstrap.bundle.min.js.map"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
