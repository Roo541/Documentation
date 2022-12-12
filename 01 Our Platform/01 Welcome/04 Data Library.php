<?php
$dataMarketSize = file_get_contents(DOCS_RESOURCES."/kpis/dataset-size.php");

echo "
<p>We provide an enormous library of data for your backtesting, research, and live trading. The library includes data for Equities, Options, Futures, CFDs, Forex, Crypto, Indices, and alternative data. The library is roughly {$dataMarketSize} in size, contains trade data that spans decades into the past, and comes in tick to daily resolutions. View the <a href='/datasets'>Dataset Market</a> to see all of the datasets that we have available, including their respective start dates, end dates, and resolutions. The following image shows the integrated data providers:</p>
";

?>

<img class='img-responsive' src='https://cdn.quantconnect.com/i/tu/logo-wall-2.png' alt="A table of logos for the dataset providers">
