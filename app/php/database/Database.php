<?php
namespace php\database;
use PDO;

class  Database {

      public function connectToDatabase() {
    
        $dsn = "mysql:host=localhost;dbname=betaform;charset=utf8mb4";
        $options = [
          PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
          PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
          PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC, //make the default fetch be an associative array
        ];
       
        try {
          $pdo = new PDO($dsn, 'betaform', 'prem@123', $options);
          echo "working" ."\n"; 
        } 

        catch (Exception $e) {
         error_log($e->getMessage());
         exit('Something weird happened'); //something a user can understand
        }
    }


      public function insertData($rating, $currentdate, $name, $mobile) { 
    
        $dsn = "mysql:host=localhost;dbname=betaform;charset=utf8mb4";
        $options = [
          PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
          PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
          PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC, //make the default fetch be an associative array
        ];
       
    
        $pdo = new PDO($dsn, 'betaform', 'prem@123', $options);
        $stmt = $pdo->prepare("INSERT INTO rate (rating, cdate, name, mobile) VALUES (?,?,?,?)");
        $stmt->execute([$rating, $currentdate, $name, $mobile]);   
        $stmt = null;
    }

}

?>