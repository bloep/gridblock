<?php // Asstes im Backend einbinden (z.B. style.css) - es wird eine Versionsangabe angehängt, damit nach einem neuen Release des Addons die Datei nicht aus dem Browsercache verwendet wird
rex_view::addJsFile($this->getAssetsUrl('script.js?v=' . $this->getVersion()));
