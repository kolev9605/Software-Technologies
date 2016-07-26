<html>
<head>

</head>
<body>
<form>
    Input:
    <br>
    <textarea name="input"></textarea>
    <br>
    Delimiter:
    <br>
    <input type="text" name="delimiter">
    <br>
    <input type="submit">
</form>
</body>
</html>

<?php

if (isset($_GET['input']) && isset($_GET['delimiter'])) {
    $lines = array_filter(array_map('trim', explode("\n", $_GET['input'])));
    $delimiter = $_GET['delimiter'];
    $name = explode($delimiter, $lines[0])[1];
    $surname = explode($delimiter, $lines[1])[1];
    $age = intval(explode($delimiter, $lines[2])[1]);
    $grade = floatval(explode($delimiter, $lines[3])[1]);
    $date = explode($delimiter, $lines[4])[1];
    $town = explode($delimiter, $lines[5])[1];

    $person = new Person($name, $surname, $age, $grade, $date, $town);

    $test = $person -> toJsonString();
    echo "$test";
}

class Person
{
    private $name;
    private $surname;
    private $age;
    private $grade;
    private $date;
    private $town;

    public function __construct($name, $surname, $age, $grade, $date, $town)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->grade = $grade;
        $this->date = $date;
        $this->town = $town;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getTown()
    {
        return $this->town;
    }

    public function toJsonString()
    {
        $json = [
            'name' => $this->getName(),
            'surname' => $this->getSurname(),
            'age' => $this->getAge(),
            'grade' => $this->getGrade(),
            'date' => $this->getDate(),
            'town' => $this->getTown()
        ];

        return json_encode($json, JSON_UNESCAPED_SLASHES);
    }
}
?>