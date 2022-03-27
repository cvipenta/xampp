<!-- put in ./www directory -->

<html>
 <head>
  <title>Hello...</title>

  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    <?php echo "<h1>Hi! I'm happy</h1>"; ?>

    <?php

    $host = 'db';
    $db   = 'practica';
    $user = 'user';
    $pass = 'test';
    $port = "3306";
    $charset = 'utf8mb4';


    $dsn = "mysql:dbname=$db;host=$host";
    $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        $pdo = new \PDO($dsn, $user, $pass, $options);
        $result = $pdo->query('SELECT * FROM practica.person');
        $persons = $result->fetchAll();


        echo '<table class="table table-striped">';
        echo '<thead><tr><th></th><th>id</th><th>name</th></tr></thead>';

        foreach ($persons as $person) {
            echo '<tr>';
            echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';

            echo '<td>' . $person['id'] . '</td>';
            echo '<td>' . $person['name'] . '</td>';


            echo '</tr>';
        }
        echo '</table>';

    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    ?>
    </div>
</body>
</html>