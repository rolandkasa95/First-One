<html>
<head>

  <link rel="stylesheet" type="text/css" href="form.css">

  <title>Login</title>

</head>

<body>


<div class="div_form">
<form action="<?php $_PHP_SELF ?>" method = "GET">
  <h2 style="color: white">Login</h2> <br />
  <h3 style="color: white">Account</h3>
    <input type="text" name="account" placeholder="something" />
  <h3 style="color: white">Password</h3>
    <input type="password" name="password" placeholder="something" /> <br /> <br />
  <input type="Submit" value="Login">
  <form>
</div>

</body>

</html>




<?php

  $account = $_GET["account"];
  $password = $_GET["password"];

  $db->select('accounts','id,account',NULL,'account=' . $account . 'AND' . 'password=' . $password,'id DESC');
  $res = $db->getResult();

  echo "motherfuckers";

  print($res);

  if ($res)
    header("Location: ajax_example.html");
?>
