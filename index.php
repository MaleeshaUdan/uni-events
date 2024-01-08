<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Event Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #6B73FF, #000DFF);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }
        .btn-custom {
            margin: 0 10px;
        }
        h1 {
            margin-bottom: 30px;
        }
        @keyframes snowfall {
            0% {top: -10%;}
            100% {top: 100%;}
        }

        @keyframes snowfall {
            0% {top: -10%; left: randomLeft();}
            100% {top: 100%; left: randomLeft();}
        }
        .snowflake {
            position: absolute;
            top: -10%;
            color: #fff;
            opacity: 0.8;
            font-size: 1em;
            animation-name: snowfall;
            animation-duration: 10s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-name: snowfall;
            animation-duration: 10s;
            animation-timing-function: linear, ease-in-out;
            animation-iteration-count: infinite;
        }

        .snowflake:nth-child(5n+1) {font-size: 0.8em; animation-duration: 8s;}
        .snowflake:nth-child(5n+2) {font-size: 1.2em; animation-duration: 12s;}
        .snowflake:nth-child(5n+3) {font-size: 1.4em; animation-duration: 14s;}
        .snowflake:nth-child(5n+4) {font-size: 1.1em; animation-duration: 11s;}
        .snowflake:nth-child(5n+5) {font-size: 1em; animation-duration: 10s;}

        @keyframes sway {
            0% {transform: translateX(0px);}
            50% {transform: translateX(80px);}
            100% {transform: translateX(0px);}
        }
        .snowflake:nth-child(odd) {
            animation-name: snowfall, sway;
            animation-duration: 10s, 5s;
            animation-timing-function: linear;
        }
    </style>
</head>
<body>
    <div class="text-center">
        <h1>Welcome To Event Management System</h1>
        <a href="reg.html" class="btn btn-light btn-lg btn-custom">Sign Up</a>
        <a href="log-in.html" class="btn btn-light btn-lg btn-custom">Sign In</a>
    </div>
    <div class="snowflake">&#10052;</div>
    <div class="snowflake">&#10052;</div>
    <div class="snowflake">&#10052;</div>
    <div class="snowflake">&#10052;</div>
    <div class="snowflake">&#10052;</div>
    <div class="snowflake">&#10052;</div>
    <div class="snowflake">&#10052;</div>
    <div class="snowflake">&#10052;</div>
    <div class="snowflake">&#10052;</div>
    <div class="snowflake">&#10052;</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
