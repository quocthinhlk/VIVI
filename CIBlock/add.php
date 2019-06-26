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
if ($ID_Block > 0){
  $res = $iblock->Update($ID_Block, $arFields);
  echo 'Update Success ID '.$ID_Block;
  AddMessage2Log($ID_Block,__LINE__.__FILE__);
}
else{
  $ID_Block = $iblock->Add($arFields);
  $res = ($ID_Block>0);
  echo 'Add Success ID '.$ID_Block;
  AddMessage2Log($ID_Block,__LINE__.__FILE__);
}
?>