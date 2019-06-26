<?
$ID_Block_Delete = 346;
if($USER->IsAdmin())
{
    $DB->StartTransaction();
    if(!CIBlock::Delete($ID_Block_Delete))
    {
        $strWarning.=GetMessage("IBLOCK_DELETE_ERROR");
        $Db->rollback();
    }
    else{
      $DB->Commit();
      echo 'Delele Success Iblock ID '.$ID_Block_Delete;
    }
}
?>