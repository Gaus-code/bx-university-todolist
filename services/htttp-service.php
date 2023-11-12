<?php

// @todo check url is volid
function redirect(string $url)
{
	header("Location: $url");
}