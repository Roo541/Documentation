<p>Brokerage data providers support most alternative datasets, except data that streams real-time intraday data. Streaming datasets, like the <a href='/datasets/tiingo-news-feed'>Tiingo News Feed</a> and <a href='/datasets/benzinga-news-feed'>Benzinga News Feed</a>, require the QuantConnect data provider. <?=$hybridSupported ? "The hybrid QuantConnect-{$brokerageName} data provider supports streaming datasets." : "" ?></p>
