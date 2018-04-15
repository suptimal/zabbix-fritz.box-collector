<?php
$fritzbox_ip = "fritz.box";
$hostname = "fritz.box";

$client = new SoapClient(
    null,
    array(
        'location'   => "http://".$fritzbox_ip.":49000/igdupnp/control/WANCommonIFC1",
        'uri'        => "urn:schemas-upnp-org:service:WANCommonInterfaceConfig:1",
        'noroot'     => True
    )
);
$addonInfos = $client->GetAddonInfos();  
$commonLinkProperties = $client->GetCommonLinkProperties();
print($hostname . " totalBytesSent " . $addonInfos["NewTotalBytesSent"] . "\n");
print($hostname . " totalBytesReceived " . $addonInfos["NewTotalBytesReceived"] . "\n");
print($hostname . " layer1UpstreamMaxBitRate " . $commonLinkProperties["NewLayer1UpstreamMaxBitRate"] . "\n");
print($hostname . " layer1DownstreamMaxBitRate " . $commonLinkProperties["NewLayer1DownstreamMaxBitRate"] . "\n");
print($hostname . " physicalLinkStatus " . $commonLinkProperties["NewPhysicalLinkStatus"] . "\n");

$client = new SoapClient(
    null,
    array(
        'location'   => "http://".$fritzbox_ip.":49000/igdupnp/control/WANIPConn1",
        'uri'        => "urn:schemas-upnp-org:service:WANIPConnection:1",
        'noroot'     => True
    )
);
$status = $client->GetStatusInfo();
$externalIPAddress = $client->GetExternalIPAddress();

print($hostname . " connectionStatus " . $status["NewConnectionStatus"] . "\n");
print($hostname . " uptime " . $status["NewUptime"] . "\n");
print($hostname . " externalIPAddress " . $externalIPAddress . "\n");
#print_r($commonLinkProperties);
?>
