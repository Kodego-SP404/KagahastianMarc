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
if (isset($_POST['submit'])) {
  header('Location: /php-feedback/php-feedback-activity-master/feedback.php');

  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $sql = "INSERT INTO feedbackdata (name, email, body) VALUES (:name, :email, :body)";
    $sql_run = $conn->prepare($sql);

    $data =[
      ':name' => $name,
     ':email' =>$email,
     ':body' =>$body,
   ];
   $sql_execute = $sql_run->execute($data);
   }
  $conn = null;

  ?>


  <?php include './inc/header.php';?>

    <main>
      <div class="container d-flex flex-column align-items-center">
        <img
          src="./img/logo.png"
          class="w-25 mb-3"
          alt=""
        />
        
        <h2>Feedback</h2>
        <p class="lead text-center">Leave feedback for Kodego SP404</p>
        <form class="mt-4 w-75 needs-validation" action="index.php" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              placeholder="Enter your name"
              required
            />
            <div class="invalid-feedback">Please provide name</div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Enter your email"
              required
            />
            <div class="invalid-feedback">Please provide email</div>
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Feedback</label>
            <textarea
              class="form-control"
              id="body"
              name="body"
              placeholder="Enter your feedback"
              required
            ></textarea>
          </div>
          <div class="mb-3">
            <input
              type="submit"
              name="submit"
              value="Send"
              class="btn btn-dark w-100"
            />
          </div>
        </form>
        
      </div>
      
    </main>

    <?php include './inc/footer.php';?>

    