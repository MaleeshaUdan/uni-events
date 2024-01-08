<?php
include 'session.php';
?>
<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "event";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $eventType = filter_input(INPUT_POST, 'eventType', FILTER_SANITIZE_STRING);
    $ticketType = filter_input(INPUT_POST, 'ticketType', FILTER_SANITIZE_STRING);
    $numTickets = filter_input(INPUT_POST, 'numTickets', FILTER_VALIDATE_INT);
    $eventDate = filter_input(INPUT_POST, 'eventDate', FILTER_SANITIZE_STRING);

    if ($eventType && $ticketType && $numTickets && $eventDate) {

        $stmt = $conn->prepare("INSERT INTO booking (eventType, ticketType, numTickets, eventDate) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $eventType, $ticketType, $numTickets, $eventDate);  
        if ($stmt->execute()) {
            echo "<script>
                    alert('Booking successful');
                    window.location.href='buyTicket.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Error in booking');
                    window.location.href='buyTicket.php';
                  </script>";
        }
        $stmt->close();
    } else {
        echo "<script>
                alert('Invalid input data');
                window.location.href='buyTicket.php';
              </script>";
    }
} else {
    header("Location: buyTicket.php");
    exit();
}
$conn->close();
?>
