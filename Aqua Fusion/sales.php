<?php
    require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="sales-style.css">
    <title>Aqua Fusion Management System</title>
</head>
<body>
    <!-- main web style -->
    <!-- main web style -->
<div class="user-profile" id="profMenu">
    <div class="user-profile-options">
        <img src="Assetsss/Coco_Martin.webp" alt="Profile Picture">
        <div class="username-role">
            <h3>Juan Dela Cruz</h3>
            <p>Admin</p>
        </div>
        <hr class="hr-line">
        <a href="#">
            <span class="material-symbols-outlined">manage_accounts</span>
            Edit Profile
        </a>
        <a href="#">
            <span class="material-symbols-outlined">settings</span>
            Settings
        </a>
        <a href="login.php">
            <span class="material-symbols-outlined">logout</span>
            Log out
        </a>
    </div>
</div>

<aside class="side-bar">
    <a href="dashboard.php" class="logo-click">
        <div class="logo">
            <img src="Assetsss/SVGLOG.svg" alt="Logo">
            <h3>Aqua Fusion</h3>
        </div>
    </a>
    <div class="nav-items">
        <a href="dashboard.php">
            <i class="material-icons md-48">dashboard</i>
            Dashboard
        </a>
        <a href="sales.php">
            <span class="material-icons">shopping_cart</span>
            Sales
        </a>
        <a href="reportsales.php">
            <span class="material-symbols-outlined">equalizer</span>
            Report sales
        </a>
    </div>
</aside>

<section class="top-bar">
    <div class="profile">
        <img src="Assetsss/Coco_Martin.webp" alt="Profile Picture" onclick="profClick()">
        <span class="material-symbols-outlined"></span>
    </div>
    <!-- user profile onclick function -->
    <script>
        let profMenu = document.getElementById("profMenu");
        function profClick(){
            profMenu.classList.toggle("open-prof-menu");
        }
    </script>
</section>
    <!-- main web style -->
    <!-- main web style -->

 <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_name = $_POST['customer_name'];
    $type = $_POST['type'];
    $delivery_address = $_POST['delivery_address'];
    $jar_type = $_POST['jar_type'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $payment_status= $_POST['payment_status'];
    $date = $_POST['date'];
    // Output the data for verification

    echo "<p>Customer Name: $customer_name</p>";
    echo "<p>Type: $type</p>";
    echo "<p>Delivery Address: $delivery_address</p>";
    echo "<p>Jar Type: $jar_type</p>";
    echo "<p>Quantity: $quantity</p>";
    echo "<p>Price: $price</p>";
    echo "<p>Payment Status: $payment_status</p>";
    echo "<p>Date:  $date</p>";
}  
?>

<table class="new-order-table">
  <thead>
    <tr>
      <th colspan="2" class="text-header">Create New Order</th>
    </tr>
  </thead>
  <tbody>
    <form method="post" action="dashboard.php">
      <tr>
        <td><label for="customer-name">Customer Name:</label></td>
        <td><input type="text" name="customer_name" id="customer-name" required></td>
      </tr>
      <tr>
        <td><label for="type">Type:</label></td>
        <td>
          <select name="type" id="type" required>
            <option value="">Select Type</option>
            <option value="Walk-in">Walk in</option>
            <option value="Delivery">Delivery</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="delivery-address">Delivery Address:</label></td>
        <td><input type="text" name="delivery_address" id="delivery-address" required></td>
      </tr>
      <tr>
        <td><label for="jar-type">Jar Type:</label></td>
        <td>
          <select name="jar_type" id="jar-type" required>
            <option value="">Select Jar Type</option>
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="quantity">Quantity:</label></td>
        <td><input type="number" name="quantity" id="quantity" required></td>
      </tr>
      <tr>
        <td><label for="price">Price:</label></td>
        <td><input type="number" name="price" id="price" required></td>
      </tr>
      <tr>
        <td><label for="payment-status">Payment Status:</label></td>
        <td>
          <select name="payment_status" id="payment-status" required>
            <option value="">Select Payment Status</option>
            <option value="Unpaid">Unpaid</option>
            <option value="Paid">Paid</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="date">Date:</label></td>
        <td><input type="date" name="date" id="date" required></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Add Order"></td>
      </tr>
      
    </form>
  </tbody>
</table>

<!--  If form is submitted, insert the data into the database -->
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $customer_name = $_POST['customer_name'];
        $type = $_POST['type'];
        $delivery_address = $_POST['delivery_address'];
        $jar_type = $_POST['jar_type'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $payment_status = $_POST['payment_status'];
        $date = $_POST['date'];

        // Establish a connection to the database
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        // Check if the connection is successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepare the insert statement
        $stmt = mysqli_prepare($conn, "INSERT INTO orders (customer_name, type, delivery_address, jar_type, quantity, price, payment_status, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        // Bind the parameters to the statement
        mysqli_stmt_bind_param($stmt, "ssssdsss", $customer_name, $type, $delivery_address, $jar_type, $quantity, $price, $payment_status, $date);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Order created successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        // Close the statement and connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }  
?>

</body>
</html>