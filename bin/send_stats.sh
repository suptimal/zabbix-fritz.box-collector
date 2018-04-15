#!/bin/bash
ZABBIX_SERVER="192.168.178.25"
INTERVAL=60s

while true; do
	php get_status.php | zabbix_sender -v -z $ZABBIX_SERVER -i -
	sleep $INTERVAL &
	wait $! #erlaubt sofortiges beenden des containers
done

