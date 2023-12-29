<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="https://kit.fontawesome.com/5ee5eec7cb.js" crossorigin="anonymous"></script>
    <style>
      button {
    padding: 1.3em 3em;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2.5px;
    font-weight: 500;
    color: #000;
    background-color: #fff;
    border: none;
    border-radius: 45px;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease 0s;
    cursor: pointer;
    outline: none;
  }
  
  button:hover {
    background-color: #8423c4;
    box-shadow: 0px 15px 20px rgba(177, 46, 229, 0.4);
    color: #fff;
    transform: translateY(-7px);
  }
  
  button:active {
    transform: translateY(-1px);
  }
    </style>
</head>
<body >
    <?php
      include 'header.php';
    ?>
    <!-- content start -->
        <div class="row">
          <div class="col">
            <div class="card w-100 mb-3 card1">
                <div class="card-header">
                  Upcoming Event
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-3">
                       <p style="font-size: 40px;">THU</p> 
                        <span style="font-size: 35px;">10</span>
                    </div>
                    <div class="col">
                        <span style="font-size: 30px;">Hack Day</span>
                        <p>Thu 10oct 8.00am vavuniya University.</p>
                        <div class="eventButton">
                            <a href="#" class="btn btn-primary m-1">✔ Go </a>
                            <a href="#" class="btn btn-primary m-1">❓ Maybe </a>
                            <a href="#" class="btn btn-primary m-1">Cant't Go</a>
                            <a href="#" class="btn btn-primary m-1">Share <i class="fa-solid fa-share"></i></a>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card w-100 mb-3 card2">
                <div class="card-header">
                    Upcoming Event
                </div>
                <div class="card-body ">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-3">
                           <p style="font-size: 40px;">THU</p> 
                            <span style="font-size: 35px;">10</span>
                        </div>
                        <div class="col">
                            <span style="font-size: 30px;">IEEE</span>
                            <p>Mon 16 oct . 7.00am,Vavuniya University</p>
                            <div class="eventButton">
                                <a href="#" class="btn btn-primary m-1">✔ Go </a>
                                <a href="#" class="btn btn-primary m-1">❓ Maybe </a>
                                <a href="#" class="btn btn-primary m-1">Cant't Go</a>
                                <a href="#" class="btn btn-primary m-1">Share <i class="fa-solid fa-share"></i></a>
                              </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    SEE ALL UPCOMING EVENTS
                  </div>
              </div>
              <div class="card w-100 mb-3  card3">
                <div class="card-header">
                  EVENT MAY YOU LIKE
                </div>
                <img src="asset/img/event/1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="row">
                    <div class="col-3">
                        THU
                        <span style="font-size: 30px;">10</span>
                    </div>
                    <div class="col">
                        <span style="font-size: 30px;">Hack Day</span>
                        <p>Thu 10oct 8.00am vavuniya University.</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col bg-light mt-2">
            <h1 class="m-3">Explore Event</h1>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card">
                    <div class="card-body"  style="background-color: rgba(15, 243, 213, 0.856);">
                      <p class="card-text text-center p-5" style="font-size: 40px;"><a href="http://" style="text-decoration: none; color: black;">Today</a></p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body"  style="background-color: rgba(218, 215, 13, 0.863);">
                      <p class="card-text text-center  p-5" style="font-size: 40px;"><a href="http://" style="text-decoration: none; color: black;">Tommorow</a></p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body"  style="background-color: rgba(198, 10, 223, 0.664);">
                      <p class="card-text text-center  p-5" style="font-size: 40px;"><a href="http://" style="text-decoration: none; color: black;">This Week</a></p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body" style="background-color: rgba(218, 13, 184, 0.664);">
                      <p class="card-text text-center  p-5" style="font-size: 40px;"><a href="http://" style="text-decoration: none; color: black;">Choose Date</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-grid gap-2 mt-5 ">
                <button class="btn btn-secondary text-start ps-4" style="font-size: 30px;"><a href="#" style="text-decoration: none; color: white;">Sport</a></button>
                <button class="btn btn-secondary text-start ps-4" style="font-size: 30px;"><a href="#" style="text-decoration: none; color: white;">Dance</a></button>
                <button class="btn btn-secondary text-start ps-4" style="font-size: 30px;"><a href="#" style="text-decoration: none; color: white;">Party</a></button>
                <button class="btn btn-secondary text-start ps-4" style="font-size: 30px;"><a href="#" style="text-decoration: none; color: white;">Crafts</a></button>
                <button class="btn btn-secondary text-start ps-4" style="font-size: 30px;"><a href="#" style="text-decoration: none; color: white;">Workshope</a></button>
              </div>
                
              <div class="row justify-content-center">
                  <div class="col">
                    <button class="button1 mb-1" style="width: 100%;font-size: 40px; margin-top: 10px;">More Event</button>
                  </div>
              </div>
            </div>
        </div>



    <!-- content END -->

    <?php
      include 'footer.php';
    ?>


    <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>