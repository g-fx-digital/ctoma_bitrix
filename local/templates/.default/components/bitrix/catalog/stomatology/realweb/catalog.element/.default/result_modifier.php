<?

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
$arResult['TEXT_PAGE'] = false;
$arResult['REDIRECT'] = "";


if ($arResult['PROPERTIES']['GALLERY']['VALUE']) {
    if (Bitrix\Main\Loader::includeModule("iblock")) {
        $rsResult = \Bitrix\Iblock\ElementTable::getList(array(
            'select' => array('ID', 'NAME', 'PREVIEW_PICTURE', 'IBLOCK_SECTION_ID'),
            'filter' => array('IBLOCK_ID' => IBLOCK_CONTENT_GALLERY, 'IBLOCK_SECTION_ID' => $arResult['PROPERTIES']['GALLERY']['VALUE']),
            'order' => array('SORT' => 'ASC')
        ));
        while ($row = $rsResult->fetch()) {
            $arResult['GALLERY'][$row['IBLOCK_SECTION_ID']][$row['ID']] = $row;
        }
    }
}

$this->__component->SetResultCacheKeys(array('REDIRECT'));
