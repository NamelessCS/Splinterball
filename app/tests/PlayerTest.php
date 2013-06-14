<?php

class PlayerTest extends TestCase {

	public function testInstance(){
		$player = new Player;
		$this->assertInstanceOf('Player', $player);
	}

}