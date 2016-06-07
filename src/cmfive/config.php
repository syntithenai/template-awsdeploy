<?php

// Override Main Module Company Parameters
Config::set('main.application_name', 'cmFive Docker App');
Config::set('main.company_name', '2PI Software D');
Config::set('main.company_url', 'http://2pisoftware.com');

//=============== Timezone ==================================

Config::set('system.timezone','Australia/Sydney');

//========== Database Configuration ==========================

Config::set("database", array(
    "hostname"  => "localhost",
    "username"  => "admin",
    "password"  => "admin",
    "database"  => "cmfive",
    "driver"    => "mysql"
));

//=========== Email Layer Configuration =====================

Config::set('email', array(
    "layer"	=> "smtp",		// smtp, sendmail
    "host"	=> "",
    "port"	=> 0,
    "auth"	=> false,
    "username"	=> "",
    "password"	=> ""
));

Config::set("system.checkCSRF", true);

//========= Anonymous Access ================================

// bypass authentication if sent from the following IP addresses
Config::set("system.allow_from_ip", '');

// or bypass authentication for the following modules
Config::set("system.allow_module", array(
     "rest", // uncomment this to switch on REST access to the database objects. Tread with CAUTION!
));

Config::set('system.allow_action', array(
    "auth/login",
    "auth/forgotpassword",
    "auth/resetpassword",
    //"admin/datamigration"
));
//========= REST Configuration ==============================
// check the following configuration carefully to secure
// access to the REST infrastructure.

// use the API_KEY to authenticate with username and password
Config::set('system.rest_api_key', "abcdefghijklmnopqrstuv");

// exclude any objects that you do NOT want available via REST
// note: only DbObjects which have the $_rest; property are 
// accessible via REST anyway!
Config::append('system.rest_allow',array(
    "User",
    "Contact",
    "WikiPage"
));
