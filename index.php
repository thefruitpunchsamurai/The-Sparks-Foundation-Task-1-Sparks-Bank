<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sparks Bank</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />

  <!-- Google Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <!-- Styles -->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="\Sparks Bank\CSS\navbar.css">
  <link rel="stylesheet" type="text/css" href="\Sparks Bank\CSS\script.css">


</head>

<body>
 
  <div class="container">
    <div class="content">
      <?php
      include 'navbar.php';
      ?>
      <div class="headline">
        <h2>Bank of your Trust</h2>
        <p>
          Welcome to our banking website, where you'll find a range of financial services to meet your needs. From
          deposit accounts to loans and credit cards, we offer a variety of options to help you manage your money. Our
          secure online banking platform allows you to access your accounts and make transactions from anywhere, at any
          time.Trust us to provide you with innovative banking solutions that make your life
          easier. Start banking with us today.
        </p>
        <div class="buttons">
          <a href="\Sparks Bank\transfermoney.php" class="get-started"> Send Money </a>
          <a href="\Sparks Bank\users.php" class="get-started"> Create User </a>
          <a href="\Sparks Bank\transactionhistory.php" class="read-more"> View Transactions </a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>