<?php 
// Open phpBB3 root/common.php

// Add doc blocks above
$cache	= new cache();
$db	= new $sql_db();

// So they look like this
/** @var $cache acm */
$cache	= new cache();

/** @var $db dbal_mysql */
$db	= new $sql_db();

// This should provide code completion for most if not all query functions in phpBB3 and also cache functions