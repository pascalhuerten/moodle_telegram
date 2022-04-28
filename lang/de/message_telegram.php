<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for telegram message plugin.
 *
 * @package message_telegram
 * @author  Mike Churchward
 * @copyright  2017 onwards Mike Churchward (mike.churchward@poetgroup.org)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configsitebotname'] = 'Dieses Feld wird automatisch befüllt, wenn Sie den Bot-Token speichern.';
$string['configsitebottoken'] = 'Geben Sie hier den Bot-Token ein, den sie vom BotFather zugewiesen bekommen haben.';
$string['configsitebotusername'] = 'Dieses Feld wird automatisch befüllt, wenn Sie den Bot-Token speichern.';
$string['connectinstructions'] = 'Sobal Sie den unten stehenden Link gedrückt haben, werden Sie bestätigen müssen den Link in der Telegram-Anwendung zu öffnen. Klicken Sie anschließend in Telegram den "Start" Knopf im "{$a}" Chat, der sich öffnet um Ihren Telegram-Account mit Moodle zu verknüpfen.
Sobald Sie dies abgeschlossen haben, kehren Sie zu dieser Seite zurück und speichern die Änderungen.
<a href="https://docs.moodle.org/33/en/Telegram_message_processor#Configuring_user_preferences" target="_blank">Zur vollständigen Dokumentation</a>.';
$string['connectme'] = 'Verknüpfe meinen Account mit Telegram.';
$string['notconfigured'] = 'Telegram-Nachrichten können nicht versendet werden, da der Telegram-Server noch nicht konfiguriert wurde';
$string['pluginname'] = 'Telegram';
$string['sitebotname'] = 'Bot-Name für diese Seite';
$string['sitebottoken'] = 'Bot-Token für diese Seite';
$string['sitebottokennotsetup'] = 'Der Bot-Token für diese Seite muss in den Plugin-Einstellungen eingestellt werden.';
$string['sitebotusername'] = 'Bot-Nutzername für diese Seite';
$string['telegrambottoken'] = 'Telegram-Bot-Token';
$string['telegramchatid'] = 'Telegram-Chat-ID';
$string['removetelegram'] = 'Entferne Telegram-Verbindung';
$string['requirehttps'] = 'Die Seite muss HTTPS für Telegrams Webhook-Funktion unterstützen.';
$string['setupinstructions'] = 'Erstellen Sie einen neuen Telegram-Bot mittels BotFather. Klicken Sie den BotFather Link unten und öffnen Sie ihn in Telegram.
Nutzen Sie das Kommando "/newbot" in Telegram, um einen neune Bot zu erstellen. Sie werden einen Bot-Namen angeben müssen, zum Beispiel "{$a->name}", und einen einzigartigen Bot-Nutzernamen, zum Beispiel "{$a->username}".
<a href="https://docs.moodle.org/33/en/Telegram_message_processor" target="_blank">Zur vollständigen Dokumentation</a>.';
$string['setwebhook'] = 'Webhook anlegen';
$string['webhook'] = 'Telegram-Webhook';
$string['webhookdeleted'] = 'Webhook wurde angelegt.';
$string['webhookdesc'] = 'Dies ist der Endpunkt, der eigehende Updates vom Bot erhält und verarbeitet. Lassen Sie dieses Feld leer um, keinen Webhook anzulegen.';
$string['webhookset'] = 'Webhook wurde erfolgreich angelegt.';
$string['webhooksettings'] = 'Webhook Einstellungen';
