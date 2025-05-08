<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caompan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
class Employee {
    protected $conn;
    protected $id;
    protected $name;
    protected $salary;

    public function __construct($conn, $id) {
        $this->conn = $conn;
        $this->id = $id;
        $this->fetchData();
    }

    private function fetchData() {
        $sql = "SELECT name, salary FROM employee WHERE id = $this->id";
        $result = $this->conn->query($sql);
    
        if ($result === false) {
            die("Error in SQL query: " . $this->conn->error);
        }
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $this->name = $row['name'];
            $this->salary = $row['salary'];
        } else {
            $this->name = "Unknown";
            $this->salary = 0;
        }
    }

    public function getDetails() {
        return "Name: " . $this->name . ", Salary: $" . $this->salary;
    }
}
class Manager extends Employee {
    public function checkBonusEligibility() {
        if ($this->salary > 5000) {
            return "Eligible for bonus";
        } else {
            return "Not eligible for bonus";
        }
    }
}

$employee1 = new Manager($conn,1 );
$employee2 = new Manager($conn,  12);
echo $employee1->getDetails() . "\n";
echo $employee1->checkBonusEligibility() . "\n";
echo "</br>";
echo $employee2->getDetails() . "\n";
echo $employee2->checkBonusEligibility() . "\n";

$conn->close();

?>
