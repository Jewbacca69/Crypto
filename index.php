<?php

require_once 'vendor/autoload.php';

use Crypto\CryptoApi;

$api = new CryptoApi();

$input = readline("Enter the crypto currency : (ETH or LTC): ");

if ($input === 'ETH') {
    $input = 'ETHBTC';
} elseif ($input === 'LTC') {
    $input = 'LTCBTC';
} else {
    echo "Invalid input. Please enter either 'ETH' or 'LTC'.\n";
    exit();
}

$cryptoCollection = $api->fetchCryptoPairInfo($input);
echo "===========================\n";
echo "Symbol: " . $cryptoCollection->getSymbol() . "\n";
echo "Last Price: " . $cryptoCollection->getLastPrice() . "\n";
echo "Price Change: " . $cryptoCollection->getPriceChange() . "\n";
echo "Price Change Percent: " . $cryptoCollection->getPriceChangePercent() . "\n";
echo "High Price: " . $cryptoCollection->getHighPrice() . "\n";
echo "Low Price: " . $cryptoCollection->getLowPrice() . "\n";
echo "Volume: " . $cryptoCollection->getVolume() . "\n";
echo "===========================\n";