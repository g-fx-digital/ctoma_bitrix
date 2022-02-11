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


<div class="swiper-container">
    <div class="swiper-wrapper">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <div class="swiper-slide">
            <div class="slide__1" style="cursor:pointer;background-image: url('<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>')" onclick="window.location.href='<?if($arItem["PROPERTIES"]["url"]["VALUE"]):?><?=$arItem["PROPERTIES"]["url"]["VALUE"]?><?endif;?>'">
                <div class="slide__wrap">
                    <div class="slide__wrapList">
                        <span class="slide__text" style="font-size: 50px;">
                            <? if ($arItem['PROPERTIES']['SHOW_TEXT']['VALUE_XML_ID'] != 'NO') : ?>
                                <? echo $arItem["NAME"] ?>
                            <? endif; ?>
                        </span>
                        <span class="osnovnoi_tekst_slaida" style="font-size: 25px;"></span>
                    </div>
                    <div class="slide__link">
                        <a href='<?if($arItem["PROPERTIES"]["url"]["VALUE"]):?><?=$arItem["PROPERTIES"]["url"]["VALUE"]?><?endif;?>'>Узнать подробности</a>
                    </div>
                </div>
            </div>
        </div>
        <? endforeach; ?>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
