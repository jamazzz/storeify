<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
session_destroy();
header("Location: {$_SERVER['HTTP_REFERER']}");
