<?php

class TeamRotation extends Eloquent{
	
	protected $table = 'tm_rotation';
	protected $primaryKey = 'rotation_id';
	protected $fillable = array('*');

}