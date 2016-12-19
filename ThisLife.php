<?php

namespace ThisLife;

use Consciousnes as self;
use Society as other; 

class Human extends experience {

	public $persona;
	public $age;
	public $sex;
	public $expirationDate;

	public function __construct(Human $mother, Human $father)
	{
		$this->sex = rand(0, 3);
		$this->expirationDate = rand(0, 82);
		$mother->getPregnant($father)->giveBirth();
		$this->age = 0;
		echo "hello world!";
		$this->persona = other::getSocialPreset();
		$this->age = 12;
		$this->buildPersonality();
		$this->age = 18;
		$this->liveBlindly();		
	}

	protected function liveBlindly()
	{
		while ( $this->age <= $this->expirationDate ) {
			$this->persona += other::react();
			$this->persona += (self::introspect() ? $this->whoAmI() : $this->liveBlindly());
			$age++;
		}
		$this->die();
	}

	protected function liveConsciously()
	{
		while ( $this->age <= $this->expirationDate ) {
			other::react();
			$this->persona += self::enjoyLife();
			$age++;
		}
		$this->die();
	}

	private function whoAmI()
	{
		try {
			self::realize();
			$this->persona = self::heightenConsciousness();
			$this->liveConsciously();
		} catch (other $distraction) {
			if ($this->sex == 1) {
				$this->getPregnant();
				$this->giveBirth();
			}
			$this->liveBlindly();
		}
	}

	protected function getPregnant($father)
	{
		other::react();
		self::experience('love');
	}

	protected function giveBirth()
	{
		other::react();
		self::experience('attachment');
		self::experience('everything');
	}

	protected function die()
	{
		self::experience('fear');
		echo "RIP";
		self::laugh();
	}

}
