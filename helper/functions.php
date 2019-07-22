<?php
function sanitize($string)
{
	return stripcslashes(htmlspecialchars(trim($string), ENT_QUOTES, 'UTF-8'));
}