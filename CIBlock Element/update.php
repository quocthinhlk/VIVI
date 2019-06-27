<? 
$Iblock_ID = 352;

$el = new CIBlockElement;
$arField = array(
	'CODE_FIELD'		=>	'B06',
	'STRING_FIELD'		=>	'Learning CIBlock',
	'NUMBER_FIELD'		=>	123456,
	'EMPLOYEE_FIELD'	=>	'Bitrix24',
	'COMPANY'			=>	'Vitranet24',
);

$arLoadProductArray = Array(
	"MODIFIED_BY"     	=> $USER -> GetID(),
	"IBLOCK_SECTION_ID" => false,
	"IBLOCK_ID"       	=> $Iblock_ID,
	"PROPERTY_VALUES" 	=> $arField,
	"NAME"            	=> "Element",
	"ACTIVE"          	=> "Y",
	"PREVIEW_TEXT"    	=> "",
	" DETAIL_TEXT "   	=> "",
);
$PRODUCT_ID = 100158;
if($res = $el->Update($PRODUCT_ID, $arLoadProductArray)){
	echo "Update Success, ID:".$PRODUCT_ID;
}else {
	echo "Error:".$el->LAST_ERROR;
}
?>