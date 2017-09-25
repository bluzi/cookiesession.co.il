<?php
	function validator_email($key, $value, $parameter) {
		return filter_var($value, FILTER_VALIDATE_EMAIL);
	}