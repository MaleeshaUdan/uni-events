<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUY TICKET</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="https://kit.fontawesome.com/5ee5eec7cb.js" crossorigin="anonymous"></script>
</head>
<body>
   <?php
    include 'header.php';
   ?>
    
    <!-- content start -->
        <div class="row bg-danger ms-1 me-1">
            <div class="col text-center justify-content-center mt-5">
                <p style="color: white; font-size: 35px;">Events Listing & Ticketing</p>
                <br>
                <div class="buyTicketButton pt-4"><hr>
                    <button type="button" class="btn btn-warning btn-lg me-1">Join Now</button><hr>
                    <a href="booking.php" class="btn btn-warning btn-lg ms-1">Buy Ticket</a> <hr>       
                </div>
            </div>
            <div class="col">
                <img src="asset/img/buyTicket/topRightConner.PNG" style="width: 100%;height: 100%; padding-top: 10px;padding-bottom: 10px;" alt="" srcset="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-5">
                <div class="card w-100 mb-3 card1">
                    <div class="card-header">
                      Upcoming Event
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-3">
                           <p style="font-size: 40px;">MON</p> 
                            <span style="font-size: 35px;">14</span>
                        </div>
                        <div class="col">
                            <span style="font-size: 30px;">Hack Day</span>
                            <p>Thu 10oct 8.00am vavuniya University.</p>
                            <div class="eventButton">
                                <a href="#" class="btn btn-primary m-1">✔ Going </a>
                                <a href="#" class="btn btn-primary m-1">❓ Maybe </a>
                                <a href="#" class="btn btn-primary m-1">Cant't Go</a>
                                <a href="#" class="btn btn-primary m-1">Share <i class="fa-solid fa-share"></i></a>
                              </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 b-5" style=" margin-top: 1px">
                <div class="card w-100 mb-3 card1" style="background-color: green;">
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
                                <a href="#" class="btn btn-primary m-1">✔ Going </a>
                                <a href="#" class="btn btn-primary m-1">❓ Maybe </a>
                                <a href="#" class="btn btn-primary m-1">Cant't Go</a>
                                <a href="#" class="btn btn-primary m-1">Share <i class="fa-solid fa-share"></i></a>
                              </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center">
                        SEE ALL UPCOMING EVENTS
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-12 col-md-2 d-flex justify-content-center align-items-center pt-2 ">
                <img src="asset/img/buyTicket/middleRightCornner.PNG" class="img-fluid" alt="Responsive Image" style="max-height: 40vh;padding-bottom: 11px" alt="" srcset="">
                <img src="asset/img/buyTicket/middleRightCornner.PNG" class="img-fluid" alt="Responsive Image" style="max-height: 40vh;padding-bottom: 11px" alt="" srcset="">
                <img src="asset/img/buyTicket/middleRightCornner.PNG" class="img-fluid" alt="Responsive Image" style="max-height: 40vh;padding-bottom: 11px" alt="" srcset="">
            </div>
        </div>
        <div class="row ">
            <div class="col-12 col-sm-12 col-md-8  mb-1">
                <img src="asset/img/buyTicket/rightBottomConner.PNG" style="width: 100%; " alt="" srcset="">
            </div>
            <div class="col-12 col-sm-12 col-md-4 mb-1">
               <img src="asset/img/buyTicket/leftBottomCorner.PNG" style="width: 100%; height: 100%;" srcset="">
            </div>
        </div>
    <!-- content END -->

    <?php
    include 'footer.php';
    ?>    


    <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>