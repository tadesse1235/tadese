<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company";
$conn = new . mysql( $servername ,$username, $password, $dbname);
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
            $this->fetchEmployeeData();
            private function fetchEmployeeData() {
                $sql = "SELECT name,salary FROM employee WHERE id = $this->id";
                $result = $this-> conn->query($sql);
                if( $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $this->name = $row["name"];
                    $this->salary = $row["salary"];
                }
                else{
                    $this->name = "unknown";
                    $this->salary = 0;
                }
            }
            }
        public function getDetails() {
            return "name:" . $this->name; . ",salary: $". $this->salary;
        }
    }
    class manager extends Employee {
        public function checkBonusEligibility() {
            
        public function getDetails() {
            return "Name: " . $this->name . ", Salary: $" . $this->salary;
        }
    }
    class Manager extends Employee {
        public function checkBonusEligibility(){}



            

        
    



?>