<?php
namespace DieEwigen\Api\Model;

use JsonSerializable;

class Player implements JsonSerializable {
    private int $id;
    private int $sector;
    private int $system;
    private string $name;
    private int $points;
    private int $fleetPoints;
    private Resources $resources;
    private int $collectors;
    private int $allyId;
    private int $race;

    public function __construct(int $id, int $sector, int $system, string $name, int $points, int $fleetPoints,
                                Resources $resources, int $collectors, int $allyId, int $race)
    {
        $this->id = $id;
        $this->sector = $sector;
        $this->system = $system;
        $this->name = $name;
        $this->points = $points;
        $this->fleetPoints = $fleetPoints;
        $this->resources = $resources;
        $this->collectors = $collectors;
        $this->allyId = $allyId;
        $this->race = $race;
    }

    public function jsonSerialize(): array
    {
        return [ 'id' => $this->id, 'sector' => $this->sector, 'system' => $this->system, 'name' => $this->name,
            'points' => $this->points, 'fpoints' => $this->fleetPoints, 'res' => $this->resources, 'cols' => $this->collectors,
            'allyId' => $this->allyId];
    }
}

class Resources implements JsonSerializable {
    private int $m;
    private int $d;
    private int $i;
    private int $e;
    private int $t;

    public function __construct(int $m, int $d, int $i, int $e, int $t)
    {
        $this->m = $m;
        $this->d = $d;
        $this->i = $i;
        $this->e = $e;
        $this->t = $t;
    }
    public function jsonSerialize(): array
    {
        return [ 'm' => $this->m, 'd' => $this->d, 'i' => $this->i, 'e' => $this->e,
            't' => $this->t];
    }
}