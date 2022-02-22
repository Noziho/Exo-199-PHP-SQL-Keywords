<?php
require __DIR__ . '/Config.php';
require __DIR__. '/DB_Connect.php';

$stmt = DB_Connect::dbConnect()->prepare("
    SELECT prenom, nom, pays FROM users
");

if ($stmt->execute()) {
    foreach ($stmt->fetchAll() as $value) {
        foreach ($value as $key => $user) {
            echo $key." => ".$user . "<br>";
        }
        echo "<hr>";
    }
}

$stmt = DB_Connect::dbConnect()->prepare("
    SELECT DISTINCT pays FROM users
");

if ($stmt->execute()) {
    foreach ($stmt->fetchAll() as $value) {
        foreach ($value as $key => $user) {
            echo $key." => ".$user . "<br>";
        }
        echo "<hr>";
    }
}

$stmt = DB_Connect::dbConnect()->prepare("
    SELECT * from users ORDER BY nom ASC
");

if ($stmt->execute()) {
    foreach ($stmt->fetchAll() as $value) {
        foreach ($value as $key => $user) {
            echo $key." => ".$user . "<br>";
        }
        echo "<hr>";
    }
}

$stmt = DB_Connect::dbConnect()->prepare("
    SELECT * from users ORDER BY nom DESC
");

if ($stmt->execute()) {
    foreach ($stmt->fetchAll() as $value) {
        foreach ($value as $key => $user) {
            echo $key." => ".$user . "<br>";
        }
        echo "<hr>";
    }
}


$stmt = DB_Connect::dbConnect()->prepare("
    SELECT MIN(argent) from users
");

if ($stmt->execute()) {
    foreach ($stmt->fetch() as $value) {
        echo $value;
        echo "<hr>";
    }
}

$stmt = DB_Connect::dbConnect()->prepare("
    SELECT MAX(argent) from users
");

if ($stmt->execute()) {
    foreach ($stmt->fetch() as $value) {
        echo $value;
        echo "<hr>";
    }
}

$stmt = DB_Connect::dbConnect()->prepare("
    SELECT MIN(argent) as argentMin from users where 1
");

if ($stmt->execute()) {
    foreach ($stmt->fetch() as $key => $value) {
        echo $key ."=>". $value;
        echo "<hr>";
    }
}

$stmt = DB_Connect::dbConnect()->prepare("
    SELECT count(*) from users where argent < 50000
");

if ($stmt->execute()) {
    foreach ($stmt->fetchAll() as $value) {
        foreach ($value as $key => $user) {
            echo $key." => ".$user . "<br>";
        }
        echo "<hr>";
    }
}

$stmt = DB_Connect::dbConnect()->prepare("
   SELECT avg(argent) from users
");

if ($stmt->execute()) {
    foreach ($stmt->fetchAll() as $value) {
        foreach ($value as $key => $user) {
            echo $key." => ".$user . "<br>";
        }
        echo "<hr>";
    }
}

$stmt = DB_Connect::dbConnect()->prepare("
   SELECT sum(argent) from users
");

if ($stmt->execute()) {
    foreach ($stmt->fetchAll() as $value) {
        foreach ($value as $key => $user) {
            echo $key." => ".$user . "<br>";
        }
        echo "<hr>";
    }
}

$stmt = DB_Connect::dbConnect()->prepare("
   SELECT * FROM users WHERE prenom LIKE 'j%'
");

if ($stmt->execute()) {
    foreach ($stmt->fetchAll() as $value) {
        foreach ($value as $key => $user) {
            echo $key." => ".$user . "<br>";
        }
        echo "<hr>";
    }
}

$stmt = DB_Connect::dbConnect()->prepare("
   SELECT * FROM users WHERE prenom like '%s'
");

if ($stmt->execute()) {
    foreach ($stmt->fetchAll() as $value) {
        foreach ($value as $key => $user) {
            echo $key." => ".$user . "<br>";
        }
        echo "<hr>";
    }
}

$stmt = DB_Connect::dbConnect()->prepare("
   SELECT * FROM users WHERE prenom like '%a%'
");

if ($stmt->execute()) {
    foreach ($stmt->fetchAll() as $value) {
        foreach ($value as $key => $user) {
            echo $key." => ".$user . "<br>";
        }
        echo "<hr>";
    }
}












