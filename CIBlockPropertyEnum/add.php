<? 
$Iblock_ID = 352;
$el = new CIBlockElement;

$arField = array(
	'CODE_FIELD'		=>	'B04',
	'STRING_FIELD'		=>	'Learning',
	'LIST_FIELD'		=>	'Student',
	'NUMBER_FIELD'		=>	12345,
	'EMPLOYEE_FIELD'	=>	'Bitrix',
	'COMPANY'			=>	'Vitranet24',
);
// ------------handle list field---------------
$property_enums=CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC","SORT"=>"ASC"),Array("IBLOCK_ID"=>$Iblock_ID,"CODE"=>"LIST_FIELD"));
while($enum_fields=$property_enums->GetNext()) {
	if($enum_fields["VALUE"] == $arField['LIST_FIELD']){
		$arField['LIST_FIELD'] = $enum_fields["ID"];
		echo '<pre>';
		var_dump($enum_fields["ID"]."-".$enum_fields["VALUE"]);
	}
}
// ------------------------------------------

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