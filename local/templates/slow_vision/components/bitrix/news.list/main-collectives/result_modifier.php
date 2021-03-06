<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

foreach ($arResult['ITEMS'] as $key => $item) {
    // обрезаем размер изображения
    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['CROP_SRC'] = \UW\Tools::getResizeImage(
        $item['PREVIEW_PICTURE']['ID'],
        270,
        330
    );

    // обрезаем длину текста названия (max - 3 строки)
    $arResult['ITEMS'][$key]['NAME_CROP'] = TruncateText($item['NAME'], 160);
}