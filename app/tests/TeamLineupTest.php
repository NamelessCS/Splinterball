<?php

class TeamLineupTest extends TestCase {

	public function testInstance(){
		$teamLineup = new TeamLineup;
		$this->assertInstanceOf('TeamLineup', $teamLineup);
	}

}