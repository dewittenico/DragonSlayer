<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dragon Slayer</title>

        <script src="DragonSlayer.js"></script>

<script type="text/javascript">

var response = '{ \
"tiles": [ \
{ "id":0, "description":"You are in a green field with flowers.", "north_id":1, "east_id":8, "south_id":13, "west_id":29 }, \
{ "id":1, "description":"...........................", "north_id":null, "east_id":null, "south_id":0, "west_id":null }, \
{ "id":8, "description":"...........................", "north_id":null, "east_id":null, "south_id":null, "west_id":0 }, \
{ "id":13, "description":"...........................", "north_id":0, "east_id":null, "south_id":null, "west_id":null }, \
{ "id":29, "description":"...........................", "north_id":null, "east_id":0, "south_id":null, "west_id":null } \
] \
}';

// Current tile
var currentTileInfo = [
        0,     // current id
        "You are in a green field with flowers.",   // description
        1,     // north id
        8,     // east id
        13,    // south id
        29     // west id
    ];



// Create a new player
var player = new Player("0", "Dronkus The Great");

var start = new Tile(
        currentTileInfo[0],
        currentTileInfo[1],
        currentTileInfo[2],
        currentTileInfo[3],
        currentTileInfo[4],
        currentTileInfo[5]
    );

function createTilesFromJson(jsonstring)
{
    var tiles_from_json = JSON.parse(jsonstring);

    // var currentTile = new Tile(
    //         tiles[0].id,
    //         tiles[0].description,
    //         tiles[0].north_id,
    //         tiles[0].east_id,
    //         tiles[0].south_id,
    //         tiles[0].west_id
    //     );
}
createTilesFromJson(response);

/*
    Outputs a string to the gameoutput area.
    [INCOMPLETE]
*/
function toGameOutput(message)
{
    alert(message);
}


/*
    This event handler handles the input from the user and
    passes the action to the player
*/
function executeUserAction() 
{
    // Get the action string from the user and pass to player
    var useraction = document.getElementById("txtUserAction").value;
    toGameOutput(player.executeAction(useraction));
}




/*
    Registers all our event handlers once the page is fully loaded.
    If page is not fully loaded some elements may not exist yet.
*/
function registerEvents()
{
    document.getElementById("btnExecuteUserAction").addEventListener("click", executeUserAction, false);
}
window.addEventListener("load", registerEvents, false);

</script>
    </head>
    <body>

    <div>
        <script type="text/javascript">
            document.write(player);
        </script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </div>

    <div id="gameoutput" style="margin: 50px;">
        Here comes the game output
        <script type="text/javascript">
            //document.write("<div>" + start + "</div>");
        </script>
    </div>

    <div id="gameinput" style="margin: 50px;">
        <form>
            <input type="text" id="txtUserAction" placeholder="... Your action ...">
            <button type="button" id="btnExecuteUserAction">Execute action</button>
        </form> 
    </div>

    </body>
</html>
