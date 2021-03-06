<?php
require_once('billpay.php');

/* Default Messages */
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_TITLE', 'BillPay - Lastschrift');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_DESCRIPTION', 'BillPay - Lastschrift');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_MESSAGE', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_MESSAGE);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_INFO', MODULE_PAYMENT_BILLPAY_TEXT_INFO);

define('MODULE_PAYMENT_BILLPAYDEBIT_ALLOWED_TITLE' , MODULE_PAYMENT_BILLPAY_ALLOWED_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_ALLOWED_DESC' , MODULE_PAYMENT_BILLPAY_ALLOWED_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_LOGGING_TITLE' , MODULE_PAYMENT_BILLPAY_LOGGING_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_LOGGING_DESC' , MODULE_PAYMENT_BILLPAY_LOGGING_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_MERCHANT_ID_TITLE' , MODULE_PAYMENT_BILLPAY_MERCHANT_ID_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_MERCHANT_ID_DESC' , MODULE_PAYMENT_BILLPAY_MERCHANT_ID_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_ORDER_STATUS_TITLE' , MODULE_PAYMENT_BILLPAY_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_ORDER_STATUS_DESC' , MODULE_PAYMENT_BILLPAY_ORDER_STATUS_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_PORTAL_ID_TITLE' , MODULE_PAYMENT_BILLPAY_PORTAL_ID_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_PORTAL_ID_DESC' , MODULE_PAYMENT_BILLPAY_PORTAL_ID_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_SECURE_TITLE' , MODULE_PAYMENT_BILLPAY_SECURE_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_SECURE_DESC' , MODULE_PAYMENT_BILLPAY_SECURE_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_SORT_ORDER_TITLE' , MODULE_PAYMENT_BILLPAY_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_SORT_ORDER_DESC' , MODULE_PAYMENT_BILLPAY_SORT_ORDER_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_STATUS_TITLE' , MODULE_PAYMENT_BILLPAY_STATUS_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_STATUS_DESC' , MODULE_PAYMENT_BILLPAY_STATUS_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_TESTMODE_TITLE' , MODULE_PAYMENT_BILLPAY_TESTMODE_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_TESTMODE_DESC' , MODULE_PAYMENT_BILLPAY_TESTMODE_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_ZONE_TITLE' , MODULE_PAYMENT_BILLPAY_ZONE_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_ZONE_DESC' , MODULE_PAYMENT_BILLPAY_ZONE_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_API_URL_BASE_TITLE' , MODULE_PAYMENT_BILLPAY_API_URL_BASE_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_API_URL_BASE_DESC' , MODULE_PAYMENT_BILLPAY_API_URL_BASE_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_TESTAPI_URL_BASE_TITLE' , MODULE_PAYMENT_BILLPAY_TESTAPI_URL_BASE_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_TESTAPI_URL_BASE_DESC' , MODULE_PAYMENT_BILLPAY_TESTAPI_URL_BASE_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_LOGGING_ENABLE_TITLE' , MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_LOGGING_ENABLE_DESC' , MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_MIN_AMOUNT_TITLE', MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_MIN_AMOUNT_DESC', MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_LOGPATH_TITLE', MODULE_PAYMENT_BILLPAY_LOGPATH_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_LOGPATH_DESC', MODULE_PAYMENT_BILLPAY_LOGPATH_DESC);

define('MODULE_PAYMENT_BILLPAY_HTTP_X_TITLE', MODULE_PAYMENT_BILLPAY_HTTP_X_TITLE);
define('MODULE_PAYMENT_BILLPAY_HTTP_X_DESC', MODULE_PAYMENT_BILLPAY_HTTP_X_DESC);

// Payment selection texts
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_BIRTHDATE', MODULE_PAYMENT_BILLPAY_TEXT_BIRTHDATE);


define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ENTER_BIRTHDATE', MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ENTER_GENDER', MODULE_PAYMENT_BILLPAY_TEXT_ENTER_GENDER);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ENTER_BIRTHDATE_AND_GENDER', MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE_AND_GENDER);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_NOTE', MODULE_PAYMENT_BILLPAY_TEXT_NOTE);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_REQ', MODULE_PAYMENT_BILLPAY_TEXT_REQ);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_GENDER', MODULE_PAYMENT_BILLPAY_TEXT_GENDER);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_MALE', MODULE_PAYMENT_BILLPAY_TEXT_MALE);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_FEMALE', MODULE_PAYMENT_BILLPAY_TEXT_FEMALE);

define('JS_BILLPAYDEBIT_EULA', JS_BILLPAY_EULA);
define('JS_BILLPAYDEBIT_DOBDAY', JS_BILLPAY_DOBDAY);
define('JS_BILLPAYDEBIT_DOBMONTH', JS_BILLPAY_DOBMONTH);
define('JS_BILLPAYDEBIT_DOBYEAR', JS_BILLPAY_DOBYEAR);
define('JS_BILLPAYDEBIT_GENDER', JS_BILLPAY_GENDER);
define('JS_BILLPAYDEBIT_CODE', JS_BILLPAY_CODE);
define('JS_BILLPAYDEBIT_NUMBER', JS_BILLPAY_NUMBER);
define('JS_BILLPAYDEBIT_NAME', JS_BILLPAY_NAME);

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_EULA', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_EULA);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_DEFAULT', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DEFAULT);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_DOB' , MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_SHORT', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_SHORT);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_INVOICE_CREATED_COMMENT', MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_CREATED_COMMENT);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_CANCEL_COMMENT', MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_COMMENT);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_DUEDATE', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DUEDATE);

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_NUMBER', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NUMBER);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_CODE', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_CODE);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_NAME', MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NAME);

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_CREATE_INVOICE', MODULE_PAYMENT_BILLPAY_TEXT_CREATE_INVOICE);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_CANCEL_ORDER', MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_ORDER);

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ACCOUNT_HOLDER', MODULE_PAYMENT_BILLPAY_TEXT_ACCOUNT_HOLDER);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_IBAN', MODULE_PAYMENT_BILLPAY_TEXT_IBAN);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_BANK_NAME', MODULE_PAYMENT_BILLPAY_TEXT_BANK_NAME);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_BIC', MODULE_PAYMENT_BILLPAY_TEXT_BIC);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_INVOICE_REFERENCE', MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_REFERENCE);

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_BANKDATA', MODULE_PAYMENT_BILLPAY_TEXT_BANKDATA);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_INVOICE_INFO1', 'Vielen Dank, dass Sie sich f&uuml;r die Zahlung per Lastschrift mit BillPay entschieden haben.');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_INVOICE_INFO2', 'Wir buchen den f&auml;lligen Betrag in den n&auml;chsten Tagen von dem bei der Bestellung angegebenen Konto ab.');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_INVOICE_INFO3', '');

define('MODULE_PAYMENT_BILLPAYDEBIT_DUEDATE_TITLE', MODULE_PAYMENT_BILLPAY_DUEDATE_TITLE);

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_PURPOSE', MODULE_PAYMENT_BILLPAY_TEXT_PURPOSE);

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ADD', MODULE_PAYMENT_BILLPAY_TEXT_ADD);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_FEE', MODULE_PAYMENT_BILLPAY_TEXT_FEE);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_FEE_INFO1', 'F&uuml;r diese Bestellung per Lastschrift wird eine Geb&uuml;hr von ');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_FEE_INFO2', ' erhoben');

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_SANDBOX', MODULE_PAYMENT_BILLPAY_TEXT_SANDBOX);
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_CHECK', MODULE_PAYMENT_BILLPAY_TEXT_CHECK);
define('MODULE_PAYMENT_BILLPAYDEBIT_UNLOCK_INFO', MODULE_PAYMENT_BILLPAY_UNLOCK_INFO);

define('MODULE_PAYMENT_BILLPAYDEBIT_UTF8_ENCODE_TITLE', MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_TITLE);
define('MODULE_PAYMENT_BILLPAYDEBIT_UTF8_ENCODE_DESC',  MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_DESC);

define('MODULE_PAYMENT_BILLPAYDEBIT_ACTIVATE_ORDER', MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER);
define('MODULE_PAYMENT_BILLPAYDEBIT_ACTIVATE_ORDER_WARNING', MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER_WARNING);

define('MODULE_PAYMENT_BILLPAYDEBIT_SALUTATION_MALE', MODULE_PAYMENT_BILLPAY_SALUTATION_MALE);
define('MODULE_PAYMENT_BILLPAYDEBIT_SALUTATION_FEMALE', MODULE_PAYMENT_BILLPAY_SALUTATION_FEMALE);

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_EULA_CHECK_SEPA',    "Mit der &Uuml;bermittlung der f&uuml;r die Abwicklung der Zahlung und einer Identit&auml;ts- und Bonit&auml;tspr&uuml;fung erforderlichen Daten an die <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH</a> bin ich einverstanden. Es gelten die <a href='%s' target='_blank'>Datenschutzbestimmungen</a> von BillPay.<br/><br/>Ich erteile BillPay ein SEPA-Lastschriftmandat (<a href='#' class='bpy-btn-details'>Einzelheiten</a>) zur Einziehung f&auml;lliger Zahlungen und weise mein Geldinstitut an, die Lastschriften einzul&ouml;sen.");
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_EULA_CHECK_SEPA_AT', "Mit der &Uuml;bermittlung der f&uuml;r die Abwicklung der Zahlung und einer Identit&auml;ts- und Bonit&auml;tspr&uuml;fung erforderlichen Daten an die <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH</a> bin ich einverstanden. Es gelten die <a href='%s' target='_blank'>Datenschutzbestimmungen</a> von BillPay.<br/><br/>Ich erteile BillPay und der <a href='https://www.privatbank1891.com/' target='_blank'>net-m privatbank 1891 AG</a> ein SEPA-Lastschriftmandat (<a href='#' class='bpy-btn-details'>Einzelheiten</a>) zur Einziehung f&auml;lliger Zahlungen und weise mein Geldinstitut an, die Lastschriften einzul&ouml;sen.");

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_SEPA_INFORMATION',    'Die Gl&auml;ubiger-Identifikationsnummer von BillPay ist DE19ZZZ00000237180. Die Mandatsreferenznummer wird mir zu einem sp&auml;teren Zeitpunkt per Email mitgeteilt.<br/><br/>Hinweis: Ich kann innerhalb von acht Wochen, beginnend mit dem Belastungsdatum, die Erstattung des belasteten Betrages verlangen. Es gelten dabei die mit meinem Geldinstitut vereinbarten Bedingungen. Bitte beachten Sie, dass die f&auml;llige Forderung auch bei einer R&uuml;cklastschrift bestehen bleibt. Weitere Informationen finden Sie auf <a href="https://www.billpay.de/sepa" target="_blank">https://www.billpay.de/sepa</a>.');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_SEPA_INFORMATION_AT', "Die Gl&auml;ubiger-Identifikationsnummer von BillPay ist DE19ZZZ00000237180, die Gl&auml;ubiger-Identifikationsnummer der net-m privatbank AG ist DE62ZZZ00000009232. Die Mandatsreferenznummer wird mir zu einem sp&auml;teren Zeitpunkt per Email zusammen mit einer Vorlage f&uuml;r ein schriftliches Mandat mitgeteilt. Ich werde zus&auml;tzlich dieses schriftliche Mandat unterschreiben und an BillPay senden.<br/><br/>Hinweis: Ich kann innerhalb von acht Wochen, beginnend mit dem Belastungsdatum, die Erstattung des belasteten Betrages verlangen. Es gelten dabei die mit meinem Geldinstitut vereinbarten Bedingungen. Bitte beachten Sie, dass die f&auml;llige Forderung auch bei einer R&uuml;cklastschrift bestehen bleibt. Weitere Informationen finden Sie auf <a href='https://www.billpay.de/sepa' target='_blank'>https://www.billpay.de/sepa</a>.");

// Plugin 1.7
define('MODULE_PAYMENT_BILLPAYDEBIT_THANK_YOU_TEXT', 'Vielen Dank, dass Sie sich beim Kauf der Ware f&uuml;r die BillPay Lastschrift entschieden haben.');
define('MODULE_PAYMENT_BILLPAYDEBIT_PAY_UNTIL_TEXT', 'Wir buchen den Betrag von %1$s %2$s in den n&auml;chsten Tagen von dem bei der Bestellung angegebenen Konto ab.');
define('MODULE_PAYMENT_BILLPAYDEBIT_EMAIL_TEXT', '&Uuml;ber das Einzugsdatum informiert BillPay Sie vorab per E-Mail.');
