<?php
class Haanga_Extension_Filter_Add
{
	static function main ($value,$add) {
		return (int)$value + (int)$add ;
	}
}
