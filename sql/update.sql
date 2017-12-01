
CREATE TABLE IF NOT EXISTS `0_projects` (
    `proj_id` varchar(11) NOT NULL,
    `proj_name` varchar(100) NOT NULL,
    `proj_description` varchar(100) DEFAULT NULL,
    `proj_type` INT(11) NOT NULL DEFAULT 0,
    `created_date` date NOT NULL,
    `closed_date` date DEFAULT NULL,
    `begin_date` date DEFAULT NULL,
    `end_date` date DEFAULT NULL,
    `owner_id` int(11) NOT NULL,
    PRIMARY KEY (`proj_id`)
) ENGINE=InnoDB;
