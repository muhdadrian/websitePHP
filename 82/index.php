<?php
/*
cookie = Information about a user stored in a user's web-browser targeted advertisements, browsing preferences, and other non-sensitive data.

@ That's why you receive the targeted ads in a platform such as YouTube by remembering your browsing preferences.
*/

setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
//key: fav_food, value: pizza, 3rd argument: time() function of expiry date, 86400 seconds for a day, 2 means it will be expired in 2 days.
// "/" --> the file path, forward slashed used as the default file path

//right click, then clicked the inspect, go to Application and find Cookies at the left side bar
setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/");

?>