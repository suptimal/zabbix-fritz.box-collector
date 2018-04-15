#!/bin/bash

	docker run -d --rm -h zabbix-fritz.box-collector --name zabbix-fritz.box-collector\
	-v $(pwd)/bin:/app -w /app \
	php-soap/php-soap:7.0 bash send_stats.sh
