<?php
include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Ticket Booking Form</h2>
        <form action="checkBooking.php" method="POST">

            <div class="mb-3">
                <label for="eventType" class="form-label">Choose Event Type:</label>
                <select class="form-select" id="eventType" name="eventType" required>
                    <option value="">Select an option</option>
                    <option value="Movie">Movie</option>
                    <option value="Events">Events</option>
                </select>
            </div>

           
            <div class="mb-3">
                <label for="ticketType" class="form-label">Ticket Type:</label>
                <select class="form-select" id="ticketType" name="ticketType" required>
                    <option value="">Select ticket type</option>
                    <option value="VVIP">VVIP</option>
                    <option value="VIP">VIP</option>
                    <option value="Normal">Normal</option>
                </select>
            </div>

           
            <div class="mb-3">
                <label for="numTickets" class="form-label">Number of Tickets:</label>
                <input type="number" class="form-control" id="numTickets" name="numTickets" min="1" required>
            </div>

        
            <div class="mb-3">
                <label for="eventDate" class="form-label">Date:</label>
                <input type="date" class="form-control" id="eventDate" name="eventDate" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
