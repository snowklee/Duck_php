<?php

interface FlyBehavior {
	public function fly();
}
class FlyWthWings implements FlyBehavior {
	public function fly() {
		echo "Я лечу!";
	}
}
class FlyNoWay implements FlyBehavior {
	public function fly() {
		echo "Я не умею летать!";
	}
}
class Duck {
	public $flyBehavior;

	public function performFly() {
		$this ->$flyBehavior->fly();
	}
}
class MallardDuck extends Duck {
	function __constructor() {
		$this->$flyBehavior = new FlyWthWings();
	}
}

$duck1 = new MallardDuck();
$duck1->performFly();
?>