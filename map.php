<?php

function getPartialMapInfo($tile_id, $level)
{
    $response = array(
        'tiles' => array(
            array(
                'id' => 0,
                'description' => 'You are in a green field with flowers.',
                'north_id' => 1, 'east_id' => 8, 'south_id' => 13, 'west_id' => 29
            ),
            array(
                'id' => 1,
                'description' => 'You have entered the black forest of Dankeo.',
                'north_id' => null, 'east_id' => null, 'south_id' => 0, 'west_id' => null
            ),
            array(
                'id' => 8,
                'description' => 'A beatiful hill with view on the beach.',
                'north_id' => null, 'east_id' => 25, 'south_id' => null, 'west_id' => 0
            ),
            array(
                'id' => 13,
                'description' => 'You are standing on the brink of an abyss. Nothing to see as deep as the eye can see.',
                'north_id' => 0, 'east_id' => null, 'south_id' => null, 'west_id' => null
            ),
            array(
                'id' => 29,
                'description' => 'You face a wall of rock no man can climb.',
                'north_id' => null, 'east_id' => 0, 'south_id' => null, 'west_id' => null
            )
        ),
        'monsters' => array(
            array(
                'id' => 101,
                'description' => 'A huge flaming dog of hell of at least 2 centimeters high.',
                'location_id' => 8
            ),
            array(
                'id' => 508,
                'description' => 'A small yellow rat who may or may not have a severe case of the rabies.',
                'location_id' => 13
            )
        )
    );

    if ($tile_id == 8) {
        return '{
        "tiles": [
        { "id":8, "description":"...........................", "north_id":null, "east_id":25, "south_id":null, "west_id":0 },
        { "id":0, "description":"You are in a green field with flowers.", "north_id":1, "east_id":8, "south_id":13, "west_id":29 },
        { "id":25, "description":"..........................", "north_id":null, "east_id":null, "south_id":44, "west_id":8 }
        ],
        "monsters": [
        { "id":101, "description":"A huge flaming dog of hell of at least 2 centimeters high.", "location_id": 8}
        ]
        }';
    }

    if ($tile_id == 1) {
        return '{
        "tiles": [
        { "id":1, "description":"...........................", "north_id":null, "east_id":null, "south_id":0, "west_id":null },
        { "id":0, "description":"You are in a green field with flowers.", "north_id":1, "east_id":8, "south_id":13, "west_id":29 }
        ],
        "monsters": [
        ]
        }';
    }

    if ($tile_id == 29) {
        return '{
        "tiles": [
        { "id":29, "description":"...........................", "north_id":null, "east_id":0, "south_id":null, "west_id":null },
        { "id":0, "description":"You are in a green field with flowers.", "north_id":1, "east_id":8, "south_id":13, "west_id":29 }
        ],
        "monsters": [
        ]
        }';
    }
    if ($tile_id == 13) {
        return '{
        "tiles": [
        { "id":13, "description":"...........................", "north_id":0, "east_id":null, "south_id":null, "west_id":null },
        { "id":0, "description":"You are in a green field with flowers.", "north_id":1, "east_id":8, "south_id":13, "west_id":29 }
        ],
        "monsters": [
        { "id":508, "description":"A small yellow rat.", "location_id": 13}
        ]
        }';
    }

    if ($tile_id == 25) {
        return '{
        "tiles": [
        { "id":25, "description":"..........................", "north_id":null, "east_id":null, "south_id":44, "west_id":8 },
        { "id":8, "description":"...........................", "north_id":null, "east_id":25, "south_id":null, "west_id":0 },
        { "id":44, "description":"..........................", "north_id":25, "east_id":null, "south_id":85, "west_id":null }
        ],
        "monsters": [
        ]
        }';
    }

    if ($tile_id == 44) {
        return '{
        "tiles": [
        { "id":44, "description":"..........................", "north_id":25, "east_id":null, "south_id":85, "west_id":null },
        { "id":25, "description":"..........................", "north_id":null, "east_id":null, "south_id":44, "west_id":8 }
        ],
        "monsters": [
        ]
        }';
    }

    if ($tile_id == 85) {
        return '{
        "tiles": [
        { "id":85, "description":"..........................", "north_id":44, "east_id":null, "south_id":null, "west_id":null },
        { "id":44, "description":"..........................", "north_id":25, "east_id":null, "south_id":85, "west_id":null }
        ],
        "monsters": [
        { "id":603, "description":"OMG its JB himself.", "location_id": 85}
        ]
        }';
    }
}

if (strtolower($_SERVER['REQUEST_METHOD']) == "get") {
    echo getPartialMapInfo(0, 1);
    //echo var_dump($_GET);
}