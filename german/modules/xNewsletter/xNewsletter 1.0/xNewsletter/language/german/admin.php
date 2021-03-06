<?php
/**
 * ****************************************************************************
 *  XNEWSLETTER - MODULE FOR XOOPS
 *  Copyright (c) 2012
 *  Goffy ( wedega.com )
 *
 *  You may not change or alter any portion of this comment or credits
 *  of supporting developers from this source code or any supporting
 *  source code which is considered copyrighted (c) material of the
 *  original comment or credit authors.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  ---------------------------------------------------------------------------
 *  @copyright  Goffy ( wedega.com )
 *  @license    GPL 2.0
 *  @package    xNewsletter
 *  @author     Goffy ( webmaster@wedega.com )
 *
 *  Version : 1 Mon 2012/11/05 14:31:32 :  Exp $
 * ****************************************************************************
 */

//General
define("_AM_XNEWSLETTER_FORMOK","Daten erfolgreich gespeichert");
define("_AM_XNEWSLETTER_FORMDELOK","Daten erfolgreich gelöscht");
define("_AM_XNEWSLETTER_FORMDELNOTOK","Fehler beim Löschen");
define("_AM_XNEWSLETTER_FORMSUREDEL", "Wollen Sie <span class='bold red'>%s</span> wirklich löschen?");
define("_AM_XNEWSLETTER_FORMSUREDEL_LIST", "Wollen Sie alle Protokolleinträge zu <span class='bold red'>%s</span> wirklich löschen?");
define("_AM_XNEWSLETTER_FORMSURERENEW", "Wollen Sie <span class='bold red'>%s</span> wirklich ändern?");
define("_AM_XNEWSLETTER_FORMUPLOAD","Hochladen");
define("_AM_XNEWSLETTER_FORMIMAGE_PATH","In %s vorhandene Dateien");
define("_AM_XNEWSLETTER_FORMACTION","Aktion");

define("_AM_XNEWSLETTER_ERROR_NO_VALID_ID","Fehler: Keine gültige ID!");
define("_AM_XNEWSLETTER_OK","Erfolgreich");
define("_AM_XNEWSLETTER_FAILED","Fehlgeschlagen");
define("_AM_XNEWSLETTER_SAVE","Speichern");
define("_AM_XNEWSLETTER_DETAILS","Details anzeigen");
define("_AM_XNEWSLETTER_SEARCH","Suche");
define("_AM_XNEWSLETTER_SEARCH_EQUAL","=");
define("_AM_XNEWSLETTER_SEARCH_CONTAINS","enthält");
	
define("_AM_ACCOUNTS_TYPE_PHPMAIL","php mail()");
define("_AM_ACCOUNTS_TYPE_PHPSENDMAIL","php sendmail()");
define("_AM_ACCOUNTS_TYPE_POP3","POP3");
define("_AM_ACCOUNTS_TYPE_SMTP","Imap");
define("_AM_ACCOUNTS_TYPE_GMAIL","Gmail");

define("_AM_ACCOUNTS_TYPE_NOTREQUIRED","Nicht erforderlich");
define("_AM_ACCOUNTS_TYPE_NAME","Mein Kontoname");
define("_AM_ACCOUNTS_TYPE_YOURNAME","Max Mustermann");
define("_AM_ACCOUNTS_TYPE_YOUREMAIL","mustermann@yourdomain.com");
define("_AM_ACCOUNTS_TYPE_USERNAME","Benutzername");
define("_AM_ACCOUNTS_TYPE_PWD","Passwort");
define("_AM_ACCOUNTS_TYPE_POP3_SERVER_IN","pop3.yourdomain.com");
define("_AM_ACCOUNTS_TYPE_POP3_PORT_IN","110");
define("_AM_ACCOUNTS_TYPE_POP3_SERVER_OUT","mail.yourdomain.com");
define("_AM_ACCOUNTS_TYPE_POP3_PORT_OUT","25");
define("_AM_ACCOUNTS_TYPE_SMTP_SERVER_IN","imap.yourdomain.com");
define("_AM_ACCOUNTS_TYPE_SMTP_PORT_IN","143");
define("_AM_ACCOUNTS_TYPE_SMTP_SERVER_OUT","mail.yourdomain.com");
define("_AM_ACCOUNTS_TYPE_SMTP_PORT_OUT","25");
define("_AM_ACCOUNTS_TYPE_GMAIL_USERNAME","yourusername@gmail.com");
define("_AM_ACCOUNTS_TYPE_GMAIL_SERVER_IN","imap.gmail.com");
define("_AM_ACCOUNTS_TYPE_GMAIL_PORT_IN","993");
define("_AM_ACCOUNTS_TYPE_SECURETYPE_IN","tls");
define("_AM_ACCOUNTS_TYPE_GMAIL_SERVER_OUT","smtp.gmail.com");
define("_AM_ACCOUNTS_TYPE_GMAIL_PORT_OUT","465");
define("_AM_ACCOUNTS_TYPE_SECURETYPE_OUT","ssl");

define("_AM_ACCOUNTS_TYPE_CHECK","Bitte Einstellungen überprüfen");
 
define("_AM_XNEWSLETTER_LETTER_ACTION","Aktion nach dem Speichern");
define("_AM_XNEWSLETTER_LETTER_ACTION_SAVED","Gespeichert");
define("_AM_XNEWSLETTER_LETTER_ACTION_NO","Keine Aktion");
define("_AM_XNEWSLETTER_LETTER_ACTION_COPYNEW","Kopie als neuen Newsletter");
define("_AM_XNEWSLETTER_LETTER_ACTION_PREVIEW","Vorschau anzeigen");
define("_AM_XNEWSLETTER_LETTER_ACTION_SEND","Newsletter an alle Abonnenten versenden");
define("_AM_XNEWSLETTER_LETTER_ACTION_RESEND","Newsletter neuerlich an alle Abonnenten versenden, bei denen der Sendevorgang fehlgeschlagen ist");
define("_AM_XNEWSLETTER_LETTER_ACTION_SENDTEST","Newsletter testweise verschicken");
define("_AM_XNEWSLETTER_LETTER_EMAIL_TEST","E-Mail zum Testen des Newsletters");
define("_AM_XNEWSLETTER_LETTER_EMAIL_ALTBODY","Um den Inhalt korrekt anzeigen zu lassen, verwenden Sie bitte einen HTML-kompatiblen E-Mail-Client!");
define("_AM_XNEWSLETTER_LETTER_ERROR_INVALID_ATT_ID","Fehler beim Löschen des Anhanges (ungültige ID)");

define("_AM_XNEWSLETTER_SEND_SUCCESS","Newsletter versendet");
define("_AM_XNEWSLETTER_SEND_SUCCESS_TEST","Newsletter zum Testen versendet");
define("_AM_XNEWSLETTER_SEND_SUCCESS_NUMBER","Senden von %t Newsletter(n) erfolgreich");
define("_AM_XNEWSLETTER_SEND_SUCCESS_ML","Verarbeitung Mailinglist erfolgreich");
define("_AM_XNEWSLETTER_SEND_SUCCESS_ML_DETAIL","Senden '%a' an Mailinglist erfolgreich");
define("_AM_XNEWSLETTER_SEND_ERROR_NUMBER","Fehler beim Senden des Newsletters: %e von %t Newslettern wurden nicht gesendet");
define("_AM_XNEWSLETTER_SEND_ERROR_PHPMAILER","Fehler phpmailer: ");
define("_AM_XNEWSLETTER_SEND_ERROR_NO_EMAIL","Fehler: Keine gültige E-Mail-Adresse vorhanden");
define("_AM_XNEWSLETTER_SEND_ERROR_NO_LETTERID","Fehler: Kein gültiger Newsletter ausgewählt");
define("_AM_XNEWSLETTER_SEND_ERROR_INALID_TEMPLATE_PATH","Fehler: Vorlagenpfad '%p' nicht gefunden");
define("_AM_XNEWSLETTER_SEND_SURE_SENT","Dieser Newsletter wurde bereits an alle Abonnenten versendet.<br/>Wollen Sie diesen Newsletter wirklich noch einmal an alle Abonnenten versenden?");

//Index
define("_AM_XNEWSLETTER_ACCOUNTS","Statistik Sender-Konten");
define("_AM_XNEWSLETTER_THEREARE_ACCOUNTS","Es sind <span class='bold'>%s</span> Sender-Konten vorhanden");
define("_AM_XNEWSLETTER_CAT","Statistik Newsletterkategorien");
define("_AM_XNEWSLETTER_THEREARE_CAT","Es sind <span class='bold'>%s</span> Newsletterkategorien vorhanden");
define("_AM_XNEWSLETTER_SUBSCR","Statistik Abonnenten");
define("_AM_XNEWSLETTER_THEREARE_SUBSCR","Es sind <span class='bold'>%s</span> Abonnenten vorhanden");
define("_AM_XNEWSLETTER_CATSUBSCR","Statistik Abonnenten zu Newsletterkategorien");
define("_AM_XNEWSLETTER_THEREARE_CATSUBSCR","Es sind <span class='bold'>%s</span> Abonnenten zu Newsletterkategorien vorhanden");
define("_AM_XNEWSLETTER_LETTER","Statistik Newsletter");
define("_AM_XNEWSLETTER_THEREARE_LETTER","Es sind <span class='bold'>%s</span> Newsletter vorhanden");
define("_AM_XNEWSLETTER_PROTOCOL","Statistik Protokoll");
define("_AM_XNEWSLETTER_THEREARE_PROTOCOL","Es sind <span class='bold'>%s</span> Protokolleinträge vorhanden");
define("_AM_XNEWSLETTER_ATTACHMENT","Statistik Anhänge");
define("_AM_XNEWSLETTER_THEREARE_ATTACHMENT","Es sind <span class='bold'>%s</span> Anhänge vorhanden");
define("_AM_XNEWSLETTER_MAILINGLIST","Statistik Mailinglisten");
define("_AM_XNEWSLETTER_THEREARE_MAILINGLIST","Es sind <span class='bold'>%s</span> Mailinglisten vorhanden");
define("_AM_XNEWSLETTER_BMH","Statistik Bounced-Mail");
define("_AM_XNEWSLETTER_THEREARE_BMH","Es sind <span class='bold'>%s</span> Bounced-Mail-Handler-Einträge vorhanden");

//Buttons
define("_AM_XNEWSLETTER_NEWACCOUNTS","Sender-Konto hinzufügen");
define("_AM_XNEWSLETTER_ACCOUNTSLIST","Sender-Konten auflisten");
define("_AM_XNEWSLETTER_ACCOUNTSWAIT","Offene Sender-Konten");
define("_AM_XNEWSLETTER_NEWCAT","Newsletterkategorie hinzufügen");
define("_AM_XNEWSLETTER_CATLIST","Newsletterkategorien auflisten");
define("_AM_XNEWSLETTER_CATWAIT","Offene Newsletterkategorien");
define("_AM_XNEWSLETTER_NEWSUBSCR","Abonnent hinzufügen");
define("_AM_XNEWSLETTER_SUBSCRLIST","Abonnenten auflisten");
define("_AM_XNEWSLETTER_SUBSCRWAIT","Offene Abonnenten");
define("_AM_XNEWSLETTER_NEWCATSUBSCR","Abonnent zu Newsletterkategorie hinzufügen");
define("_AM_XNEWSLETTER_CATSUBSCRLIST","Abonnenten zu Newsletterkategorien auflisten");
define("_AM_XNEWSLETTER_CATSUBSCRWAIT","Offene Abonnenten zu Newsletterkategorien");
define("_AM_XNEWSLETTER_NEWLETTER","Newsletter hinzufügen");
define("_AM_XNEWSLETTER_LETTERLIST","Newsletter auflisten");
define("_AM_XNEWSLETTER_LETTERWAIT","Offene Newsletter");
define("_AM_XNEWSLETTER_LETTER_DELETE_ALL","Protokoll von diesem Newsletter löschen");
define("_AM_XNEWSLETTER_NEWPROTOCOL","Protokolleintrag hinzufügen");
define("_AM_XNEWSLETTER_PROTOCOLLIST","Protokolleinträge auflisten");
define("_AM_XNEWSLETTER_PROTOCOLWAIT","Offene Protokolleinträge");
define("_AM_XNEWSLETTER_NEWATTACHMENT","Anhang hinzufügen");
define("_AM_XNEWSLETTER_ATTACHMENTLIST","Anhänge auflisten");
define("_AM_XNEWSLETTER_ATTACHMENTWAIT","Offene Anhänge");
define("_AM_XNEWSLETTER_NEWMAILINGLIST","Mailingliste hinzufügen");
define("_AM_XNEWSLETTER_MAILINGLISTLIST","Mailinglisten auflisten");
define("_AM_XNEWSLETTER_MAILINGLISTWAIT","Offene Mailinglisten");
define("_AM_XNEWSLETTER_RUNBMH","Bounced-Mail-Handler starten");
define("_AM_XNEWSLETTER_BMHLIST","Ergebnisse Bounced-Mail-Handler auflisten");
define("_AM_XNEWSLETTER_BMHWAIT","Offene Ergebnisse Bounced-Mail-Handler");

define("_AM_XNEWSLETTER_ACCOUNTS_ADD","E-Mail-Konto hinzufügen");
define("_AM_XNEWSLETTER_ACCOUNTS_EDIT","E-Mail-Konto bearbeiten");
define("_AM_XNEWSLETTER_ACCOUNTS_DELETE","E-Mail-Konto löschen");
define("_AM_XNEWSLETTER_ACCOUNTS_ID","Id");
define("_AM_XNEWSLETTER_ACCOUNTS_TYPE","Typ");
define("_AM_XNEWSLETTER_ACCOUNTS_NAME","Name");
define("_AM_XNEWSLETTER_ACCOUNTS_YOURNAME","Anzeigename");
define("_AM_XNEWSLETTER_ACCOUNTS_YOURMAIL","E-Mail-Adresse");
define("_AM_XNEWSLETTER_ACCOUNTS_USERNAME","Benutzername");
define("_AM_XNEWSLETTER_ACCOUNTS_PASSWORD","Passwort");
define("_AM_XNEWSLETTER_ACCOUNTS_INCOMING","Eingangsserver");
define("_AM_XNEWSLETTER_ACCOUNTS_SERVER_IN","Mailserver");
define("_AM_XNEWSLETTER_ACCOUNTS_PORT_IN","Port");
define("_AM_XNEWSLETTER_ACCOUNTS_SECURETYPE_IN","Sicherheitstyp");
define("_AM_XNEWSLETTER_ACCOUNTS_OUTGOING","Ausgangsserver");
define("_AM_XNEWSLETTER_ACCOUNTS_SERVER_OUT","Mailserver");
define("_AM_XNEWSLETTER_ACCOUNTS_PORT_OUT","Port");
define("_AM_XNEWSLETTER_ACCOUNTS_SECURETYPE_OUT","Sicherheitstyp");
define("_AM_XNEWSLETTER_ACCOUNTS_DEFAULT","Standard E-Mail-Konto");
define("_AM_XNEWSLETTER_ACCOUNTS_BOUNCE_INFO","Zusätzliche Infos für Bounced-Mail-Handler");
define("_AM_XNEWSLETTER_ACCOUNTS_USE_BMH","Bounced-Mail-Handler verwenden");
define("_AM_XNEWSLETTER_ACCOUNTS_INBOX","Mailbox für Überprüfung durch Bounced-Mail-Handler");
define("_AM_XNEWSLETTER_ACCOUNTS_HARDBOX","Verwende diese Mailbox als 'hardbox'");
define("_AM_XNEWSLETTER_ACCOUNTS_HARDBOX_DESC","Der Mailboxname muss mit 'INBOX.' beginnen. Sie können entweder einen Standard-Ordner in Ihrer Mailbox verwenden (z.B. INBOX.Trash) oder Sie erstellen einen eigenen Odner wie z.B.'hard' oder 'soft' (dies wird empfohlen). Wenn Sie einen neuen Ordnernamen angeben, wird dieser automatisch erstellt (diese Funktion wird jedoch von Gmail-Konten aus Sicherheitsgründen nicht unterstützt).");
define("_AM_XNEWSLETTER_ACCOUNTS_MOVEHARD","Als 'hard' klassifizierte Bounced Mails in 'hardbox' verschieben");
define("_AM_XNEWSLETTER_ACCOUNTS_SOFTBOX","Verwende diese Mailbox als 'softbox'");
define("_AM_XNEWSLETTER_ACCOUNTS_MOVESOFT","Als 'soft' klassifizierte Bounced Mails in 'softbox' verschieben");
define("_AM_XNEWSLETTER_ACCOUNTS_SUBMITTER","Einsender");
define("_AM_XNEWSLETTER_ACCOUNTS_CREATED","Erstellt am");
define("_AM_XNEWSLETTER_ACCOUNTS_ERROR_OPEN_MAILBOX","Fehler beim Öffnen der Mailbox! Bitte Einstellungen überprüfen!");

define("_AM_XNEWSLETTER_SAVE_AND_CHECK","Speichern und Einstellungen überprüfen");
define("_AM_XNEWSLETTER_ACCOUNTS_CHECK_OK","erfolgreich  ");
define("_AM_XNEWSLETTER_ACCOUNTS_CHECK_FAILED","fehlgeschlagen  ");
define("_AM_XNEWSLETTER_ACCOUNTS_CHECK_SKIPPED","übersprungen ");
define("_AM_XNEWSLETTER_ACCOUNTS_CHECK","Überprüfungsergebnis");
define("_AM_XNEWSLETTER_ACCOUNTS_CHECK_INFO","Zusätzliche Infos");
define("_AM_XNEWSLETTER_ACCOUNTS_CHECK_OPEN_MAILBOX","Öffnen Mailbox ");
define("_AM_XNEWSLETTER_ACCOUNTS_CHECK_OPEN_FOLDERS","Öffnen Ordner ");
define("_AM_XNEWSLETTER_ACCOUNTS_CHECK_BMH","Bounced-Mail-Handler ");
define("_AM_XNEWSLETTER_ACCOUNTS_CHECK_BMH_INBOX","Mailbox");
define("_AM_XNEWSLETTER_ACCOUNTS_CHECK_BMH_HARDBOX","Hardbox");
define("_AM_XNEWSLETTER_ACCOUNTS_CHECK_BMH_SOFTBOX","Softbox");
  
define("_AM_XNEWSLETTER_CAT_ADD","Newsletterkategorie hinzufügen");
define("_AM_XNEWSLETTER_CAT_EDIT","Newsletterkategorie bearbeiten");
define("_AM_XNEWSLETTER_CAT_DELETE","Newsletterkategorie löschen");
define("_AM_XNEWSLETTER_CAT_ID","Id");
define("_AM_XNEWSLETTER_CAT_NAME","Newsletter Name");
define("_AM_XNEWSLETTER_CAT_INFO","Zusätzliche Infos");
define("_AM_XNEWSLETTER_CAT_GPERMS_CREATE","Berechtigung zum Erstellen");
define("_AM_XNEWSLETTER_CAT_GPERMS_CREATE_DESC","<br/><span style='font-weight:normal'>- Erstellen neuer Newsletter<br/>- Bearbeiten, Löschen und Senden der eigenen Newsletter</span>");
define("_AM_XNEWSLETTER_CAT_GPERMS_ADMIN","Berechtigung zum Verwalten");
define("_AM_XNEWSLETTER_CAT_GPERMS_ADMIN_DESC","<br/><span style='font-weight:normal'>Bearbeiten, Löschen und Senden aller Newslettter dieser Kategorie</span>");
define("_AM_XNEWSLETTER_CAT_GPERMS_READ","Berechtigung zum Lesen/Abonnieren");
define("_AM_XNEWSLETTER_CAT_GPERMS_LIST","Berechtigung zum Anzeigen der Liste der Abonnenten");
define("_AM_XNEWSLETTER_CAT_SUBMITTER","Einsender");
define("_AM_XNEWSLETTER_CAT_CREATED","Erstellt am");
define("_AM_XNEWSLETTER_CAT_MAILINGLIST","Mailingliste");
  
define("_AM_XNEWSLETTER_SUBSCR_ADD","Abonnenten hinzufügen");
define("_AM_XNEWSLETTER_SUBSCR_EDIT","Abonnenten bearbeiten");
define("_AM_XNEWSLETTER_SUBSCR_DELETE","Abonnenten löschen");
define("_AM_XNEWSLETTER_SUBSCR_ID","Id");
define("_AM_XNEWSLETTER_SUBSCR_EMAIL","E-Mail-Adresse");
define("_AM_XNEWSLETTER_SUBSCR_FIRSTNAME","Vorname");
define("_AM_XNEWSLETTER_SUBSCR_LASTNAME","Familienname");
define("_AM_XNEWSLETTER_SUBSCR_UID","Uid");
define("_AM_XNEWSLETTER_SUBSCR_SEX","Anrede");
define("_AM_XNEWSLETTER_SUBSCR_SEX_EMPTY","");
define("_AM_XNEWSLETTER_SUBSCR_SEX_MALE","Herr");
define("_AM_XNEWSLETTER_SUBSCR_SEX_FEMALE","Frau");
define("_AM_XNEWSLETTER_SUBSCR_SEX_FAMILY","Familie");
define("_AM_XNEWSLETTER_SUBSCR_SEX_COMP","Firma");
define("_AM_XNEWSLETTER_SUBSCR_SUBMITTER","Einsender");
define("_AM_XNEWSLETTER_SUBSCR_CREATED","Erstellt am");
define("_AM_XNEWSLETTER_SUBSCR_ACTIVATED","aktiviert?");
define("_AM_XNEWSLETTER_SUBSCR_SHOW_ALL","Alle anzeigen");
  
define("_AM_XNEWSLETTER_CATSUBSCR_ADD","Abonnent zu Newsletterkategorie hinzufügen");
define("_AM_XNEWSLETTER_CATSUBSCR_EDIT","Abonnent/Newsletterkategorie bearbeiten");
define("_AM_XNEWSLETTER_CATSUBSCR_DELETE","Abonnent/Newsletterkategorie löschen");
define("_AM_XNEWSLETTER_CATSUBSCR_ID","Id");
define("_AM_XNEWSLETTER_CATSUBSCR_CATID","Newsletter");
define("_AM_XNEWSLETTER_CATSUBSCR_SUBSCRID","Abonnenten");
define("_AM_XNEWSLETTER_CATSUBSCR_QUITED","Beendet");
define("_AM_XNEWSLETTER_CATSUBSCR_SUBMITTER","Einsender");
define("_AM_XNEWSLETTER_CATSUBSCR_CREATED","Erstellt am");
define("_AM_XNEWSLETTER_CATSUBSCR_SUREDELETE","Wollen Sie <br />'%s'<br /> wirklich von<br />'%c' entfernen?");
define("_AM_XNEWSLETTER_CATSUBSCR_QUIT_NONE","Nein");
define("_AM_XNEWSLETTER_CATSUBSCR_QUIT_NOW","Jetzt beenden");
define("_AM_XNEWSLETTER_CATSUBSCR_QUIT_REMOVE","Beendigungsdatum wieder entfernen");
  
define("_AM_XNEWSLETTER_LETTER_ADD","Newsletter hinzufügen");
define("_AM_XNEWSLETTER_LETTER_EDIT","Newsletter bearbeiten");
define("_AM_XNEWSLETTER_LETTER_DELETE","Newsletter löschen");
define("_AM_XNEWSLETTER_LETTER_ID","Id");
define("_AM_XNEWSLETTER_LETTER_TITLE","Titel");
define("_AM_XNEWSLETTER_LETTER_CONTENT","Inhalt");
define("_AM_XNEWSLETTER_LETTER_TEMPLATE","Vorlage");
define("_AM_XNEWSLETTER_LETTER_CATS","Newsletterkategorie");
define("_AM_XNEWSLETTER_LETTER_ATTACHMENT","Anhänge");
define("_AM_XNEWSLETTER_LETTER_STATUS","Status");
define("_AM_XNEWSLETTER_LETTER_SUBMITTER","Einsender");
define("_AM_XNEWSLETTER_LETTER_CREATED","Erstellt am");
define("_AM_XNEWSLETTER_LETTER_ACCOUNTS_AVAIL","Verfügbare Sende-Konten");
define("_AM_XNEWSLETTER_LETTER_ACCOUNT","Konto");
define("_AM_XNEWSLETTER_LETTER_MAILINGLIST","Mailingliste verwenden");
define("_AM_XNEWSLETTER_LETTER_MAILINGLIST_NO","Nein");

define("_AM_XNEWSLETTER_ATTACHMENT_ADD","Anhang hinzufügen");
define("_AM_XNEWSLETTER_ATTACHMENT_EDIT","Anhang bearbeiten");
define("_AM_XNEWSLETTER_ATTACHMENT_DELETE","Anhang löschen");
define("_AM_XNEWSLETTER_ATTACHMENT_ID","Id");
define("_AM_XNEWSLETTER_ATTACHMENT_LETTER_ID","newsletter");
define("_AM_XNEWSLETTER_ATTACHMENT_NAME","Name");
define("_AM_XNEWSLETTER_ATTACHMENT_TYPE","Dateityp");
define("_AM_XNEWSLETTER_ATTACHMENT_SUBMITTER","Einsender");
define("_AM_XNEWSLETTER_ATTACHMENT_CREATED","Erstellt am");
  
define("_AM_XNEWSLETTER_PROTOCOL_ADD","Protokolleintrag hinzufügen");
define("_AM_XNEWSLETTER_PROTOCOL_EDIT","Protokolleintrag bearbeiten");
define("_AM_XNEWSLETTER_PROTOCOL_DELETE","Protokolleintrag löschen");
define("_AM_XNEWSLETTER_PROTOCOL_ID","Id");
define("_AM_XNEWSLETTER_PROTOCOL_LETTER_ID","Newsletter");
define("_AM_XNEWSLETTER_PROTOCOL_SUBSCRIBER_ID","Abonnent");
define("_AM_XNEWSLETTER_PROTOCOL_STATUS","Status");
define("_AM_XNEWSLETTER_PROTOCOL_SUCCESS","Erfolgreich");
define("_AM_XNEWSLETTER_PROTOCOL_SUBMITTER","Einsender");
define("_AM_XNEWSLETTER_PROTOCOL_CREATED","Erstellt am");
define("_AM_XNEWSLETTER_PROTOCOL_LAST_STATUS","Letzter Status");
define("_AM_XNEWSLETTER_PROTOCOL_MISC","Diverse Protokolleinträge");
define("_AM_XNEWSLETTER_PROTOCOL_NO_SUBSCREMAIL","E-Mail-Adresse des Empfängers nicht mehr vorhanden");

define("_AM_XNEWSLETTER_MAILINGLIST_ADD","Mailingliste hinzufügen");
define("_AM_XNEWSLETTER_MAILINGLIST_EDIT","Mailingliste bearbeiten");
define("_AM_XNEWSLETTER_MAILINGLIST_DELETE","Mailingliste löschen");
define("_AM_XNEWSLETTER_MAILINGLIST_ID","Id");
define("_AM_XNEWSLETTER_MAILINGLIST_NAME","Name");
define("_AM_XNEWSLETTER_MAILINGLIST_EMAIL","E-Mail");
define("_AM_XNEWSLETTER_MAILINGLIST_EMAIL_DESC","An-/Abmeldungen an folgende E-Mail-Adresse senden");
define("_AM_XNEWSLETTER_MAILINGLIST_LISTNAME","Listenname");
define("_AM_XNEWSLETTER_MAILINGLIST_SUBSCRIBE","Code für Anmeldung");
define("_AM_XNEWSLETTER_MAILINGLIST_SUBSCRIBE_DESC","{email} wird durch die E-Mail-Adresse des Abonnenten ersetzt");
define("_AM_XNEWSLETTER_MAILINGLIST_UNSUBSCRIBE","Code für Abmeldung");
define("_AM_XNEWSLETTER_MAILINGLIST_SUBMITTER","Einsender");
define("_AM_XNEWSLETTER_MAILINGLIST_CREATED","Erstellt am");

define("_AM_XNEWSLETTER_BOUNCETYPE","Bounce-Typ");
define("_AM_XNEWSLETTER_BMH_EDIT","Bounced-Mail-Handler-Eintrag bearbeiten");
define("_AM_XNEWSLETTER_BMH_DELETE","Bounced-Mail-Handler-Eintrag löschen");
define("_AM_XNEWSLETTER_BMH_ID","Id");
define("_AM_XNEWSLETTER_BMH_RULE_NO","Regel Nr.");
define("_AM_XNEWSLETTER_BMH_RULE_CAT","Regelkategorie");
define("_AM_XNEWSLETTER_BMH_BOUNCETYPE","Bounce-Typ");
define("_AM_XNEWSLETTER_BMH_REMOVE","Gelöscht");
define("_AM_XNEWSLETTER_BMH_EMAIL","E-Mail");
define("_AM_XNEWSLETTER_BMH_SUBJECT","Betreff");
define("_AM_XNEWSLETTER_BMH_MEASURE","Maßnahme");
define("_AM_XNEWSLETTER_BMH_SUBMITTER","Einsender");
define("_AM_XNEWSLETTER_BMH_CREATED","Erstellt am");

define("_AM_XNEWSLETTER_BMH_MEASURE_PENDING","Offen");
define("_AM_XNEWSLETTER_BMH_MEASURE_NOTHING","Keine Maßnahme");
define("_AM_XNEWSLETTER_BMH_MEASURE_QUIT","Diesen Abonnenten vorübergehend stilllegen");
define("_AM_XNEWSLETTER_BMH_MEASURE_DELETE","Diesen Abonnenten löschen");
define("_AM_XNEWSLETTER_BMH_MEASURE_QUITED","Abonnent vorübergehend stillgelegt");
define("_AM_XNEWSLETTER_BMH_MEASURE_DELETED","Abonnent gelöscht");
define("_AM_XNEWSLETTER_BMH_MEASURE_ALREADY_DELETED","Abonnenten bereits gelöscht! Aktion nicht möglich!");
define("_AM_XNEWSLETTER_BMH_MEASURE_DELETE_SURE","Sind Sie sicher, dass Sie diese Registrierung mit allen Newsletteranmeldungen löschen wollen?<br /><br />Eine spätere Reaktivierung durch den Abonnenten ist nicht mehr möglich!<br/><br />");

define("_AM_XNEWSLETTER_BMH_ERROR_NO_SUBSCRID","Für die angegebene E-Mail-Adresse konnte keine Registrierung gefunden werden!");
define("_AM_XNEWSLETTER_BMH_ERROR_NO_ACTIVE","Bounced-Mail-Handler ist bei keinem E-Mail-Konto aktiviert");
define("_AM_XNEWSLETTER_BMH_RSLT", "Ergebnis der Überprüfung der Mailbox %b<br/>Anzahl gelesene Nachrichten: %r<br/>Anzahl durchgeführte Aktionen: %a<br/>Anzahl ohne Aktionen: %n<br/>Anzahl verschobene Mails: %m<br/>Anzahl gelöschte Mails: %d<br/><br/><br/>");
define("_AM_XNEWSLETTER_BMH_SUCCESSFUL","Bounced-Mail-Handler erfolgreich beendet");

define("_AM_XNEWSLETTER_BMH_MEASURE_ALL","Alle anzeigen");
define("_AM_XNEWSLETTER_BMH_MEASURE_SHOW_NONE","Keine Bounced-Mail-Handler-Einträge für '%s' vorhanden");

define("_AM_XNEWSLETTER_MAINTENANCE_CAT","Kategorie");
define("_AM_XNEWSLETTER_MAINTENANCE_DESCR","Beschreibung");
define("_AM_XNEWSLETTER_MAINTENANCE_PARAM","Parameter");

define("_AM_XNEWSLETTER_MAINTENANCE_ERROR","Bei der Wartung ist ein Fehler aufgetreten");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETEDATE","Alle unbestätigten Anmeldung vor diesem Datum löschen.<br />Achtung! Aktion kann nicht rückgängig gemacht werden! Bitte Datum korrekt prüfen!");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETEUSER","Soll(en) die <b>%s</b> unbestätigte(n) Anmeldung(en) vor dem %s werden jetzt gelöscht.<br />Aktion ist unwiderruflich!");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETEPROTOCOL","alle Protokolle löschen und Tabelle zurücksetzen");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETEPROTOK","Protokolltabelle wurde gewartet.");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETENOTHING","Derzeit keine Aktion notwendig.");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETEUSEROK","Es wurden %s User entfernt");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_SUBCR","Anmeldungen zu Newslettern löschen, wenn keine aufrechte Registrierung besteht");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_SUBCR_OK","Es wurden %s fehlerhafte Anmeldungen entfernt");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_SUBCR_NODATA","Keine fehlerhaften Datensätze in Tabelle catsubsr vorhanden");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_ML","Daten Newsletterkategorien und Mailinglisten abgleichen und fehlerhafte Datensätze bereinigen");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_ML_OK","%s fehlerhafte Daten Mailinglisten wurden bereinigt");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_ML_NODATA","Keine fehlerhaften Datensätze Mailinglisten vorhanden");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_CATNL","Daten Newsletterkategorien und Newsletter abgleichen und fehlerhafte Datensätze bereinigen");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_CATNL_OK","%s fehlerhafte Daten bei Newslettern wurden bereinigt");
define("_AM_XNEWSLETTER_MAINTENANCE_DELETE_INVALID_CATNL_NODATA","Keine fehlerhaften Datensätze bei Newslettern vorhanden");


//Error NoFrameworks
define("_AM_XNEWSLETTER_NOFRAMEWORKS","Fehler: Sie verwenden das Frameworks \"admin module\" nicht. Bitte installieren Sie dieses Frameworks");
define("_AM_XNEWSLETTER_MAINTAINEDBY", "wird unterstützt von ");

define("_AM_XNEWSLETTER_SEND_ERROR_NO_LETTERCONTENT","Kein Text zum Drucken vorhanden");

?>