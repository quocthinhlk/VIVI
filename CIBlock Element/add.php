<? 
$Iblock_ID = 352;

$el = new CIBlockElement;
$arField = array(
	'CODE_FIELD'		=>	'B04',
	'STRING_FIELD'		=>	'Learning',
	'NUMBER_FIELD'		=>	12345,
	'EMPLOYEE_FIELD'	=>	'Bitrix',
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
if($PRODUCT_ID = $el->Add($arLoadProductArray))
   echo "Add Success, New ID:".$PRODUCT_ID;
else 
  echo "Error:".$el->LAST_ERROR;
?>