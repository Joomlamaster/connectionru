
*Clean database country table, leave only countries with its states from bellow

SET foreign_key_checks = 0;
DELETE `country`.*, `state`.*
FROM `country`
	LEFT JOIN `state` ON `state`.`country` = `country`.`id`	
	WHERE country.name not IN (
        "Canada",
        "United States",
        "Italy",
        "France",
        "Germany",
        "Italy",
        "Denmark",
        "Australia",
        "Brazil",
        "United Kingdom",
        "Monaco",
        "Russia"
    );
SET foreign_key_checks = 1;


*Clean database languages table, leave only bellow languages

SET foreign_key_checks = 0;
DELETE `language`.*, `user_profile_language`.*
FROM `language`
	LEFT JOIN `user_profile_language` 
        ON `user_profile_language`.`language_id` = `language`.`id`
	WHERE `language`.`name` not IN (
        "English",
        "Russian",
        "Spanish",
        "French",
        "Hebrew",
        "Dutch",
        "German"        
    );
SET foreign_key_checks = 1;