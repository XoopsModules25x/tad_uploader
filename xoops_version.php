<?php

//---�򥻳]�w---//
$modversion = array();

//---�Ҳհ򥻸�T---//
$modversion['name'] = _MI_TADUP_NAME;
$modversion['version']	= '3.0';
$modversion['description'] = _MI_TADUP_DESC;
$modversion['author'] = 'Tad(tad0616@gmail.com)';
$modversion['credits']	= "";
$modversion['help'] = 'page=help';
$modversion['license'] = 'GNU GPL 2.0';
$modversion['license_url'] = 'www.gnu.org/licenses/gpl-2.0.html/';
$modversion['image']		= "images/logo_{$xoopsConfig['language']}.png";
$modversion['dirname']		= basename(dirname(__FILE__));


//---�Ҳժ��A��T---//
$modversion['release_date'] = '2013/09/08';
$modversion['module_website_url'] = 'http://tad0616.net/';
$modversion['module_website_name'] = _MI_TAD_WEB;
$modversion['module_status'] = 'release';
$modversion['author_website_url'] = 'http://tad0616.net/';
$modversion['author_website_name'] = _MI_TAD_WEB;
$modversion['min_php']=5.2;
$modversion['min_xoops']='2.5';

//---paypal��T---//
$modversion ['paypal'] = array();
$modversion ['paypal']['business'] = 'tad0616@gmail.com';
$modversion ['paypal']['item_name'] = 'Donation : ' . _MI_TAD_WEB;
$modversion ['paypal']['amount'] = 0;
$modversion ['paypal']['currency_code'] = 'USD';


//---��ƪ�[�c---//
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
$modversion['tables'][1] = "tad_uploader";
$modversion['tables'][2] = "tad_uploader_file";
$modversion['tables'][3] = "tad_uploader_dl_log";

//---�޲z�����]�w---//
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";


//---�Ұʫ�x�޲z�ɭ����---//
$modversion['system_menu'] = 1;

//---�w�˳]�w---//
$modversion['onInstall'] = "include/onInstall.php";
$modversion['onUpdate'] = "include/onUpdate.php";
$modversion['onUninstall'] = "include/onUninstall.php";


//---�ϥΪ̥D���]�w---//
$modversion['hasMain'] = 1;
	

//---�˪O�]�w---//
$modversion['templates'] = array();
$i=1;
$modversion['templates'][$i]['file'] = 'tad_uploader_main.html';
$modversion['templates'][$i]['description'] = 'tad_uploader_main.html';

$i++;
$modversion['templates'][$i]['file'] = 'tad_uploader_uploads.html';
$modversion['templates'][$i]['description'] = 'tad_uploader_uploads.html';

$i++;
$modversion['templates'][$i]['file'] = 'tad_uploader_adm_main.html';
$modversion['templates'][$i]['description'] = 'tad_uploader_adm_main.html';

$i++;
$modversion['templates'][$i]['file'] = 'tad_uploader_adm_power.html';
$modversion['templates'][$i]['description'] = 'tad_uploader_adm_power.html';


//---�϶��]�w---//
$modversion['blocks'][1]['file'] = "catalog_block_1.php";
$modversion['blocks'][1]['name'] = _MI_TADUP_BNAME1;
$modversion['blocks'][1]['description'] = _MI_TADUP_BDESC1;
$modversion['blocks'][1]['show_func'] = "catalog_b_show_1";
$modversion['blocks'][1]['template'] = "catalog_block_1.html";
$modversion['blocks'][1]['edit_func'] = "catalog_b_edit_1";
$modversion['blocks'][1]['options'] = "10";


//---�Ҳհ��n�]�w---//
$modversion['config'][1]['name'] = 'page_show_num';
$modversion['config'][1]['title'] = '_MI_PAGE_SHOW_NUM';
$modversion['config'][1]['description'] = '_MI_PAGE_SHOW_NUM_DESC';
$modversion['config'][1]['formtype'] = 'texbox';
$modversion['config'][1]['valuetype'] = 'int';
$modversion['config'][1]['default'] = "16";

$modversion['config'][2]['name'] = 'only_show_desc';
$modversion['config'][2]['title'] = '_MI_ONLY_SHOW_DESC';
$modversion['config'][2]['description'] = '_MI_ONLY_SHOW_DESC_DESC';
$modversion['config'][2]['formtype'] = 'yesno';
$modversion['config'][2]['valuetype'] = 'int';
$modversion['config'][2]['default'] = "1";

$modversion['config'][3]['name'] = 'show_mode';
$modversion['config'][3]['title'] = "_MI_SHOW_MODE";
$modversion['config'][3]['description'] = '_MI_SHOW_MODE_DESC';
$modversion['config'][3]['formtype'] = 'select';
$modversion['config'][3]['valuetype'] = 'text';
$modversion['config'][3]['options'] = array(
											_MI_SHOW_MODE_MORE=>'more',
											_MI_SHOW_MODE_ICON=>'icon'
											);
$modversion['config'][3]['default'] = 'more';

?>
