<?php
$cCode = "_symbol = AddCrypto(\"BTCUSD\", fillForward: false).Symbol;";
$pyCode = "self.symbol = self.AddCrypto(\"BTCUSD\", fillForward=False).Symbol";
include(DOCS_RESOURCES."/securities/fill-forward.php");
?>