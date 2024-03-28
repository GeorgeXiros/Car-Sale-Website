<?php
$servername = "Ο_ΔΙΑΚΟΜΙΣΤΗΣ";
$username = "Ο_ΧΡΗΣΤΗΣ";
$password = "Ο_ΚΩΔΙΚΟΣ";
$dbname = "ΤΟ_ΟΝΟΜΑ_ΤΗΣ_ΒΑΣΗΣ";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Αποτυχία σύνδεσης με τη βάση δεδομένων: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $carType = $_POST["carType"];
    $cubicCapacity = $_POST["cubicCapacity"];
    $year = $_POST["year"];
    $kilometers = $_POST["kilometers"];
    $price = $_POST["price"];

    $sql = "INSERT INTO cars (carType, cubicCapacity, year, kilometers, price) VALUES ('$carType', '$cubicCapacity', '$year', '$kilometers', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "Τα δεδομένα αποθηκεύτηκαν με επιτυχία!";
    } else {
        echo "Σφάλμα κατά την αποθήκευση των δεδομένων: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Φόρμα Αυτοκινήτου</title>
</head>
<body>
    <h2>Συμπληρώστε τα στοιχεία του αυτοκινήτου</h2>
    <form action="" method="post">
        <label for="carType">Τύπος Αυτοκινήτου:</label>
        <input type="text" id="carType" name="carType" required><br>

        <label for="cubicCapacity">Κυβικά:</label>
        <input type="text" id="cubicCapacity" name="cubicCapacity" required><br>

        <label for="year">Χρονολογία:</label>
        <input type="text" id="year" name="year" required><br>

        <label for="kilometers">Χιλιόμετρα:</label>
        <input type="text" id="kilometers" name="kilometers" required><br>

        <label for="price">Τιμή:</label>
        <input type="text" id="price" name="price" required><br>

        <input type="submit" value="Υποβολή">
    </form>
</body>
</html>
