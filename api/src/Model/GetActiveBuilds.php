<?php

namespace DieEwigen\Api\Model;

use DieEwigen\Api\Types\PlayerBuild;

class GetActiveBuilds
{
    const string GET_BUILDS_SQL = "SELECT tech_id, anzahl, verbzeit, score FROM de_user_build where user_id = ?";

    /**
     * Retrieves sector status from the database.
     *
     * @return array the sector status array of given user, one item represent the status of one system.
     */
    public function getBuilds(int $userId) : array
    {
        $stmt = mysqli_prepare($GLOBALS['dbi'], self::GET_BUILDS_SQL);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_all(MYSQLI_BOTH);
        return $this->createPlayerBuilds($result);
    }

    private function createPlayerBuilds(array $rows): array
    {
        $result = array();
        foreach ($rows as $row) {
            $result[] = new PlayerBuild($row['tech_id'], $row['anzahl'], $row['verbzeit'], $row['score']);
        }
        return $result;
    }
}
