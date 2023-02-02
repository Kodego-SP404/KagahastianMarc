<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=feedback", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$sql = 'SELECT * FROM feedbackdata';

$select = $conn->query($sql);
// $select = $conn->prepare ("SELECT * FROM feedback");
// $select->execute();
$result = $select->fetchAll();

  ?>


  <?php include './inc/header.php';?>

    <main>
      <div class="container d-flex flex-column align-items-center">
        <h2>Feedback</h2>
        <?php if (empty($result)){
          echo "<div class=\card my-3\">
          <div class=\"card-body text-center\">
          <p> No Feedback</p>
          </div>
          </div>";
        }

         ?>
        <?php foreach($conn->query($sql) as $row) { ?>
        <div class="card my-3">
          <div class="card-body">
            <?php echo $row['body'];echo "<br>";
            echo $row['name'];echo ("     ");
             echo $row['email'];echo ("     ");
             echo $row['date'];?>
          </div>
        </div>
        <?php } ?>
      </div>
    </main>

    <?php include './inc/footer.php';?>

    
