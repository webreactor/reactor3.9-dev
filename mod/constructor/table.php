<?php
include_once LIB_DIR.'config_write.php';

class reactor_table extends basic_object{

function getList($page,$per_page,$where='')
{
	$modules=$this->_db->matr('pk_module','name');

foreach($r['data'] as $k=>$v)
$r['data'][$k]['name']='T_'.strtoupper($modules[$v['fk_module']]).'_'.strtoupper($v['name']);
	return $r;
function store(&$form)
{
$r=basic_object::store($form);
tablesCompile();
return $r;
}
}//end of class


?>