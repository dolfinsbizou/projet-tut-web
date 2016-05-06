<?php
include_once("model/session.php");
session_destroy();
header("Location: ./");