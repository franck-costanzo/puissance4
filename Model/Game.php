<?php

require_once 'Model/Model.php';

Class Game extends Model
{
    

    public static function createGame($gameName, $password, $gamer1)
    {
        $sql = "INSERT INTO games (game_name, password, gamer1) 
                        VALUES (?, ?, ?)";
        $params = array($gameName, $password, $gamer1);
        self::selectQuery($sql, $params);
    }

    public static function deleteGame($gameName, $password)
    {
        $sql = 'DELETE FROM games
                WHERE game_name LIKE ? AND password LIKE ?';

        $params = array($gameName, $password);
        self::selectQuery($sql, $params);
    }

}

    