<?php
include 'session.php';
?>
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

  .date-picker-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
}

.date-picker-popup {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
}

.events-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
}

.events-popup {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
}
.card-header {
        font-weight: bold;
    }
.button-group .btn {
        padding: 15px 30px; 
        font-size: 18px; 
    }    

    </style>
    
</head>
<body >
    <?php
      include 'header.php';
    ?>

    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['date'])) {
        $host = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "event";

        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $date = $_POST['date'];
        error_log("Received date: " . $date);

        $sql = "SELECT * FROM events WHERE event_date = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $date);
        $stmt->execute();
        if ($stmt->error) {
          error_log("Error in query: " . $stmt->error);
         }
        $result = $stmt->get_result();


            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $eventDay = strtoupper(date('D', strtotime($row["event_date"])));
                $eventDate = date('d', strtotime($row["event_date"]));
                $randomColor = ['#f44336', '#9c27b0', '#673ab7', '#3f51b5', '#ff9800', '#ff5722', '#009688'][array_rand(['#f44336', '#9c27b0', '#673ab7', '#3f51b5', '#ff9800', '#ff5722', '#009688'])];

                echo '<div class="card w-100 mb-3" style="background-color: ' . $randomColor . ';">
                        <div class="card-header">Upcoming Event</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <p style="font-size: 40px;">' . $eventDay . '</p>
                                    <span style="font-size: 35px;">' . $eventDate . '</span>
                                </div>
                                <div class="col">
                                    <span style="font-size: 30px;">' . htmlspecialchars($row["event_name"]) . '</span>
                                    <p>' . date('D d M', strtotime($row["event_date"])) . ' ' . date('h.iA', strtotime($row["event_time"])) . ', ' . htmlspecialchars($row["event_venue"]) . '</p>
                                    <div class="eventButton">
                                        <a href="#" class="btn btn-primary m-1">✔ Go</a>
                                        <a href="#" class="btn btn-primary m-1">❓ Maybe</a>
                                        <a href="#" class="btn btn-primary m-1">Can\'t Go</a>
                                        <a href="https://www.facebook.com" target="_blank" class="btn btn-primary m-1">Share on Facebook <i class="fab fa-facebook"></i></a>
                                        <a href="https://twitter.com" target="_blank" class="btn btn-primary m-1">Share on Twitter <i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
        } else {
            echo "Oops! There are no events on this date.";
        }

        $conn->close();
        exit();
    }
    ?>

    
    <!-- content start -->
    <div class="row">
        <div class="col">
        <?php
      $host = "127.0.0.1";
      $username = "root";
      $password = "";
      $database = "event";

      $conn = new mysqli($host, $username, $password, $database);

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM events ORDER BY event_date DESC, event_time DESC LIMIT 2";
      $result = $conn->query($sql);
      $backgroundColors = ["#f44336", "#9c27b0", "#673ab7", "#3f51b5", "#ff9800", "#ff5722", "#009688"];

      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $randomColor = $backgroundColors[array_rand($backgroundColors)];
              $eventDay = strtoupper(date('D', strtotime($row["event_date"])));
              $eventDate = date('d', strtotime($row["event_date"]));
              echo '<div class="card w-100 mb-3" style="background-color: ' . $randomColor . ';">
                      <div class="card-header">Upcoming Event</div>
                      <div class="card-body">
                          <div class="row">
                              <div class="col-3">
                                  <p style="font-size: 40px;">' . $eventDay . '</p>
                                  <span style="font-size: 35px;">' . $eventDate . '</span>
                              </div>
                              <div class="col">
                                  <span style="font-size: 30px;">' . htmlspecialchars($row["event_name"]) . '</span>
                                  <p>' . date('D d M', strtotime($row["event_date"])) . ' ' . date('h.iA', strtotime($row["event_time"])) . ', ' . htmlspecialchars($row["event_venue"]) . '</p>
                                  <div class="eventButton">
                                      <a href="#" class="btn btn-primary m-1">✔ Go</a>
                                      <a href="#" class="btn btn-primary m-1">❓ Maybe</a>
                                      <a href="#" class="btn btn-primary m-1">Can\'t Go</a>
                                      <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="_blank" class="btn btn-primary m-1">Share on Facebook <i class="fab fa-facebook"></i></a>
                                      <a href="https://twitter.com/intent/tweet?url=YOUR_URL&text=YOUR_TEXT" target="_blank" class="btn btn-primary m-1">Share on Twitter <i class="fab fa-twitter"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>';
          }
      } else {
          echo "No upcoming events found.";
      }

      $conn->close();
      ?>
            <!-- Additional content -->
        </div>
            <!-- Right column content -->
        <div class="col bg-light mt-2">
            <h1 class="m-3">Explore Event</h1>
            <div class="d-grid gap-2">
                <button class="btn text-start ps-4" style="font-size: 30px; background-color: #e57373; color: white;">Today</button>
                <button class="btn text-start ps-4" style="font-size: 30px; background-color: #64b5f6; color: white;">Tomorrow</button>
                <button class="btn text-start ps-4" style="font-size: 30px; background-color: #81c784; color: white;">This Week</button>

                <button id="chooseDateButton" class="btn text-start ps-4" style="font-size: 30px; background-color: #ffb74d; color: white;" onclick="showDatePicker()">Choose Date</button>
                <div class="date-picker-overlay" id="datePickerOverlay" style="display: none;">
                    <div class="date-picker-popup">
                        <!-- Updated id for the input field -->
                        <input type="date" id="popupDatePicker">
                        <div>
                            <button onclick="submitDate()">Submit</button>
                            <button onclick="hideDatePicker()">Close</button>
                        </div>
                    </div>
                </div>
              <div class="events-overlay" id="eventsOverlay" style="display: none;">
            <div class="events-popup" id="eventsPopup">
                <!-- Event details will be displayed here -->
                
            </div>
            <button onclick="hideEventsOverlay()">Close</button>
            
        </div>
    </div>
            </div>
        </div>
        <div class="container my-4">
        <div class="row">
            <!-- Events You May Like Section -->
            <div class="col-md-6">
                <?php
                    $host = "127.0.0.1";
                    $username = "root";
                    $password = "";
                    $database = "event";

                    $conn = new mysqli($host, $username, $password, $database);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM events ORDER BY RAND() LIMIT 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $eventDay = strtoupper(date('D', strtotime($row["event_date"])));
                        $eventDate = date('d', strtotime($row["event_date"]));
                        $randomGradients = [
                            'linear-gradient(45deg, #f44336, #ff5722)', 
                            'linear-gradient(45deg, #9c27b0, #673ab7)', 
                            'linear-gradient(45deg, #3f51b5, #2196f3)', 
                            'linear-gradient(45deg, #ff9800, #ffeb3b)', 
                            'linear-gradient(45deg, #009688, #4caf50)'
                        ];
                        $randomGradient = $randomGradients[array_rand($randomGradients)];

                        echo '<div class="card w-100 mb-3" style="background: ' . $randomGradient . ';">
                                <div class="card-header">Event You May Like</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <p style="font-size: 40px;">' . $eventDay . '</p>
                                            <span style="font-size: 35px;">' . $eventDate . '</span>
                                        </div>
                                        <div class="col">
                                            <span style="font-size: 30px;">' . htmlspecialchars($row["event_name"]) . '</span>
                                            <p>' . date('D d M', strtotime($row["event_date"])) . ' ' . date('h.iA', strtotime($row["event_time"])) . ', ' . htmlspecialchars($row["event_venue"]) . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    } else {
                        echo '<p>No events found.</p>';
                    }

                    $conn->close();
                ?>
            </div>

            <!-- New Section on the Right Side -->
            <div class="col-md-6">
                <div class="new-section">
                    
                <div class="button-group my-3">
                    <button class="btn btn-primary btn-lg m-2">Sport</button>
                    <button class="btn btn-primary btn-lg m-2">Dance</button>
                    <button class="btn btn-primary btn-lg m-2">Party</button>
                    <button class="btn btn-primary btn-lg m-2">Crafts</button>
                    <button class="btn btn-primary btn-lg m-2">Workshop</button>
                    <button class="btn btn-light btn-lg m-2">More Events</button>
                </div>

                </div>
            </div>
        </div>
    </div>
        

    </div>
    <!-- content END -->



    <?php
      include 'footer.php';
    ?>
    <script>
        function showDatePicker() {
            document.getElementById('datePickerOverlay').style.display = 'flex';
        }

        function hideDatePicker() {
            document.getElementById('datePickerOverlay').style.display = 'none';
        }

        function submitDate() {
            var selectedDate = document.getElementById('popupDatePicker').value;
            hideDatePicker();

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "", true); // The empty string means this same file
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                    document.getElementById('eventsPopup').innerHTML = this.responseText;
                    document.getElementById('eventsOverlay').style.display = 'flex';
                }
            }
            xhr.send("date=" + encodeURIComponent(selectedDate));
        }

        function hideEventsOverlay() {
            document.getElementById('eventsOverlay').style.display = 'none';
        }
    </script>

    <script src="asset/js/bootstrap.bundle.min.js"></script>

</body>
</html>