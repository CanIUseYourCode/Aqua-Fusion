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
    <title>AFR Management System</title>
</head>
<body>


<div class="user-profile" id="profMenu">
        <div class="user-profile-options">
            <img src="System/img/Default-prof.jpg" alt="Profile Picture">
                <div class="username-role">
                    <h3>Karl Estenzo
                    <p>Owner</p>
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

        <a href="#">
            <span class="material-symbols-outlined">logout</span>
            Log out
        </a>
        </div>
    </div>

    <aside class="side-bar">
        <div class="logo">
        <img src="system/img/SVGLOG.svg" alt="Logo">

            <h3>Aqua Fusion</h3>
        </div>
        <!-- <p>Hello <span id="username"></span>, welcome to Aqua Fusion Management System, where you can easily track your sales records.</p> -->
            <div class="nav-items">
                <a href="dash.php">
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
            <img src="System/img/Default-prof.jpg" alt="Profile Picture" onclick="profClick()">

            <script>
    let profMenu = document.getElementById("profMenu");

    function profClick(){
        profMenu.classList.toggle("open-prof-menu");
    }
</script>

            <span class="material-symbols-outlined"></span>
        </div>
    </section>
<!-- data table -->

<html>
<style>
.form-container {
   position: absolute;
  width: 50%; 
  left: 20%; 
  top: 15%;
  left: 10.5%;
}

.type-f 
   {
    display: absolute;
    text-align: left;
    top: 15%;
    left: 45%;
    bottom: 92%;
  }

  .type-f label {
    display: block;
    margin-bottom: 5px;
  }

  .type-f select {
    width: 25%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    margin: 6px;
  }
 .form-container button{
    position: absolute;
    text-align: left;
    left: 250.5%;
    top: 15%;
    
 }
  </style>
<body>
<div class="form-container">
  <form class="type-f">
  <label for="type">Type</label> 
    <select name="type" id="type" required>
      <option value="">Select Type</option>
      <option value="Walk-in">Walk in</option>
      <option value="Delivery">Delivery</option>
     
</select>
    
    
    <label for="date"> Date:</label>
<select name="date" id="date">
  <option value="">--Select a date--</option>
  <option value="<?php echo date('Y-m-d'); ?>"><?php echo date('l, F jS Y'); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>"><?php echo date('l, F jS Y', strtotime('+1 day')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+2 days')); ?>"><?php echo date('l, F jS Y', strtotime('+2 days')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+3 days')); ?>"><?php echo date('l, F jS Y', strtotime('+3 days')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+4 days')); ?>"><?php echo date('l, F jS Y', strtotime('+4 days')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+5 days')); ?>"><?php echo date('l, F jS Y', strtotime('+5 days')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+6 days')); ?>"><?php echo date('l, F jS Y', strtotime('+6 days')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+7 days')); ?>"><?php echo date('l, F jS Y', strtotime('+7 days')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>"><?php echo date('l, F jS Y', strtotime('+8 day')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+2 days')); ?>"><?php echo date('l, F jS Y', strtotime('+9 days')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+3 days')); ?>"><?php echo date('l, F jS Y', strtotime('+10 days')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+4 days')); ?>"><?php echo date('l, F jS Y', strtotime('+11 days')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+5 days')); ?>"><?php echo date('l, F jS Y', strtotime('+12 days')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+6 days')); ?>"><?php echo date('l, F jS Y', strtotime('+13 days')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+7 days')); ?>"><?php echo date('l, F jS Y', strtotime('+14 days')); ?></option>
</select>
</div>

    <table>
        
      <thead>       
        <tr>
          <th>#</th>
          <th>Customer Name</th>
          <th>Type</th>
          <th>Delivery Address</th>
          <th>Jar Type</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total Amount</th>
          <th>Payment Status</th>
          <th>Date Created</th>
          
      </thead>
	<?php
 
 include ('config.php');


 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $customer_name = $_POST['customer_name'];
     $type = $_POST['type'];
     $delivery_address = $_POST['delivery_address'];
     $jar_type = $_POST['jar_type'];
     $quantity = $_POST['quantity'];
     $price = $_POST['price'];
     $payment_status= $_POST['payment_status'];
     $date = $_POST['date'];


     // Insert the data into the database if no errors
     if (empty($error_msgs)) {
         $total_amount = $quantity * $price;
         $sql = "INSERT INTO orders (id, customer_name, type, delivery_address, jar_type, quantity, payment_status, total_payment, price, order_date)
         VALUES ('$next_id', '$customer_name', '$type', '$delivery_address', '$jar_type', '$quantity', '$payment_status', '$total_amount', '$price', '$date')";
       
     }
 }
  

 // Get the current date and time
 $date = date('Y-m-d H:i:s');
 // Display the error messages in a table if any
 if (!empty($error_msgs)) {
     echo "<table>";
     foreach ($error_msgs as $msg) {
         echo "<tr><td>Error:</td><td>$msg</td></tr>";
     }
     echo "</table>";
 }

    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);
    
        
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr>';
          echo '<td>' . $row['id'] . '</td>';
          echo '<td>' . $row['customer_name'] . '</td>';
          echo '<td>' . $row['type'] . '</td>';
          echo '<td>' . $row['delivery_address'] . '</td>';
          echo '<td>' . $row['jar_type'] . '</td>';
          echo '<td>' . $row['quantity'] . '</td>';
          echo '<td>' . $row['price'] . '</td>';
          echo '<td>' . $row['total_payment'] . '</td>';
          echo '<td>' . $row['payment_status'] . '</td>';
          echo '<td>' . $row['order_date'] . '</td>';
          echo '</tr>'; 
        }?>
        
      </tbody>
    </table>
    
  </body>
  <div class="button"> <button onclick="window.print()">Print</button></div>

</html> 
