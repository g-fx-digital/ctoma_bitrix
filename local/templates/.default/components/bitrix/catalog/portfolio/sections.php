<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);
?>
<div class="views-element-container contextual-region">

<?php
$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
        "START_FROM" => "0",
        "PATH" => "",
        "SITE_ID" => "s1"
    )
);
?>
<h1 class="faq__title title_grey width width_norm width_paddingStandart">
    <span class="title__br"></span>
    <span class="title__text">Примеры работ</span>
    <span class="title__br"></span>
</h1>
    <div class="uslugi__content width width width_norm width_paddingStandart">
        <div class="views-element-container">
            <div class="viewServices">
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:catalog.section",
                "",
                array(
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "COUNT_ELEMENTS" => "N",
                    "FILTER_NAME" => "sectionsFilter",
                    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                    "IBLOCK_TYPE" => "content",
                    "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
                    "SECTION_FIELDS" => array("", ""),
                    "SECTION_ID" => "",
                    "SECTION_URL" => "",
                    "SECTION_USER_FIELDS" => array("", ""),
                    "SHOW_PARENT_NAME" => "Y",
                    "TOP_DEPTH" => "2",
                    "VIEW_MODE" => "LINE"
                ),
                $component
            );
            ?>
            </div>
        </div>
</div>
</div>

