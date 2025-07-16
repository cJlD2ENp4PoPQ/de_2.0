<?php

namespace DieEwigen\Api\Types;

use JsonSerializable;

class SystemFleetStatus implements JsonSerializable {
    private int $sourcePlayerId;
    private int $sourcePlayerSector;
    private int $sourcePlayerSystem;
    private int $eta;
    private int $amount;
    private int $fp;

    public function __construct(int $sourcePlayerId, int $sourcePlayerSector, int $sourcePlayerSystem, int $eta,
                                int $amount, int $fp)
    {
        $this->sourcePlayerId = $sourcePlayerId;
        $this->sourcePlayerSector = $sourcePlayerSector;
        $this->sourcePlayerSystem = $sourcePlayerSystem;
        $this->eta = $eta;
        $this->amount = $amount;
        $this->fp = $fp;
    }

    public function getSourcePlayerId(): int
    {
        return $this->sourcePlayerId;
    }

    public function getSourcePlayerSector(): int
    {
        return $this->sourcePlayerSector;
    }

    public function getSourcePlayerSystem(): int
    {
        return $this->sourcePlayerSystem;
    }

    public function getEta(): int
    {
        return $this->eta;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getFp(): int
    {
        return $this->fp;
    }



    public function jsonSerialize(): array
    {
        return [ 'sPlayerId' => $this->sourcePlayerId, 'sPlayerSec' => $this->sourcePlayerSector,
            'sPlayerSys' => $this->sourcePlayerSystem, 'eta' => $this->eta, 'amount' => $this->amount,
            'fp' => $this->fp];
    }
}