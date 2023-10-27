<?php

namespace Crypto;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class CryptoApi
{
    private HttpClientInterface $httpClient;

    public function __construct()
    {
        $this->httpClient = HttpClient::create();
    }

    public function fetchCryptoPairInfo(string $pair): CryptoCollection
    {
        $response = $this->httpClient->request('GET', 'https://api4.binance.com/api/v3/ticker/24hr?symbol=' . $pair);

        $data = $response->toArray();

        return new CryptoCollection(
            $data['symbol'],
            $data['lastPrice'],
            $data['priceChange'],
            $data['priceChangePercent'],
            $data['highPrice'],
            $data['lowPrice'],
            $data['volume']
        );
    }
}
