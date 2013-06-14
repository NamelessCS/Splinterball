<?php

class TeamRotationTest extends TestCase {

	public function testInstance(){
		$teamRotation = new TeamRotation;
		$this->assertInstanceOf('TeamRotation', $teamRotation);
	}

}