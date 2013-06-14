<?php

class GameTest extends TestCase {

	public function testInstance(){
		$game = new Game;
		$this->assertInstanceOf('Game', $game);
	}

}