<div id="searchMap" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"
     class="searchMap">
    <div class="searchMap__top">
        <div class="searchMap__search"><input placeholder="поиск ближайшей клиники, введите адрес"
                                              class="searchMap__input"> <span class="searchMap__inputSend"></span>
            <div class="searchMap__inputSend button__search_map">Найти</div>
        </div>
        <div class="searchMap__routesMobile width width_norm width_paddingStandart"><span>Построить маршрут на автомобиле</span>
            <span>Общественном транспорте</span> <span>Пешком</span></div>
    </div>
    <div class="searchMap__mapWrap width width_norm"><span class="searchMap__podR"></span> <span
                class="searchMap__podL"></span>
        <div class="searchMap__infoMap">
            <div class="searchMap__info">
                <div class="searchMap__name">
                    Колл-центр
                </div>
                <div class="searchMap__rezim_raboty"><label>Режим работы:</label> <span>Пн.-Вс. 09.00-21.00</span></div>
                <div class="searchMap__phones"><label>Звоните:</label> <span class="call_phone_clinic"><a
                                href="tel:+78125614089" style="color: rgb(216, 32, 67); text-decoration: none;">+7 (812) 561-40-89</a></span>
                </div> <!---->
                <div class="searchMap__active"><a href="/make-an-appointment" class="makeImg__button button_red">Записаться</a>
                </div>
                <div class="searchMap__callback"><a href="/form/callback" data-dialog-options="{
                           &quot;width&quot;:&quot;450px&quot;,
                           &quot;minHeight&quot;:&quot;500px&quot;,
                           &quot;dialogClass&quot;:&quot;popupDialog&quot;
                           }" data-dialog-type="modal" class="use-ajax">Заказать обратный звонок</a></div>
            </div>
            <div class="searchMap__map">
                <div id="searchMap__mapYandex" class="searchMap__mapYandex" style="width: 100%; height: 450px;">
                    <?$APPLICATION->IncludeComponent("bitrix:map.yandex.view","clinics",Array(
                            "INIT_MAP_TYPE" => "MAP",
                            "MAP_DATA" => "",
                            "MAP_WIDTH" => "768",
                            "MAP_HEIGHT" => "450",
                            "CONTROLS" => array(
                                "TOOLBAR",
                                "ZOOM",
                                "SMALLZOOM",
                                "MINIMAP",
                                "TYPECONTROL",
                                "SCALELINE"
                            ),
                            "OPTIONS" => array(
                                "ENABLE_SCROLL_ZOOM",
                                "ENABLE_DRAGGING"
                            ),
                            "MAP_ID" => "yam_1"
                        )
                    );?>

                </div>
            </div>
        </div>
    </div>
    <div class="searchMap__routes width width_norm width_paddingStandart"><span>Построить маршрут на автомобиле</span>
        <span>Общественном транспорте</span> <span>Пешком</span></div>
</div>