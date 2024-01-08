<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo and Video</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5ee5eec7cb.js" crossorigin="anonymous"></script>
</head>
</head>
<body>
     
     <?php
        include 'header.php';
     ?>

       <!-- contect start -->
        <div class="row pt-1">
            <div class="col-md-8 ">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="asset/img/photo&video/391235.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="asset/img/photo&video/756719.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="asset/img/photo&video/Screenshot (2).png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 align-items-center">
                <img src="asset/img/photo&video/upRightSide.PNG" class="img-fluid w-100" alt="Responsive Image">
            </div>
        </div>

        <form action="photVideo.php" method='POST' enctype="multipart/form-data">
            <div class="row">
                <div class="col-4 pt-2 pb-2">
                    <img src="asset/img/photo&video/leftDowenSide.PNG" class="img-fluid w-100" alt="Responsive Image">
                </div>
                <div class="col">
                    <p style="color: rgb(142, 236, 142); font-size: 30px;">Event List: </p>
                    <hr size="15" width="100%">
                    <div class="dropdown">
                        <select class="btn btn-info dropdown-toggle" name="eventType" id="eventType" required>
                            <option value="">Select Sports Event</option>
                            <option value="Team">Team</option>
                            <option value="Individual">Individual</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <hr size="5" width="100%">
                    <div class="dropdown">
                        <select class="btn btn-info dropdown-toggle" name="eventCategory" id="eventCategory" required>
                            <option value="">Select Workshop Type</option>
                            <option value="IEEE">IEEE</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <hr size="5" width="100%">
                    <p style="color: aliceblue; font-size: 20px;">Recently Upload</p>
                    <div class="row form-group">
                        <label for="eventDate" class="col-sm-1 col-form-label">Date</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="date" class="form-control" id="eventDate" name="eventDate" required>
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="imageUpload" class="col-sm-2 col-form-label">Upload Image</label>
                        <div class="col-sm-5">
                        <input type="file" class="form-control" id="imageUpload" name="imageUpload" accept="image/png, image/jpeg" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Clear</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- contect END -->
        <?php

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $eventType = $_POST['eventType']; 
            $eventCategory = $_POST['eventCategory']; 
            $eventDate = $_POST['eventDate']; 

             if (isset($_FILES["imageUpload"]) && $_FILES["imageUpload"]["error"] == 0) {
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png");
                $filename = $_FILES["imageUpload"]["name"];
                $filetype = $_FILES["imageUpload"]["type"];
                $filesize = $_FILES["imageUpload"]["size"];

                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                if (!array_key_exists($ext, $allowed)){
                    echo "<script type='text/javascript'>
                            alert('Error: Please select a valid file format.');
                            window.location.href='photVideo.php';
                        </script>";
                    exit();
                }

                $maxsize = 5 * 1024 * 1024;
                if ($filesize > $maxsize) {
                    echo "<script type='text/javascript'>
                            alert('Error: File size is larger than the allowed limit.');
                            window.location.href='photVideo.php';
                        </script>";
                    exit();
                }
                if (in_array($filetype, $allowed)) {
    
                    if (file_exists("uploads/" . $filename)) {
                        
                        echo "<script type='text/javascript'>
                                alert('" . $filename . " already exists.');
                                window.location.href='photVideo.php';
                            </script>";
                        exit();

                    } else {
                        if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], "uploads/" . $filename)) {
                            echo "<script type='text/javascript'>
                                    alert('Your file was uploaded successfully.');
                                    window.location.href='photVideo.php';
                                  </script>";
                        } else {
                            echo "<script type='text/javascript'>
                                    alert('Error: There was an issue uploading your file.');
                                    window.location.href='photVideo.php';
                                  </script>";
                        }

                        $conn = new mysqli("127.0.0.1", "root", "", "event");
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $upload_date = date('Y-m-d H:i:s');
                        $stmt = $conn->prepare("INSERT INTO photo (filename, event_type, event_category, event_date, upload_date) VALUES (?, ?, ?, ?, ?)");
                        $stmt->bind_param("sssss", $filename, $eventType, $eventCategory, $eventDate, $upload_date);

                        if ($stmt->execute()) {
                           // echo "New record created successfully";
                        } else {
                            echo "Error: " . $stmt->error;
                        }

                        $stmt->close();
                        $conn->close();
                    }
                } else {
                    echo "<script type='text/javascript'>
                            alert('Error: There was a problem uploading your file. Please try again.');
                            window.location.href='photVideo.php';
                        </script>";
            exit();
            
                }
            } else {

                if(isset($_FILES["imageUpload"])) {
                    echo "Error: " . $_FILES["imageUpload"]["error"];
                } else {
                    //echo "No file uploaded.";
                }
            }
        }
        ?>

     <?php
        include 'footer.php';
     ?>


    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function(){
          $('#datepicker').datepicker();
        });
      </script>
</body>
</html>