<?php
include_once('../../lib/phpWeFact/WeFact.php');
include_once('../../lib/phpWeFact/Invoice.php');

$WeFact = new phpWeFact\API('API_KEY');

$invoice = new phpWeFact\Invoice();

$invoice->setInvoiceCode('[Concept]0001');

$result = $WeFact->deleteInvoice($invoice);

var_dump($result);
