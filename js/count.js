// load it at start
$('#playercount').load('playercount.php');
 
//set it to load every x ms
var auto_refresh = setInterval(
    function () {
        $('#playercount').load('playercount.php'); // here is the file to load
    },
    5000); //here is update interval in ms
