<?php
use XoopsModules\Tadtools\Utility;

/*-----------引入檔案區--------------*/
require dirname(dirname(dirname(__DIR__))) . '/include/cp_header.php';

$of_cat_sn = (int)$_POST['of_cat_sn'];
$cat_sn = (int)$_POST['cat_sn'];

if ($of_cat_sn == $cat_sn) {
    die(_MA_TREETABLE_MOVE_ERROR1 . '(' . date('Y-m-d H:i:s') . ')');
} elseif (chk_cate_path($cat_sn, $of_cat_sn)) {
    die(_MA_TREETABLE_MOVE_ERROR2 . '(' . date('Y-m-d H:i:s') . ')');
}

$sql = 'update ' . $xoopsDB->prefix('tad_uploader') . " set `of_cat_sn`='{$of_cat_sn}' where `cat_sn`='{$cat_sn}'";
$xoopsDB->queryF($sql) or die('Reset Fail! (' . date('Y-m-d H:i:s') . ')');

echo _MA_TREETABLE_MOVE_OK . ' (' . date('Y-m-d H:i:s') . ')';

//檢查目的地編號是否在其子目錄下
function chk_cate_path($cat_sn, $of_cat_sn)
{
    global $xoopsDB;
    //抓出子目錄的編號
    $sql = 'select cat_sn from ' . $xoopsDB->prefix('tad_uploader') . " where of_cat_sn='{$cat_sn}'";
    $result = $xoopsDB->query($sql) or Utility::web_error($sql, __FILE__, __LINE__);
    while (list($sub_cat_sn) = $xoopsDB->fetchRow($result)) {
        if (chk_cate_path($sub_cat_sn, $of_cat_sn)) {
            return true;
        }

        if ($sub_cat_sn == $of_cat_sn) {
            return true;
        }
    }

    return false;
}
