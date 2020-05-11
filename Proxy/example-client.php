<?php
require_once('CurseWordBlockerProxy.php');

$proxy = new CurseWordBlockerProxy("message not filtered");
var_dump($proxy->filterMessage());
?>