<? 
$iblock = new CIBlock;
$arFields = Array(
	"ACTIVE" => 'Y',
	"NAME" => 'Learning CIBlock',
	"CODE" => 'LEARNGING CIBLOCK',
	"LIST_PAGE_URL" => '',
	"DETAIL_PAGE_URL" => '',
	"IBLOCK_TYPE_ID" => 'lists',
	"SITE_ID" => 's1',
	"SORT" => 500,
	"DESCRIPTION" => 'This is test CIBlock Bitrix24',
	"DESCRIPTION_TYPE" => 'text',
	"WORKFLOW"  =>  'N',
);
$ID_Block_Update = 352;
if ($res = $iblock->Update($ID_Block_Update, $arFields)){
	echo 'Update Success ID '.$ID_Block_Update;
}
else{
	echo 'Update Fail ID '.$ID_Block_Update;
}
?>