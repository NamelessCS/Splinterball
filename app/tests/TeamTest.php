<?php

class TeamTest extends TestCase {

	public function testInstance(){
		$team = new Team;
		$this->assertInstanceOf('Team', $team);
	}

}