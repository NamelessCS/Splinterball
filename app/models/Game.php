<?php

class Game extends Eloquent{
	
	protected $table = 'gm_game';
	protected $primaryKey = 'game_id';
	protected $fillable = array('*');

}