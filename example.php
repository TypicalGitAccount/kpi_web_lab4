<?php

class Employee
{
    protected $name;
    protected $position;
    protected $salary;

    public function GetName() {
        return $this->name;
    }

    public function GetPosition() {
        return $this->position;
    }

    public function __construct($name, $pos, $salary) {
        $this->name = $name;
        $this->position = $pos;
        $this->salary = $salary;
    }

    public function ToString() {
        return $this->name . " " . $this->position . " salary: " . (string)$this->salary . "$ " . ";\n";
    }
}

class Manager extends Employee {
    private $inferiors;

    function __construct($name, $salary, $employees=null) {
        parent::__construct($name, "manager", $salary);
        $this->inferiors = $employees;
    }

    public function ToString()
    {
        $output = parent::ToString() . "Employees:\n";
        foreach ($this->inferiors as $key=>$val) {
            $output .= $val->ToString();
        }
        return $output;
    }
}

class Ceo {
    private $name;
    private static $IsInstatntiated;
    private static $instance;

    protected function __construct($name) { $this->name = $name; }

    public function ToString() { return $this->name . " owns this company."; }

    public static function GetInstance() {
        if (!Ceo::$IsInstatntiated) {
            Ceo::$IsInstatntiated = true;
            Ceo::$instance = new Ceo("Mr. Though Businessman");
        }

        return Ceo::$instance;
    }
}

function compareEmployeesByName($a, $b) {
    return strcmp($a->GetName(), $b->GetName());
}

$e1 = new Employee("Jan", "junior dev", 500);
$e2 = new Employee("Kate", "middle dev", 1000);
$e3 = new Employee("Alice", "tech lead", 2000);

$employees = array(
    $e1->GetPosition() => $e1,
    $e2->GetPosition() => $e2,
    $e3->GetPosition() => $e3
);

usort($employees, "compareEmployeesByName");

$explodeText = "Here are    example employee & manager classes:\n";

echo implode(" ", explode(" ", $explodeText));

$manager = new Manager("Olly", 3000, $employees);

echo $manager->ToString();

echo Ceo::GetInstance()->ToString();
