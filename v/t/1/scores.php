<?php define('DB_NAME', 'playbclick_com');define('DB_USER', 'playbclick_com');define('DB_PASSWORD', 'Gaft0p');define('DB_HOST', 'playbclick.com.mysql');$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);if (!$link) { die('Could not connect: ' . mysql_error()); }$db_selected = mysql_select_db(DB_NAME, $link);if (!$db_selected) { die('Can\'t use ' . DB_NAME . ': ' . mysql_error()); }echo '<head><meta name="format-detection" content="telephone=no" /><link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"><meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"><style>html, body {font-family: "Open Sans", sans-serif;height: 100%; margin: 0px}table, tr, body, html { width: 93%); table-layout: fixed} tr, table {width:100% !important;}td:first-child,th:first-child{width:15%}td:nth-child(2),th:nth-child(2){width:50%}td:nth-child(3), th:nth-child(3){width:35%}td, th { border: 1px black solid;font-size:10px !important;} tr { text-align: center; vertical-align: middle; font-size: 100%;word-wrap:break-word;}  #one {background-color: #FFFF00;} #two {background-color:#CCC} #three {background-color:#BF360C}::-webkit-scrollbar { width: 8px; }::-webkit-scrollbar-track {-webkit-box-shadow: inset 0 0 6px rgba(100,100,100,0.3);-webkit-border-radius: 10px;border-radius: 10px}::-webkit-scrollbar-thumb {-webkit-border-radius: 10px;border-radius: 10px;background: rgba(100,100,100,0.8);-webkit-box-shadow: inset 0 0 6px rgba(100,100,100,0.5)}::-webkit-scrollbar-thumb:window-inactive { background: rgba(50,50,50,0.4); }</style></head><body><table border="0">';function setInterval($f, $milliseconds){$seconds=(int)$milliseconds/1000;while(true){$f();sleep($seconds);}}setInterval(function(){$sql=mysql_query("SELECT ID, Username, Score FROM t1L ORDER BY Score DESC, ID DESC"); $rank=0; while ($data = mysql_fetch_assoc($sql)) { if ($data) { $rank += 1; if ($rank < "2") {  echo "<tr><th>Rank</th><th>Name</th><th>Score</th></tr><tr id='one'><td>1</td><td>" . $data["Username"] . "</td><td>" . $data["Score"] . "</td></tr>"; } elseif ($rank < "3") { echo "<tr id='two'><td>2</td><td>" . $data["Username"] . "</td><td>" . $data["Score"] . "</td></tr>"; } elseif ($rank < "4") { echo "<tr id='three'><td>3</td><td>" . $data["Username"] . "</td><td>" . $data["Score"] . "</td></tr>";} else { echo "<tr><td>" . $rank . "</td><td>" . $data["Username"] . "</td><td>" . $data["Score"] . "</td></tr></table></body>"; } }};}, 5000);$link->close(); ?>