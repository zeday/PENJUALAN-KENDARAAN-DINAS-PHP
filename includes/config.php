<?php

/**
 * @author Zeday
 * @copyright 2014
 */
/*
 * Define PostgreSQL database server connect parameters.
 */
define('PGHOST','localhost');
define('PGPORT',5432);
define('PGDATABASE','penjualan');
define('PGUSER', 'zeday');
define('PGPASSWORD', 'secret');
define('PGCLIENTENCODING','UNICODE');
define('ERROR_ON_CONNECT_FAILED','Sorry, can not connect the database server now!');
session_start();
pg_pconnect('host=' . PGHOST . ' port=' . PGPORT . ' dbname=' . PGDATABASE . ' user=' . PGUSER . ' password=' . PGPASSWORD);

?>