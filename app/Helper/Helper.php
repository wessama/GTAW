<?php

/**
 * @Author: Wessam Ahmed
 * @Date:   2020-02-29 03:38:23
 * @Last Modified by:   Wessam Ahmed
 * @Last Modified time: 2020-02-29 04:09:54
 */

namespace App\Helper;

class Helper{

	public static function numToRoman($number)
	{
		$map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
		$returnValue = '';
		while ($number > 0) {
			foreach ($map as $roman => $int) {
				if($number >= $int) {
					$number -= $int;
					$returnValue .= $roman;
					break;
				}
			}
		}
		return $returnValue;	
	}

}
