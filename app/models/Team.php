<?php

class Team extends Eloquent{
	
	protected $table = 'tm_team';
	protected $primaryKey = 'team_id';
	protected $fillable = array('*');

}