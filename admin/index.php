<?php

include '../classes/database.class.php';
include '../classes/getmessages.class.php';

$db = new Database();
$data = $db->getData("SELECT * FROM messages ORDER BY date DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Messages Page</title>
</head>
<body class="">
<pre><h2>Inbox:</h2></pre>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
  <?php if($data) {
  foreach($data as $dat) { ?>
    <tr>
      <th scope="row"><?php echo $dat->getId() ?></th>
      <td><?php echo $dat->getDate() ?></td>
      <td><?php echo $dat->getName() ?></td>
      <td><?php echo $dat->getEmail() ?></td>
      <td><?php echo $dat->getMessage() ?></td>
    </tr>
    <?php } ?>
  <?php } else {
      echo "No messages found!";
  } ?>
  </tbody>
</table>
</body>
</html>





