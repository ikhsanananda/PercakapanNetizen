<?php
$db=pg_connect('host=localhost dbname=rpl user=postgres password=Ikhsanananda92');
if(!$db)
{
    die("Gagal terhubung dengan database: ". pg_connect_error());
}
?>