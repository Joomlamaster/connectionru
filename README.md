
; Clean database country table, leave only countries with its states from bellow
;-------------------------------------------------------------------------------
SET foreign_key_checks = 0;
DELETE `country`.*, `state`.*
FROM `country`
	LEFT JOIN `state` ON `state`.`country` = `country`.`id`	
	WHERE country.name not IN (
        "United States",
        "Canada",
        "United Kingdom",
        "Italy",
        "France",
        "Germany",        
        "Denmark",
        "Australia",
        "Brazil",
        "Monaco",
        "Russia"
    );
SET foreign_key_checks = 1;
;------------------------------------------------------------------------------


; Update country priority 
;------------------------------------------------------------------------------
UPDATE `country` SET `country`.`priority` = 11 WHERE `country`.`iso` = "US";
UPDATE `country` SET `country`.`priority` = 10 WHERE `country`.`iso` = "CA";
UPDATE `country` SET `country`.`priority` = 9 WHERE `country`.`iso` = "GB";
UPDATE `country` SET `country`.`priority` = 8 WHERE `country`.`iso` = "IT";
UPDATE `country` SET `country`.`priority` = 7 WHERE `country`.`iso` = "FR";
UPDATE `country` SET `country`.`priority` = 6 WHERE `country`.`iso` = "DE";
UPDATE `country` SET `country`.`priority` = 5 WHERE `country`.`iso` = "DK";
UPDATE `country` SET `country`.`priority` = 4 WHERE `country`.`iso` = "AU";
UPDATE `country` SET `country`.`priority` = 3 WHERE `country`.`iso` = "BR";
UPDATE `country` SET `country`.`priority` = 3 WHERE `country`.`iso` = "MC";
UPDATE `country` SET `country`.`priority` = 1 WHERE `country`.`iso` = "RU";
;------------------------------------------------------------------------------


;Clean database languages table, leave only bellow languages
;------------------------------------------------------------------------------
SET foreign_key_checks = 0;
DELETE `language`.*, `user_profile_language`.*
FROM `language`
	LEFT JOIN `user_profile_language` 
        ON `user_profile_language`.`language_id` = `language`.`id`
	WHERE `language`.`name` not IN (
        "English",
        "Russian",
        "Spanish",
        "Hebrew",
        "French",
        "Italian",
        "German",
        "Portuguese",
        "Arabic",
        "Chinese",
        "Dutch"
    );
SET foreign_key_checks = 1;
;------------------------------------------------------------------------------


; Update languages priority 
;------------------------------------------------------------------------------
UPDATE `language` SET `language`.`priority` = 11 WHERE `language`.`code` = "EN";
UPDATE `language` SET `language`.`priority` = 10 WHERE `language`.`code` = "RU";
UPDATE `language` SET `language`.`priority` = 9 WHERE `language`.`code` = "ES";
UPDATE `language` SET `language`.`priority` = 8 WHERE `language`.`code` = "HE";
UPDATE `language` SET `language`.`priority` = 7 WHERE `language`.`code` = "FR";
UPDATE `language` SET `language`.`priority` = 6 WHERE `language`.`code` = "IT";
UPDATE `language` SET `language`.`priority` = 5 WHERE `language`.`code` = "DE";
UPDATE `language` SET `language`.`priority` = 4 WHERE `language`.`code` = "PT";
UPDATE `language` SET `language`.`priority` = 3 WHERE `language`.`code` = "AR";
UPDATE `language` SET `language`.`priority` = 2 WHERE `language`.`code` = "ZH";
UPDATE `language` SET `language`.`priority` = 1 WHERE `language`.`code` = "NL";