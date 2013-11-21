<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dragon Slayer</title>

        <script src="DragonSlayer.js"></script>

<script type="text/javascript">

function makeAjaxRequest()
{
    var xmlhttp;
    if (window.XMLHttpRequest) {    // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {  // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            alert(xmlhttp.responseText);
            //document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
        }
    };

    xmlhttp.open("GET", "map.php?tile_id=15&level=1", true);
    xmlhttp.send();
}

function requestMapInformation(tile_id, level)
{
    // Currently hardcoded crapcode for testing
    console.log("AJAX request to server with {tile_id:" + tile_id + ", level:" + level + "}");

    if (tile_id == 0) {
        return '{ \
        "tiles": [ \
        { "id":0, "description":"You are in a green field with flowers.", "north_id":1, "east_id":8, "south_id":13, "west_id":29 }, \
        { "id":1, "description":"...........................", "north_id":null, "east_id":null, "south_id":0, "west_id":null }, \
        { "id":8, "description":"...........................", "north_id":null, "east_id":25, "south_id":null, "west_id":0 }, \
        { "id":13, "description":"...........................", "north_id":0, "east_id":null, "south_id":null, "west_id":null }, \
        { "id":29, "description":"...........................", "north_id":null, "east_id":0, "south_id":null, "west_id":null } \
        ], \
        "monsters": [ \
        { "id":101, "description":"A huge flaming dog of hell of at least 2 centimeters high.", "location_id": 8}, \
        { "id":508, "description":"A small yellow rat.", "location_id": 13} \
        ] \
        }';
    }

    if (tile_id == 8) {
        return '{ \
        "tiles": [ \
        { "id":8, "description":"...........................", "north_id":null, "east_id":25, "south_id":null, "west_id":0 }, \
        { "id":0, "description":"You are in a green field with flowers.", "north_id":1, "east_id":8, "south_id":13, "west_id":29 }, \
        { "id":25, "description":"..........................", "north_id":null, "east_id":null, "south_id":44, "west_id":8 } \
        ], \
        "monsters": [ \
        { "id":101, "description":"A huge flaming dog of hell of at least 2 centimeters high.", "location_id": 8} \
        ] \
        }';
    }

    if (tile_id == 1) {
        return '{ \
        "tiles": [ \
        { "id":1, "description":"...........................", "north_id":null, "east_id":null, "south_id":0, "west_id":null }, \
        { "id":0, "description":"You are in a green field with flowers.", "north_id":1, "east_id":8, "south_id":13, "west_id":29 } \
        ], \
        "monsters": [ \
        ] \
        }';
    }

    if (tile_id == 29) {
        return '{ \
        "tiles": [ \
        { "id":29, "description":"...........................", "north_id":null, "east_id":0, "south_id":null, "west_id":null }, \
        { "id":0, "description":"You are in a green field with flowers.", "north_id":1, "east_id":8, "south_id":13, "west_id":29 } \
        ], \
        "monsters": [ \
        ] \
        }';
    }
    if (tile_id == 13) {
        return '{ \
        "tiles": [ \
        { "id":13, "description":"...........................", "north_id":0, "east_id":null, "south_id":null, "west_id":null }, \
        { "id":0, "description":"You are in a green field with flowers.", "north_id":1, "east_id":8, "south_id":13, "west_id":29 } \
        ], \
        "monsters": [ \
        { "id":508, "description":"A small yellow rat.", "location_id": 13} \
        ] \
        }';
    }

    if (tile_id == 25) {
        return '{ \
        "tiles": [ \
        { "id":25, "description":"..........................", "north_id":null, "east_id":null, "south_id":44, "west_id":8 }, \
        { "id":8, "description":"...........................", "north_id":null, "east_id":25, "south_id":null, "west_id":0 }, \
        { "id":44, "description":"..........................", "north_id":25, "east_id":null, "south_id":85, "west_id":null } \
        ], \
        "monsters": [ \
        ] \
        }';
    }

    if (tile_id == 44) {
        return '{ \
        "tiles": [ \
        { "id":44, "description":"..........................", "north_id":25, "east_id":null, "south_id":85, "west_id":null }, \
        { "id":25, "description":"..........................", "north_id":null, "east_id":null, "south_id":44, "west_id":8 } \
        ], \
        "monsters": [ \
        ] \
        }';
    }

    if (tile_id == 85) {
        return '{ \
        "tiles": [ \
        { "id":85, "description":"..........................", "north_id":44, "east_id":null, "south_id":null, "west_id":null }, \
        { "id":44, "description":"..........................", "north_id":25, "east_id":null, "south_id":85, "west_id":null } \
        ], \
        "monsters": [ \
        { "id":603, "description":"OMG its JB himself.", "location_id": 85} \
        ] \
        }';
    }

    return "";
}

// Create a new player
var player = new Player("0", "Dronkus The Great");

var partialmap = requestMapInformation(0, 1);
player.currentPosition = extendPartialMapFromJson(null, partialmap, 1);

/*
    Outputs a string to the gameoutput area.
    [INCOMPLETE]
*/
function toGameOutput(message)
{
    // Create new element node
    var newNode = document.createElement("p");
    newNode.setAttribute("class", "boxedshadow");
    newNode.innerHTML = message;

    //Add element to dynamic content node
    var first = document.getElementById("gameoutput").firstChild;
    if (first) {
        document.getElementById("gameoutput").insertBefore(newNode, first);
    }
    else {
        document.getElementById("gameoutput").appendChild(newNode);
    }
}

/*
    This event handler handles the input from the user and
    passes the action to the player
*/
function userAction_handler(e) 
{
    // Get the action string from the user and pass to player
    if (e.keyCode === 13 && !e.ctrlKey) {
        var useraction = document.getElementById("txtUserAction").value.trim().toLowerCase();
        document.getElementById("txtUserAction").value = "";
        toGameOutput(player.executeAction(useraction));
    }
    makeAjaxRequest();
    return true;
}

/*
    Registers all our event handlers once the page is fully loaded.
    If page is not fully loaded some elements may not exist yet.
*/
function registerEvents()
{
    document.getElementById("txtUserAction").addEventListener("keyup", userAction_handler, false);
}
window.addEventListener("load", registerEvents, false);

</script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="content">

            <div id="playerinfo">
                <div id="playername">
                    <script type="text/javascript">
                        document.write(player.name);
                    </script>
                </div>
            </div>

            <div id="interaction">
                <div id="gameinput">
                    <textarea id="txtUserAction" placeholder="... Your action (press enter to execute) ..."></textarea>
                </div>

                <div id="gameoutput">
                </div>
            </div>
        </div>
    </body>
</html>
