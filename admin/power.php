<?php
//  ------------------------------------------------------------------------ //
// ���Ҳե� �d����(tad0616@gmail.com) �s�@
// �s�@����G2008-02-06
// $Id: power.php,v 1.1 2008/05/14 01:27:37 tad Exp $
// ------------------------------------------------------------------------- //
/*-----------�ޤJ�ɮװ�--------------*/
include "header.php";
include "../function.php";
include_once XOOPS_ROOT_PATH."/Frameworks/art/functions.php";
include_once XOOPS_ROOT_PATH."/Frameworks/art/functions.admin.php";
include_once XOOPS_ROOT_PATH.'/class/xoopsform/grouppermform.php';

/*-----------function��--------------*/
$module_id = $xoopsModule->getVar('mid');

$main="";

//����Ҧ���Ƨ�

$sql = "select cat_sn,cat_title from ".$xoopsDB->prefix("tad_uploader");
$result = $xoopsDB->query($sql) or redirect_header($_SERVER['PHP_SELF'],3, _AM_TADUP_DB_ERROR1);
while(list($cat_sn,$cat_title)=$xoopsDB->fetchRow($result)){
	$item_list[$cat_sn]=$cat_title;
}


$title_of_form = _AM_TADUP_SET_ACCESS_POWER;
$perm_name = 'catalog';
$formi = new XoopsGroupPermForm($title_of_form, $module_id, $perm_name,$perm_desc);
foreach ($item_list as $item_id => $item_name) {
	$formi->addItem($item_id, $item_name);
}

$main.=$formi->render();

$title_of_form = _AM_TADUP_SET_UPLOAD_POWER;
$perm_name = 'catalog_up';
$formi = new XoopsGroupPermForm($title_of_form, $module_id, $perm_name,$perm_desc);
foreach ($item_list as $item_id => $item_name) {
	$formi->addItem($item_id, $item_name);
}

$main.=$formi->render();

/*-----------�q�X���G��--------------*/
echo $main;
include_once 'footer.php';
?>
