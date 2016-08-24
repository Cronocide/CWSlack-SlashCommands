<?php

//SET THESE VARIABLES
//

$connectwise = "https://cw.domain.com"; //Set your Connectwise URL
$companyname = "MyCompany"; //Set your company name from Connectwise. This is the company name field from login.
$apipublickey = "Key"; //Public API key
$apiprivatekey = "Key"; //Private API key
$slacktoken = "Slack Token Here"; //Set token from the Slack slash command screen.
$timezone = "America/Chicago"; //Set your timezone here. 
$slackactivitiestoken = "Slack Token Here"; //Set your token for the activities slash command, if you're using cwslack-activities.php
$webhookurl = "https://hooks.slack.com/services/tokens"; //Change this if you intend to use cwslack-incoming.php
$postadded = 1; //Set this to post new tickets to slack.
$postupdated = 0; //Set this to post updated tickets to slack. Defaults to off to avoid spam
$allowzadmin = 0; //Set this to allow posts from zAdmin, warning as zAdmin does workflow rules so update spam is countered, however new client tickets are through zAdmin. To avoid insane spam, do not have this turned on while $postupdated is turned on. 
$badboard = "Alerts"; //Set to any board name you want to fail, to avoid ticket creation alerts for zAdmin.
$helpurl = "https://github.com/jundis/CWSlack-SlashCommands"; //Set your help article URL here.

//Don't modify below unless you know what you're doing!
//

//Timezone Setting to be used for all files.
date_default_timezone_set($timezone);

?>
