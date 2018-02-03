<?php

/*
 * @addtogroup dynamicvisucontrol
 * @{
 *
 * @package       DynamicVisuControl
 * @file          module.php
 * @author        Michael Tröger <micha@nall-chan.net>
 * @copyright     2016 Michael Tröger
 * @license       https://creativecommons.org/licenses/by-nc-sa/4.0/ CC BY-NC-SA 4.0
 * @version       2.0
 *
 */

require_once(__DIR__ . "/../libs/HideOrDisableBaseControl.php");  // HideDeaktivLinkBaseControl Klasse

/**
 * DisableControl ist die Klasse für das IPS-Modul 'Disable Control'.
 * Erweitert HideOrDisableBaseControl
 *
 * @package       DynamicVisuControl
 * @author        Michael Tröger <micha@nall-chan.net>
 * @copyright     2016 Michael Tröger
 * @license       https://creativecommons.org/licenses/by-nc-sa/4.0/ CC BY-NC-SA 4.0
 * @version       2.0
 * @example <b>Ohne</b>
 */
class DisableControl extends HideOrDisableBaseControl
{

    /**
     * Steuert das Deaktivieren
     *
     * @access protected
     * @param int $ObjectID Das Objekt welches manipuliert werden soll.
     * @param bool $Value True wenn $ObjectID Deaktiviert werden soll, false aktivieren.
     */
    protected function SetHiddenOrDisabled(int $ObjectID, bool $Value)
    {
        if (IPS_GetObject($ObjectID)["ObjectIsDisabled"] <> $Value) {
            IPS_SetDisabled($ObjectID, $Value);
        }
    }
}

/** @} */
