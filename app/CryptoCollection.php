<?php

namespace Crypto;

class CryptoCollection
{
    private string $symbol;
    private string $lastPrice;
    private string $priceChange;
    private string $priceChangePercent;
    private string $highPrice;
    private string $lowPrice;
    private string $volume;

    public function __construct(
        string $symbol,
        string $lastPrice,
        string $priceChange,
        string $priceChangePercent,
        string $highPrice,
        string $lowPrice,
        string $volume
    ) {
        $this->symbol = $symbol;
        $this->lastPrice = $lastPrice;
        $this->priceChange = $priceChange;
        $this->priceChangePercent = $priceChangePercent;
        $this->highPrice = $highPrice;
        $this->lowPrice = $lowPrice;
        $this->volume = $volume;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function getLastPrice(): string
    {
        return $this->lastPrice;
    }

    public function getPriceChange(): string
    {
        return $this->priceChange;
    }

    public function getPriceChangePercent(): string
    {
        return $this->priceChangePercent;
    }

    public function getHighPrice(): string
    {
        return $this->highPrice;
    }

    public function getLowPrice(): string
    {
        return $this->lowPrice;
    }

    public function getVolume(): string
    {
        return $this->volume;
    }
}
