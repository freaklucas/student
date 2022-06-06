<?php

require "models/DashboardModel.php";

$xsltUriDashboard = 'view/dashboard.xslt';

$dashboardData = new DashboardModel();
$dashboard = $dashboardData->getFirstDashboard();

$xmlDocument = new DOMDocument;
$xslDocument = new DOMDocument;




if ($xmlDocument->loadXML($dashboard->xml) && $xslDocument->load($xsltUriDashboard)) {

    $xsltProc = new XSLTProcessor();
    // $xsltProc->importStyleSheet($xslDocument);
    if ($xsltProc->importStyleSheet($xslDocument)) {
        echo trim($xsltProc->transformToXML($xmlDocument));

        // echo $xsltProc->transformToXML($xmlDocument);
    }
}

?>