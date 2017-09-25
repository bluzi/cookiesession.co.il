<?php
	function validator_is_file($key, $value, $parameter) {
		return is_file($value);
	}