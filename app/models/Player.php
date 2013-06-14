<?php

class Player extends Eloquent{
	
	protected $table = 'pl_player';
	protected $primaryKey = 'player_id';
	protected $fillable = array('*');

}