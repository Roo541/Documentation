<!-- Code generated by market-hour-code-generator.py -->
<p>LEAN will use late open days of the underlying asset as the late open days of the Option if not specified.</p>

<?php 
$content = file_get_contents(DOCS_RESOURCES."/datasets/market-hours/equity/usa/generic/late-opens.html");
echo str_replace("market:", "Option market:", $content)
?>