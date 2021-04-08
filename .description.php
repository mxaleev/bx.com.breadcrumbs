<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc;

$arComponentDescription = array(
    "NAME" => Loc::getMessage("COMPONENT_NAME"),
    "DESCRIPTION" => Loc::getMessage("COMPONENT_DESCRIPTION"),
    "COMPLEX" => "N",
    "SORT" => 100,
    "PATH" => array(
        "ID" => Loc::getMessage("COMPONENT_PATH_ID"),
        "NAME" => Loc::getMessage("COMPONENT_PATH_NAME"),
        "CHILD" => array(
            "ID" => Loc::getMessage("COMPONENT_CHILD_PATH_ID"),
            "NAME" => Loc::getMessage("COMPONENT_CHILD_PATH_NAME"),
            "SORT" => 300,
        )
    )
);
