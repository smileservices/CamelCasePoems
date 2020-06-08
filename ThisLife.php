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
			if (self::introspect()) {
				$this->persona = $this->whoAmI();
			}				
			$age++;
		}
		$this->die();
	}

	protected function liveConsciously()
	{
		while ( $this->age <= $this->expirationDate ) {
			other::react();
			self::live();
			$age++;
		}
		$this->die();
	}

	private function whoAmI()
	{
		try {
			$this->persona = self::heightenConsciousness();
			$this->liveConsciously();
		} catch ($distraction) {
			if ($this->sex == 1) {
				$this->getPregnant(other::pick_someone(0);
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
		other::new_human(self, $father);
		other::react();
		self::experience('attachment');
		self::experience('everything');
	}

	protected function die()
	{
		self::experience('fear');
		echo "RIP";
		self::laugh();
		die();
	}

}
