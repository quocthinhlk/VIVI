<?php
if(!CModule::IncludeModule("iblock"))
	return; 
$iBlockCode = 'EQUIPMENT_LIST_WAREHOUSE';
$iblockType = 'lists';
$iBlockObject = CIBlock:: GetList(Array(), Array('CODE'=> $iBlockCode, 'TYPE' => $iblockType));
while ($ar_res = $iBlockObject -> Fetch()) {
	$IBlockID = $ar_res['ID'];
	break;
}
var_dump($IBlockID);
?>