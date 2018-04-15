# zabbix-fritz.box-collector
collects fritzbox metrics using a simple php-script with soap-client using Docker.

### SETUP

1. import templates/template_fritz.box.xml into zabbix

2. set ```ZABBIX_SERVER``` address in ```bin/send_stats.sh```

3. build and run container
```
cd container
docker build -t php-soap/php-soap:7.0 ./
cd ..
#run container
bash docker-run.sh
```

4. create host with hostname "fritz.box" and link template.
   * if u choose another hostname update ```$hostname``` in ```bin/get_status.php``` accordingly.
   * for extended information create an fritzbox user and set ```$fritz_user``` and ``` $fritz_password ``` in ```bin/get_status.php```.
