<?php

require_once '_connec.php';

$pdo = new \PDO('mysql:host=127.0.0.1;dbname=kaamelot', 'sergtwo', 'jecode4wcs');

$query = "SELECT * FROM story";

$statement = $pdo->query($query);

$stories = $statement->fetchAll();

var_dump($_GET);

<html>
<head>
  
</head>
<body>
<form  action="/ma-page-de-traitement"  method="post">

    <div>

      <label  for="nom">Nom :</label>

      <input  type="text"  id="nom"  name="user_name">

    </div>

  </form>


</body>
</html>; 

