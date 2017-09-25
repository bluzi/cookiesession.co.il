<?php
	function validator_required($key, $value, $parameter) {
		return $value != null && !empty($value);
	}