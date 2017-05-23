CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE women (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `viaf_url` VARCHAR(255) DEFAULT NULL,
    `name_english` VARCHAR(255) DEFAULT NULL,
    `name_spanish` VARCHAR(255) DEFAULT NULL,
    `name_portuguese` VARCHAR(255) DEFAULT NULL,
    `name_other`  VARCHAR(255) DEFAULT NULL,
    `birth_approx` INT(1) DEFAULT 0,
    `birth_year` INT(4) DEFAULT NULL,
    `death_approx` INT(1) DEFAULT 0,	
    `death_year` INT(4) DEFAULT NULL,
    `related_to` TEXT DEFAULT NULL,
    `religious_order` VARCHAR(255) DEFAULT NULL,
    `notes` TEXT DEFAULT NULL,
    `created` DATETIME,
    `modified` DATETIME,
    UNIQUE KEY (`name`)
);

CREATE TABLE convents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    name_english VARCHAR(255) DEFAULT NULL,
    name_spanish VARCHAR(255) DEFAULT NULL,
    name_portuguese VARCHAR(255) DEFAULT NULL,
    name_other  VARCHAR(255) DEFAULT NULL,
    city VARCHAR(255) DEFAULT NULL,
    country VARCHAR(255) DEFAULT NULL,
    date_founding INT(4) DEFAULT NULL,
    date_closing INT(4) DEFAULT NULL,
    latitude VARCHAR(255) DEFAULT NULL,
    longitude  VARCHAR(255) DEFAULT NULL,
    created DATETIME,
    modified DATETIME,
    UNIQUE KEY (name)
);

CREATE TABLE `portraits` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(255) NOT NULL,
  `woman_id` int(11) NOT NULL,
  `painter` varchar(255) DEFAULT NULL,
  `painter_viaf` varchar(255) DEFAULT NULL,
  `date_painted` INT(4) DEFAULT NULL,
  `date_painted_approx` char(1) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `image_file` blob DEFAULT NULL,
  `image_path_lo` varchar(255) DEFAULT NULL,
  `image_path_hi` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  FOREIGN KEY portrait_woman_key(woman_id) REFERENCES women(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE women_convents (
    woman_id INT NOT NULL,
    convent_id INT NOT NULL,
    PRIMARY KEY (woman_id, convent_id),
    FOREIGN KEY convent_key(convent_id) REFERENCES convents(id),
    FOREIGN KEY convent_woman_key(woman_id) REFERENCES women(id)
);
