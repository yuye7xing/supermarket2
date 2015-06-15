<?php
if(isset($_COOKIE['name'])){
	include '/html/index.html';
}
else {
	include_once '/html/login.html';
}
