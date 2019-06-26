<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/services/lists/index.php");
$APPLICATION->SetTitle(GetMessage("SERVICES_TITLE"));
?>

<?
use \Bitrix\Main\Application;
$iblock = new CIBlock;
$arFields = Array(
  "ACTIVE" => 'Y',
  "NAME" => 'Learning CIBlock',
  "CODE" => 'LEARNING_CIBLOCK',
  "LIST_PAGE_URL" => '',
  "DETAIL_PAGE_URL" => '',
  "IBLOCK_TYPE_ID" => 'lists',
  "SITE_ID" => 's1',
  "SORT" => 500,
  "DESCRIPTION" => 'This is learning CIBlock',
  "DESCRIPTION_TYPE" => 'text',
  "WORKFLOW"  =>  'N',
  );
if ($ID_Block > 0){
  $res = $iblock->Update($ID_Block, $arFields);
  echo 'Update Success ID '.$ID_Block;
}
else{
  $ID_Block = $iblock->Add($arFields);
  $res = ($ID_Block>0);
  echo 'Add Success ID '.$ID_Block;
}

$dataFields['IBLOCK_ID']  = $ID_Block;
$connection = Application::getConnection();
$dataFields   = [
  'IBLOCK_ID' =>  $ID_Block,
  'FIELD_ID'  =>  'PROPERTY_',
  'SORT'  =>  '500',
  'NAME'  =>  '',
  'SETTINGS'  =>  "'".serialize([
    'SHOW_ADD_FORM' =>  'Y',
    'SHOW_EDIT_FORM'  =>  'Y',
    'ADD_READ_ONLY_FIELD' =>  'N',
    'EDIT_READ_ONLY_FIELD'  =>  'N',
    'SHOW_FIELD_PREVIEW'  =>  'N', 
  ])."'",
];

// -------------------Create field------------------
$iBlockProperty = new CIBlockProperty;  

$stringField = Array(
  'NAME' => 'String Field',
  'ACTIVE' => 'Y',

  'IS_SEARCHABLE'     => 'N',
  'SORT' => '100',
  'XML_ID'  =>  'STRING_FIELD',
  'CODE' => 'STRING_FIELD',
  'PROPERTY_TYPE' => 'S',    // S=String, N=Number, L=List
  // 'USER_TYPE' => 'employee', 
  // 'USER_TYPE' => 'Date',
  'IBLOCK_ID' => $ID_Block,
  'IS_REQUIRED' =>  'N',
  'MULTIPLE_CNT'    => '1',
  'IS_SEARCHABLE'     => 'Y',
  'SHOW_FILTER'       => 'Y',
  'SHOW_IN_LIST'      => 'Y',
  'EDIT_FORM_LABEL'   => array(
      'vi'    => 'String Field',
      'en'    => 'String Field',
  ),
  /* List label */
  'LIST_COLUMN_LABEL' => array(
      'vi'    => 'String Field',
      'en'    => 'String Field',
  ),
  /* List filter label */
  'LIST_FILTER_LABEL' => array(
    'vi'    => 'String Field',
      'en'    => 'String Field',
  ),
);
$stringFieldID = $iBlockProperty->Add($stringField);
$dataFields['FIELD_ID'] = "'PROPERTY_".$stringFieldID."'";  
$dataFields['NAME']   = "'".$stringField['NAME']."'";
$data   = implode(',',$dataFields);
$sql  = "INSERT INTO `b_lists_field` (`IBLOCK_ID`,`FIELD_ID`,`SORT`,`NAME`,`SETTINGS`) VALUE ($data)";
$connection->queryExecute($sql);


$numberField = Array(
  'NAME' => 'Number Field',
  'ACTIVE' => 'Y',

  'IS_SEARCHABLE'     => 'N',
  'SORT' => '100',
  'XML_ID'  =>  'NUMBER_FIELD',
  'CODE' => 'NUMBER_FIELD',
  'PROPERTY_TYPE' => 'N',
  'IBLOCK_ID' => $ID_Block,
  'IS_REQUIRED' =>  'N',
  'MULTIPLE_CNT'    => '1',
  'IS_SEARCHABLE'     => 'Y',
  'SHOW_FILTER'       => 'Y',
  'SHOW_IN_LIST'      => 'Y',
  'EDIT_FORM_LABEL'   => array(
      'vi'    => 'Number Field',
      'en'    => 'Number Field',
  ),
  /* List label */
  'LIST_COLUMN_LABEL' => array(
      'vi'    => 'Number Field',
      'en'    => 'Number Field',

  ),
  /* List filter label */
  'LIST_FILTER_LABEL' => array(
    'vi'    => 'Number Field',
      'en'    => 'Number Field',
  ),
);
$numberFieldID = $iBlockProperty->Add($numberField);
$dataFields['FIELD_ID'] = "'PROPERTY_".$numberFieldID."'";    
$dataFields['NAME']   = "'".$numberField['NAME']."'";
$data   = implode(',',$dataFields);
$sql  = "INSERT INTO `b_lists_field` (`IBLOCK_ID`,`FIELD_ID`,`SORT`,`NAME`,`SETTINGS`) VALUE ($data)";
$connection->queryExecute($sql);

$listField = Array(
  'NAME' => 'List Field',
  'ACTIVE' => 'Y',

  'IS_SEARCHABLE'     => 'N',
  'SORT' => '100',
  'XML_ID'  =>  'LIST_FIELD',
  'CODE' => 'LIST_FIELD',
  'PROPERTY_TYPE' => 'L',    // S=String, N=Number, L=List
  // 'USER_TYPE' => 'employee', 
  // 'USER_TYPE' => 'Date',
  'IBLOCK_ID' => $ID_Block,
  'IS_REQUIRED' =>  'N',
  'MULTIPLE_CNT'    => '1',
  'IS_SEARCHABLE'     => 'Y',
  'SHOW_FILTER'       => 'Y',
  'SHOW_IN_LIST'      => 'Y',
  'EDIT_FORM_LABEL'   => array(
      'vi'    => 'List Field',
      'en'    => 'List Field',
  ),
  /* List label */
  'LIST_COLUMN_LABEL' => array(
      'vi'    => 'List Field',
      'en'    => 'List Field',
  ),
  /* List filter label */
  'LIST_FILTER_LABEL' => array(
    'vi'    => 'List Field',
      'en'    => 'List Field',
  ),
);
$listFieldID = $iBlockProperty->Add($listField);
$dataFields['FIELD_ID'] = "'PROPERTY_".$listFieldID."'";  
$dataFields['NAME']   = "'".$listField['NAME']."'";
$data   = implode(',',$dataFields);
$sql  = "INSERT INTO `b_lists_field` (`IBLOCK_ID`,`FIELD_ID`,`SORT`,`NAME`,`SETTINGS`) VALUE ($data)";
$connection->queryExecute($sql);

$employeeField = Array(
  'NAME' => 'Employee Field',
  'ACTIVE' => 'Y',

  'IS_SEARCHABLE'     => 'N',
  'SORT' => '100',
  'XML_ID'  =>  'EMPLOYEE_FIELD',
  'CODE' => 'EMPLOYEE_FIELD',
  'PROPERTY_TYPE' => 'S',    // S=String, N=Number, L=List
  'USER_TYPE' => 'employee', 
  // 'USER_TYPE' => 'Date',
  'IBLOCK_ID' => $ID_Block,
  'IS_REQUIRED' =>  'N',
  'MULTIPLE_CNT'    => '1',
  'IS_SEARCHABLE'     => 'Y',
  'SHOW_FILTER'       => 'Y',
  'SHOW_IN_LIST'      => 'Y',
  'EDIT_FORM_LABEL'   => array(
      'vi'    => 'Employee Field',
      'en'    => 'Employee Field',
  ),
  /* List label */
  'LIST_COLUMN_LABEL' => array(
      'vi'    => 'Employee Field',
      'en'    => 'Employee Field',
  ),
  /* List filter label */
  'LIST_FILTER_LABEL' => array(
    'vi'    => 'Employee Field',
      'en'    => 'Employee Field',
  ),
);
$employeeFieldID = $iBlockProperty->Add($employeeField);
$dataFields['FIELD_ID'] = "'PROPERTY_".$employeeFieldID."'";  
$dataFields['NAME']   = "'".$employeeField['NAME']."'";
$data   = implode(',',$dataFields);
$sql  = "INSERT INTO `b_lists_field` (`IBLOCK_ID`,`FIELD_ID`,`SORT`,`NAME`,`SETTINGS`) VALUE ($data)";
$connection->queryExecute($sql);

?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>