<?php
/**
 *
 */
class RandomCode
{
	/**
	 * get a code of random numbers
	 * @param string $type; options are 'alphabet', 'numeric', 'alphanumeric'
	 * @param int $length
	 */
	static function getCode($type = 'alphanumeric', $length = 8)
	{
		$integers = array(0,1,2,3,4,5,6,7,8,9);
		$alphabet = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
		$alphanumeric = array(1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z');
		
		$options = null;
		
		// Deside which set of characters to use
		switch($type)
		{
			case 'numeric':
				$options = $integers;
				break;
			case 'alphabet':
				$options = $alphabet;
				break;
			case 'alphanumeric':
				$options = $alphanumeric;
				break;
			default:
				$options = $alphanumeric;
				break;
		}
		
		$max = count($options) - 1;
		$code = "";
		
		for($i=0; $i < $length; $i++)
		{
			$index = rand(0, $max);
			$code .= $options[$index];
		}
		
		return $code;
	}
	
	/**
	 * get a list of unique random codes (no repeated codes)
	 * @param string $type; options are 'alphabet', 'numeric', 'alphanumeric'
	 * @param int $length
	 */
	static function getList($type = 'alphanumeric', $length = 8, $numCodes = 10 )
	{
		$dupecheck = array();
		$list = array();
		$ct = 0;
		
		while($ct < $numCodes)
		{
			$code = self::getCode($type, $length);
			
			// See if code unique, if so add it to list and increment count
			if( ! isset($dupecheck[$code]) )
			{
				$list[] = $code;
				$ct++;
			}
		}
		
		return $list;
	}
	
	/**
	 * Print all codes, one on a line
	 * @param array $list
	 */
	static function printList(array $list)
	{
		foreach($list as $code)
		{
			echo $code;
			echo "\n";
		}	
	}
}

?>