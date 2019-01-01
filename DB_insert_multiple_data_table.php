 <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDataBaseName";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $conn->beginTransaction();
    // our SQL statements
    $conn->exec("INSERT INTO MyCustomTable (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')");
    $conn->exec("INSERT INTO MyCustomTable (firstname, lastname, email)
    VALUES ('Bob', 'bbb', 'bob@example.com')");
    $conn->exec("INSERT INTO MyCustomTable (firstname, lastname, email)
    VALUES ('Alice', 'aaa', 'alice@example.com')");

    // commit the transaction
    $conn->commit();
    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
    }

$conn = null;
?> 
