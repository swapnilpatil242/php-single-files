<?php

class Person {
	private $name;

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}
}

$robin = new Person();
$robin->setName('Robin');
echo $robin->getName();
echo "\n";

// above example explanations:
// In this simple class above. Field $name is encapsulated (private). 
// Users of the class is not aware how $name is stored in Person class. 
// Right now the $name is stored in memory. We can modify internal code of Person class to store it to a flat file or event a database. 
// Users of the class will not need to change any code, in fact they do not even know how $name is stored, because that is encapsulated and hided from them.




// Encapsulation is used to hide the values or state of a structured data object inside a class, 
// preventing unauthorized parties direct access to them. 
// It is a concept that motivates us to think through a method/class responsibility 
// and hide its internal implementation/details accordingly. 
// This will make it easy to modify the internal code in a long run without affecting other part of the system. 
// Visibility is the mechanism for encapsulation.

