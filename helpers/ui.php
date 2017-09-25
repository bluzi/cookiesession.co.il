<?php
	function assemble_title() {
		$returnVal = config()['title'];
		$args = func_get_args();
		foreach ($args as $titleSection) {
			$returnVal .= config()['title_separator'] . $titleSection;
		}
		
		return $returnVal;
	}