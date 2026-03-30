<?php
$conn = new mysqli("localhost", "root", "", "db_data");

$result = $conn->query("SELECT * FROM sensor_data ORDER BY id DESC LIMIT 1");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>IoT Dashboard</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            background: #f4f4f4;
        }
        .card {
            display: inline-block;
            padding: 20px;
            margin: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
    </style>
</head>

<body>

<h1>DHT IoT Dashboard</h1>

<div class="card">
    <h2>Temperature</h2>
    <p><?php echo $row['temperature']; ?> °C</p>
</div>

<div class="card">
    <h2>Humidity</h2>
    <p><?php echo $row['humidity']; ?> %</p>
</div>

<div class="card">
    <h2>Time</h2>
    <p><?php echo $row['created_at']; ?></p>
</div>

<script>
setTimeout(() => {
    location.reload();
}, 5000);
</script>

</body>
</html>