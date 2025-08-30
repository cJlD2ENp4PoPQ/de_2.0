<?php

namespace DieEwigen\Api\Types;

use JsonSerializable;

class ToplistEntry implements JsonSerializable {
    private int $id;
    private int $points;
    private int $fleetPoints;
    private int $ehPoints;
    private int $collectors;

    public function __construct(int $id, int $points, int $fleetPoints, int $collectors, int $ehPoints)
    {
        $this->id = $id;
        $this->points = $points;
        $this->fleetPoints = $fleetPoints;
        $this->collectors = $collectors;
        $this->ehPoints = $ehPoints;
    }

    public function jsonSerialize(): array
    {
        return [ 'id' => $this->id, 'points' => $this->points, 'fpoints' => $this->fleetPoints,
            'cols' => $this->collectors, 'ehpoints' => $this->ehPoints];
    }
}