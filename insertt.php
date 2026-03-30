<?php
$conn = new mysqli("localhost", "root", "", "db_data");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Read JSON
$data = json_decode(file_get_contents("php://input"));

if(isset($data->temperature) && isset($data->humidity)){

    $temp = $data->temperature;
    $hum = $data->humidity;

    $sql = "INSERT INTO sensor_data (temperature, humidity)
            VALUES ('$temp', '$hum')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted";
    } else {
        echo "Error: " . $conn->error;
    }

} else {
    echo "Invalid data";
}

$conn->close();
?>