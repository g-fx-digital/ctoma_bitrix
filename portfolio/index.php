<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("title", "Работы специалистов клиник СТОМА");
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", "В данном разделе представлены результаты работы наших специалистов.");
?><?/*$APPLICATION->IncludeComponent(
    "bitrix:catalog",
    "clinics",
    Array(
        "ACTION_VARIABLE" => "action",
        "ADD_ELEMENT_CHAIN" => "Y",
        "ADD_PICT_PROP" => "-",
        "ADD_PROPERTIES_TO_BASKET" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BASKET_URL" => "",
        "BIG_DATA_RCM_TYPE" => "bestsell",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "COMMON_ADD_TO_BASKET_ACTION" => "",
        "COMMON_SHOW_CLOSE_POPUP" => "N",
        "COMPATIBLE_MODE" => "Y",
        "CONVERT_CURRENCY" => "N",
        "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
        "DETAIL_ADD_TO_BASKET_ACTION" => array(0=>"BUY",),
        "DETAIL_BACKGROUND_IMAGE" => "-",
        "DETAIL_BRAND_USE" => "N",
        "DETAIL_BROWSER_TITLE" => "-",
        "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
        "DETAIL_DETAIL_PICTURE_MODE" => array(),
        "DETAIL_DISPLAY_NAME" => "Y",
        "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
        "DETAIL_IMAGE_RESOLUTION" => "16by9",
        "DETAIL_META_DESCRIPTION" => "-",
        "DETAIL_META_KEYWORDS" => "-",
        "DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
        "DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
        "DETAIL_PROPERTY_CODE" => array(0=>"NOTE",),
        "DETAIL_SET_CANONICAL_URL" => "N",
        "DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
        "DETAIL_SHOW_MAX_QUANTITY" => "N",
        "DETAIL_SHOW_POPULAR" => "Y",
        "DETAIL_SHOW_SLIDER" => "N",
        "DETAIL_SHOW_VIEWED" => "Y",
        "DETAIL_STRICT_SECTION_CHECK" => "N",
        "DETAIL_USE_COMMENTS" => "N",
        "DETAIL_USE_VOTE_RATING" => "N",
        "DISABLE_INIT_JS_IN_COMPONENT" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_SORT_FIELD" => "sort",
        "ELEMENT_SORT_FIELD2" => "id",
        "ELEMENT_SORT_ORDER" => "asc",
        "ELEMENT_SORT_ORDER2" => "desc",
        "FILTER_HIDE_ON_MOBILE" => "N",
        "FILTER_VIEW_MODE" => "VERTICAL",
        "GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
        "GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
        "GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "3",
        "GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
        "GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
        "GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
        "GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "3",
        "GIFTS_MESS_BTN_BUY" => "Выбрать",
        "GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
        "GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
        "GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "3",
        "GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
        "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
        "GIFTS_SHOW_IMAGE" => "Y",
        "GIFTS_SHOW_NAME" => "Y",
        "GIFTS_SHOW_OLD_PRICE" => "Y",
        "HIDE_NOT_AVAILABLE" => "N",
        "IBLOCK_ID" => \Realweb\Site\Site::getIblockId('portfolio'),
        "IBLOCK_TYPE" => "content",
        "INCLUDE_SUBSECTIONS" => "Y",
        "INSTANT_RELOAD" => "N",
        "LABEL_PROP" => "-",
        "LAZY_LOAD" => "N",
        "LINE_ELEMENT_COUNT" => "",
        "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
        "LINK_IBLOCK_ID" => "",
        "LINK_IBLOCK_TYPE" => "",
        "LINK_PROPERTY_SID" => "",
        "LIST_BROWSER_TITLE" => "-",
        "LIST_META_DESCRIPTION" => "-",
        "LIST_META_KEYWORDS" => "-",
        "LIST_PROPERTY_CODE" => array(0=>"PAGE_TYPE",1=>"",2=>"",),
        "LOAD_ON_SCROLL" => "N",
        "MESSAGE_404" => "",
        "MESS_BTN_ADD_TO_BASKET" => "",
        "MESS_BTN_BUY" => "",
        "MESS_BTN_COMPARE" => "",
        "MESS_BTN_DETAIL" => "",
        "MESS_BTN_LAZY_LOAD" => "Показать ещё",
        "MESS_BTN_SUBSCRIBE" => "Подписаться",
        "MESS_NOT_AVAILABLE" => "",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Товары",
        "PAGE_ELEMENT_COUNT" => "99999",
        "PARTIAL_PRODUCT_PROPERTIES" => "N",
        "PRICE_CODE" => array(),
        "PRICE_VAT_INCLUDE" => "N",
        "PRICE_VAT_SHOW_VALUE" => "N",
        "PRODUCT_ID_VARIABLE" => "id",
        "PRODUCT_PROPERTIES" => array(),
        "PRODUCT_PROPS_VARIABLE" => "",
        "PRODUCT_QUANTITY_VARIABLE" => "",
        "SEARCH_CHECK_DATES" => "Y",
        "SEARCH_NO_WORD_LOGIC" => "Y",
        "SEARCH_PAGE_RESULT_COUNT" => "50",
        "SEARCH_RESTART" => "N",
        "SEARCH_USE_LANGUAGE_GUESS" => "Y",
        "SEARCH_USE_SEARCH_RESULT_ORDER" => "N",
        "SECTIONS_SHOW_PARENT_NAME" => "Y",
        "SECTIONS_VIEW_MODE" => "LIST",
        "SECTION_ADD_TO_BASKET_ACTION" => "ADD",
        "SECTION_BACKGROUND_IMAGE" => "-",
        "SECTION_COUNT_ELEMENTS" => "N",
        "SECTION_ID_VARIABLE" => "",
        "SECTION_TOP_DEPTH" => "2",
        "SEF_FOLDER" => "/portfolio/",
        "SEF_MODE" => "Y",
        "SEF_URL_TEMPLATES" => Array("compare"=>"","element"=>"#SECTION_CODE_PATH#/#ELEMENT_CODE#/","section"=>"#SECTION_CODE_PATH#/","sections"=>"/portfolio/","smart_filter"=>""),
        "SET_LAST_MODIFIED" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SHOW_DEACTIVATED" => "N",
        "SHOW_DISCOUNT_PERCENT" => "N",
        "SHOW_OLD_PRICE" => "N",
        "SHOW_PRICE_COUNT" => "1",
        "SHOW_SKU_DESCRIPTION" => "N",
        "SHOW_TOP_ELEMENTS" => "Y",
        "SIDEBAR_DETAIL_SHOW" => "N",
        "SIDEBAR_PATH" => "",
        "SIDEBAR_SECTION_SHOW" => "Y",
        "TEMPLATE_THEME" => "blue",
        "TOP_ADD_TO_BASKET_ACTION" => "ADD",
        "TOP_ELEMENT_COUNT" => "9",
        "TOP_ELEMENT_SORT_FIELD" => "sort",
        "TOP_ELEMENT_SORT_FIELD2" => "id",
        "TOP_ELEMENT_SORT_ORDER" => "asc",
        "TOP_ELEMENT_SORT_ORDER2" => "desc",
        "TOP_ENLARGE_PRODUCT" => "STRICT",
        "TOP_LINE_ELEMENT_COUNT" => "3",
        "TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
        "TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
        "TOP_PROPERTY_CODE" => array(0=>"",1=>"",),
        "TOP_PROPERTY_CODE_MOBILE" => array(),
        "TOP_SHOW_SLIDER" => "Y",
        "TOP_SLIDER_INTERVAL" => "3000",
        "TOP_SLIDER_PROGRESS" => "N",
        "TOP_VIEW_MODE" => "SECTION",
        "USER_CONSENT" => "N",
        "USER_CONSENT_ID" => "0",
        "USER_CONSENT_IS_CHECKED" => "Y",
        "USER_CONSENT_IS_LOADED" => "N",
        "USE_ALSO_BUY" => "N",
        "USE_BIG_DATA" => "Y",
        "USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
        "USE_COMPARE" => "N",
        "USE_ELEMENT_COUNTER" => "Y",
        "USE_ENHANCED_ECOMMERCE" => "N",
        "USE_FILTER" => "N",
        "USE_GIFTS_DETAIL" => "Y",
        "USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
        "USE_GIFTS_SECTION" => "Y",
        "USE_MAIN_ELEMENT_SECTION" => "N",
        "USE_PRICE_COUNT" => "N",
        "USE_PRODUCT_QUANTITY" => "N",
        "USE_SALE_BESTSELLERS" => "Y",
        "USE_STORE" => "N"
    ),
    false,
    Array(
        'HIDE_ICONS' => 'Y'
    )
);*/?><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>