<?php 
class Customer {

    private $properties = [];





    public function __construct($id, $firstName, $lastName, $email) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
    
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }
        return null; 
    }

    public function __set($name, $value) {
        $this->properties[$name] = $value;
    }


    public function __call($name, $args) {

        $prefix = substr($name, 0, 3);
        $property = lcfirst(substr($name, 3));

        
        if ($prefix === 'get') {
            if (array_key_exists($property, $this->properties)) {
                return $this->properties[$property];
            }
        } elseif ($prefix === 'set') {
            $this->properties[$property] = $args[0];
        }
    }
    public function __toString() {
        return "Customer [ID: {$this->id}, First Name: {$this->firstName}, Last Name: {$this->lastName}, Email: {$this->email}]";
    }
}
?>

