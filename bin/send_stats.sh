#!/bin/bash

while true; do
	php get_status.php | zabbix_sender -vv -z 192.168.178.25 -i -
	sleep 60s &
	wait $! #erlaubt sofortiges beenden des containers
done

