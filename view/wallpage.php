<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="..\view\bootstrap-5.2.3-dist\css\bootstrap.min.css">
    <script src="..\view\bootstrap-5.2.3-dist\js\bootstrap.bundle.min.js.map"></script>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
    <link rel="stylesheet" href="../view/css/wallpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@1,700&family=Montserrat:ital,wght@0,800;1,700;1,900&family=Raleway:ital,wght@1,900&display=swap" rel="stylesheet">
    <title>GigPals | Wall page</title>
  </head>
  <body>



<!-- Modal -->
<!--<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="postModalLabel">Add Proposal</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form action="../controller/AddProposalController.php" post="post">
          <div class="mb-3">
            <label for="ProposalDescription" class="form-label">Proposal Description:</label>
            <input type="text" name="desc" class="form-control" id="ProposalDescription" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Descripe your Proposal for the client,Short Descriptions are always Better ;)</div>
          </div>
          <div class="mb-3">
            <label for="Budget" class="form-label">Budget:</label>
            <input type="number" name="budget" class="form-control" id="Budget">
          </div>
          <input type="hidden" name="proposal" value="">
          <input type="submit" name="Propose" class="btn btn-primary">
      </form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Discard Proposal</button>
      </div>
    </div>
  </div>
</div>-->

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
        <form class="d-flex" role="search" action="search.php" method="get">
            <input class="form-control me-2" name="Result" type="search" placeholder="Search" aria-label="Search">
            <input class="btn btn-dark" name="Search" type="submit" value="Search">
          </form>
        </div>
        <?php if(isset($_SESSION['UserRole'])){?>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="..\view\FreeLancerProfile.php" class="nav-link me-4 nav_items float-right fa fa-user" style="">My Profile</a>
          </li>
          <li class="nav-item">
            <a href="../controller/LogoutController.php" class="nav-link me-4 nav_items float-right fa fa-chevron-circle-left">logout</a>
            
          </li>
        </ul>
        <?php }?>
      </nav>
    </div>


    <div class="row main_page"> <!--main page-->
      <div class="col-2 ">    <!--left side column-->
              <!--leve empty for now-->
      </div>

      <div class="column col-8"> <!--Post area-->
      <?php include_once '../controller/GetWallPostsController.php';
      
      for ($i = 0; $i < $postsNumber['NumberOfPosts']; $i++) { ?>
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
                  <div id="emailHelp" class="form-text">Descripe your Proposal for the client,Short Descriptions are always Better ;)</div>
                </div>
                <div class="mb-3">
                  <label for="Budget" class="form-label">Budget:</label>
                  <input type="number" name="budget" class="form-control" id="Budget">
                </div>
                <?php echo $i;?>
                <input type="hidden" name="PostID" value="<?php echo $posts[$i]['PostID']; ?>">
                <input type="submit" name="Propose" value="send" class="btn btn-primary">
            </form>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Discard Proposal</button>
            </div>
          </div>
        </div>
        </div>

    
        <div class="post_container">
        
          <div class="post">
            <div class="row post_header">
              <div class="col-md-auto">
                <img class="profile_pic" src="<?php echo $posts[$i]['ProfileImg']; ?>" alt="">
              </div>
              <div id="user_name" class="form-text col-6 name">
                <label for=""><a href="VisitorClientProfile.php?UserID=<?php echo $posts[$i]['UserID']; ?>"><?php echo $posts[$i]['FName'], " ", $posts[$i]['LName']; ?></a></label>
                <h2><?php echo $posts[$i]['PostTitle']; ?></h2>
              </div>
              <div class="info_container col">
                <p class="row info "><?php echo $posts[$i]['PostCreateDate']; ?></p>  <!--Date-->
                <p class="row info "><?php echo $posts[$i]['PayType']; ?></p> <!--Payment type-->
                <p class="row info "><?php echo $posts[$i]['Budget']; ?>$</p>   <!--budget-->
              </div>

            </div>

            <div class="row post_descript">
              <div class="form-text descript_text">
                   <!--Job Description-->
                   <?php echo $posts[$i]['PostDesc'] ?>
              </div>
            </div>
            <?php if (isset($_SESSION['UserRole']) && $_SESSION['UserRole'] == 'freelancer') { ?>
            <div class="row ">
              <div class="col-6 add_proposal_btn">
                  <button id="btnAddLight" type="button" class="btn btn-primary postModal fa fa-plus-square" name="ProposalFor" data-bs-toggle="modal"  data-bs-target="#postModal<?php echo $i;?>">
                    Add Propsal
                  </button>
              </div>
              <div class="col-6 add_proposal_btn">
                        <form action="../controller/SaveProposalController.php"  method="post">
                          Save Post with ID:<input  type="submit" class="btn btn-success fa fa-bookmark" name="save" value="<?php echo $posts[$i]['PostID'];?>">
                        </form>    
              </div>

            </div>
            <?php }
         ?>

            <div class="row hr_row">       <!--Break line between post content and proposal-->
              <hr class="">
            </div>
             
              
          <div class="row propsal_carousel_container">
              <div id="propsal_carousel" class="carousel slide propsal_carosel carousel-dark" data-bs-ride="carousel">
                <div class="carousel-inner">
                 
                
                  <?php
        include_once '../models/ProposalClass.php';
        include_once '../models/PostClass.php';
        $postno = new Post();
        $proposal = new proposal();
        
        $numberOfProposals = $postno->findProposalsNumber($posts[$i]['PostID']);
        $proposals=$proposal->displayProposals($posts[$i]['PostID']);
        
        
        for ($j = 0; $j < $numberOfProposals; $j++) {
                  ?><p>number of proposals (<?php echo $numberOfProposals; ?>)</p>

                  <div class="carousel-item <?php if ($j==0){ echo 'active';?><?php } ?>">
                    <div class="d-block w-100">
                      <!--Form for proposals -->
                      <div class="proposal row ">
                      
                        <div class="row proposal_header">
                          <div  class=" col-8 proposal_name">
                            <p class="proposal_name"><?php echo $proposals[$j]['FName']," ",$proposals[$j]['LName']; ?></p>
                          </div>
                           <div class="col-4">
                              <p class="info "><?php echo $proposals[$j]['PBudget']?>$</p>
                           </div>
                         </div>

                        <div class="row proposal_descipt">
                          <p><?php echo $proposals[$j]['PDesc'];?></p>
                       </div>
                      
                    </div>
                    </div>
                  </div>
                  <?php }?>
                </div>
                
              </div>
          </div>

          </div>
        
      </div>
      <?php }
      ?>
    </div>

    <div class="col-2 right_column">    <!--post modal button-->
    </div>

  </div>




  <script src="..\view\bootstrap-5.2.3-dist\js\bootstrap.bundle.min.js.map"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
