<div id="choosingClinic" xmlns:v-on="http://www.w3.org/1999/xhtml" class="choosingClinic">
                            <span class="choosingClinic__select"><div class="choosingClinic__info">
                                    <span class="choosingClinic__name"><?= $arResult['current']['NAME']; ?></span>
                                    <span class="choosingClinic__adress"><?= $arResult['current']['PROPERTIES']['ADDRESS']['VALUE']; ?></span></div>

                                <span class="choosingClinic__strl"></span></span>

    <span class="choosingClinic__list">



        <? foreach ($arResult['clinics'] as $clinic) { ?>

            <div class="choosingClinic__clinic" data-id="<?= $clinic['ID'] ?>"
                 data-url="/clinics/<?= $clinic['CODE'] ?>/">


            <a href="/clinics/<?= $clinic['CODE'] ?>/"><span
                        class="choosingClinic__listName"><?= $clinic['NAME'] ?></span>
                <span class="choosingClinic__minAdress"><?= $clinic['PROPERTIES']['ADDRESS']['VALUE'] ?></span>
                <span class="choosingClinic__phone call_phone_7_1"><?= $clinic['PROPERTIES']['PHONES']['VALUE'][0] ?></span></a></div>


        <? } ?>
    </span>

</div>