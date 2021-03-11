<?php 

class Conn           // No parent db class - it serves no purpose
// Class names begin with capitals, by convention
{

  private $host;   // Local copies of database credentials. Not really needed
  private $user;
  private $pass;
  private $dbname;

  // Set up the database connection in the constructor.
  public function __construct(string $host, string $user, string $password, string $dbname)
  {
    $this->host = $host;
    $this->user = $user;
    $this->pass = $password;
    $this->dbname = $dbname;

    // Set mysqli to throw exceptions on error
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // open a connection for later use | this diye random name variable set kora jay 
    $this->lalon = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    
  }
}

class Work extends Conn
{

  public function insert_user(string $email, string $password_hash)
  {
    $sql = "INSERT INTO user (email,password) VALUES (?,?)";
    $stmt = $this->lalon->prepare($sql);
    $stmt->bind_param('ss', $email, $password_hash);
    $stmt->execute();
    return;
  }
}


$obj = new Work("localhost", "root", "", "jobportal");

try {
  
    $obj->insert_user('user@example.com', 'asdfasdf');
    echo "inserted";
  } catch (Exception $e) {
    echo $e->getMessage();
  }


