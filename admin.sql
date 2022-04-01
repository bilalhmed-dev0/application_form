CREATE TABLE `admin_details`(
    `name` VARCHAR(255) NOT NULL PRIMARY KEY,
    `password` VARCHAR(255) NOT NULL
);


INSERT INTO `admin_details` (`name`, `password`) VALUES ('admin', 'admin123');




CREATE TABLE `APPLICANTS_DETAILS`(
    `names` VARCHAR(255) NOT NULL PRIMARY KEY,
    `phone_number` INT NOT NULL,
    `email` INT NOT NULL,
    `kins_name` VARCHAR(255) NOT NULL,
    `nextOf_kin_s_number` INT NOT NULL
);

CREATE TABLE `enquiry_db`(
    `name` VARCHAR(255) NOT NULL PRIMARY KEY,
    `department` VARCHAR(255) NOT NULL,
    `primary_phone` INT NOT NULL,
    `primary_email` VARCHAR(255) NOT NULL,
    `request` TINYINT(1) NOT NULL,
    `learning_abt_zetech` VARCHAR(255) NOT NULL,
    `subject` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL
);