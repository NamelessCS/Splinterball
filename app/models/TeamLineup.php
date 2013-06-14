<?php

class TeamLineup extends Eloquent{
	
	protected $table = 'tm_lineup';
	protected $primaryKey = 'lineup_id';
	protected $fillable = array('*');

}