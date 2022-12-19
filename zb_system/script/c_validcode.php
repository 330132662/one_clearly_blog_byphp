<?php

/**
 * zhonggong with PHP.
 *
 * @author zhonggongPHP Team
 */
require '../function/c_system_base.php';
$zbp->Load();
ob_clean();

$zbp->ShowValidCode(GetVars('id', 'GET'));
