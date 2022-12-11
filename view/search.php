<?php session_start()?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="..\view\bootstrap-5.2.3-dist\css\bootstrap.min.css">
    <script src="..\view\bootstrap-5.2.3-dist\js\bootstrap.bundle.min.js.map"></script>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
    <link rel="stylesheet" href="../view/css/wallpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@1,700&family=Montserrat:ital,wght@0,800;1,700;1,900&family=Raleway:ital,wght@1,900&display=swap" rel="stylesheet">
    <title>GigPals | Search</title>
  </head>
  <body>
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
            <a href="..\view\wallpage.php" class="nav-link me-4 nav_items float-right fa fa-chevron-circle-left" style="">Back</a>
          </li>
          
        </ul>
      </nav>
    </div>
    <?php
    
    include_once '../models/PostClass.php';
    $result = $_GET['Result'];
    $posts = new Post();
    $postnum = $posts->searchForPostsNumber($result);
    $posts = $posts->searchForPost($result);
    for ($i = 0; $i <$postnum['numberOfSavedPosts']; $i++) { ?>
    <div class="post_container col-8">
        <form class="" action="" method="post">
          <div class="post">
            <div class="row post_header">
              <div class="col-md-auto">
                <img class="profile_pic" src="<?php echo $posts[$i]['ProfileImg']; ?>" alt="">
              </div>
              <div id="user_name" class="form-text col-6 name">
                <label for=""><?php echo $posts[$i]['FName'], " ", $posts[$i]['LName']; ?></label>
                <h2><?php echo $posts[$i]['PostTitle']; ?></h2>
              </div>
              <div class="info_container col">
                <p class="row info "><?php echo $posts[$i]['PostCreateDate']; ?></p>  <!--Date-->
                <p class="row info "><?php echo $posts[$i]['PayType']; ?></p> <!--Payment type-->
                <p class="row info "><?php echo $posts[$i]['Budget'] ?>$</p>   <!--budget-->
              </div>

            </div>

            <div class="row post_descript">
              <div class="form-text descript_text">
                   <!--Job Description-->
                   <?php echo $posts[$i]['PostDesc'] ?>
              </div>
            </div>
            <?php if ($_SESSION['UserRole'] == 'freelancer') { ?>
            <div class="row ">
              <div class="col-6 add_proposal_btn">
                  <button id="btnAddLight" type="button" class="btn btn-primary postModal fa fa-plus-square" data-bs-toggle="modal" data-bs-target="#postModal">
                    Add Propsal
                  </button>
              </div>
              <div class="col-6 add_proposal_btn">
                  <button id="btnSaveLight" type="button" class="btn btn-success fa fa-bookmark">
                    Save Post
                  </button>
              </div>

            </div>
            <?php }
        ; ?>

            <div class="row hr_row">       <!--Break line between post content and proposal-->
              <hr class="">
            </div>


          <div class="row propsal_carousel_container">
              <div id="propsal_carousel" class="carousel slide propsal_carosel carousel-dark" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#propsal_carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"  ></button>
                  <button type="button" data-bs-target="#propsal_carousel" data-bs-slide-to="1"  aria-label="Slide 2"  ></button>
                  <button type="button" data-bs-target="#propsal_carousel" data-bs-slide-to="2"  aria-label="Slide 3"  ></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="d-block w-100 slide">
                         <!--Form for proposals -->
                           <div class="proposal row ">
                           <form class="" action="index.html" method="post">
                             <div class="row proposal_header">
                               <div  class=" col-8 proposal_name">
                                 <p class="proposal_name">Ali Mohammed</p>
                               </div>
                                <div class="col-4">
                                   <p class="info ">1000$</p>
                                </div>
                              </div>

                             <div class="row proposal_descipt">
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tellus mauris, facilisis eget mollis quis, rhoncus in urna. In vitae mauris sollicitudin orci dignissim aliquam. Maecenas turpis felis</p>
                            </div>
                           </form>
                         </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="d-block w-100 slide">
                      <!--Form for proposals -->
                      <div class="proposal row ">
                      <form class="" action="index.html" method="post">
                        <div class="row proposal_header">
                          <div  class=" col-8 proposal_name">
                            <p class="proposal_name">Ali Mohammed</p>
                          </div>
                           <div class="col-4">
                              <p class="info ">1000$</p>
                           </div>
                         </div>

                        <div class="row proposal_descipt">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tellus mauris, facilisis eget mollis quis, rhoncus in urna. In vitae mauris sollicitudin orci dignissim aliquam. Maecenas turpis felis</p>
                       </div>
                      </form>
                    </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="d-block w-100 slide">
                      <!--Form for proposals -->
                      <div class="proposal row ">
                      <form class="" action="index.html" method="post">
                        <div class="row proposal_header">
                          <div  class=" col-8 proposal_name">
                            <p class="proposal_name">Ali Mohammed</p>
                          </div>
                           <div class="col-4">
                              <p class="info ">1000$</p>
                           </div>
                         </div>

                        <div class="row proposal_descipt">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tellus mauris, facilisis eget mollis quis, rhoncus in urna. In vitae mauris sollicitudin orci dignissim aliquam. Maecenas turpis felis</p>
                       </div>
                      </form>
                    </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#propsal_carousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#propsal_carousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>

          </div>
        </form>
      </div>
      <?php }
    ?>
    <script src="..\view\bootstrap-5.2.3-dist\js\bootstrap.bundle.min.js.map"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
