<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global CMain $APPLICATION */
$APPLICATION->SetTitle("Структура");
?>

<? $APPLICATION->IncludeComponent(
	"uw:structure", 
	".default", 
	array(
		"IBLOCK_ID" => \UW\IBHelper::getIbId(\UW\IBCodes::IB_CODE_STRUCTURE),
		"COMPONENT_TEMPLATE" => ".default",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/about/structure/",
		"VACANCY_LINK" => "/about/rabota/",
		"SEF_URL_TEMPLATES" => array(
			"list" => "",
			"detail" => "#SECTION_CODE#/",
		)
	),
	false
); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>