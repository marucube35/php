<?php

class User
{
    public $name;
    public $age;
    public $email;
    public $password;

    // setter
    public function set_name($name)
    {
        $this->name = $name;
    }

    // getter
    public function get_name()
    {
        return $this->name;
    }

    // constructor
    public function __construct(
        $name,
        $email,
        $age,
        $password
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->password = $password;
    }
}

// Create new user
$user1 = new User("Quan", 20, "mail@mail.com", "123");
$user2 = new User("Kwan", 80, "email@email.com", "321");

print_r($user1);
print_r($user2);

// Inheritance
class Employee extends User
{
    // No need to declare $position as it is already declared in constructor

    public function __construct(
        $name,
        $email,
        $age,
        $password,
        $position
    ) {
        parent::__construct($name, $email, $age, $password);
        $this->position = $position;
    }

    public function get_position()
    {
        return $this->position;
    }
}

$employee1 = new Employee('Kuan', 60, 'example@example.com', '123', 'Manager');
print_r($employee1);
