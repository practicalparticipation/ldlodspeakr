<?php
class Haanga_Extension_Filter_Subtract
{
	static function main ($value,$subtract) {
		return (int)$value - (int)$subtract ;
	}
}
