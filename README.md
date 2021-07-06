# Foodsmart Inc. Project: FoodStarr
### Overview
> You have been contracted to build a simple recipe website; that runs in a linux environment by 
> Foodsmart inc. Foodsmart inc are the leading supplier of food safety awareness products and
> materials, their focus for this website is to provide a social platform for recipe sharing and
> user engaging content.

### Website Requirements;
- Support a number of recipes (these can be mocks or dummy data).
- Contain a rating system for users to rate the recipe.
- Be built using modern production-grade code with modern production ready frameworks in a language of your choice.
- Use GIT software version control.

### Delivery Requirements;
- Use Docker to serve the application (lnmp/lamp).
- Must have adequate documentation for other developers down the line should the client hire
  an inhouse development team.


CREATE TABLE `recipe`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(255) NULL DEFAULT NULL,
  `users_password` VARCHAR(255) NULL,
  `users_password` VARCHAR(255) NULL,
  `created_by` VARCHAR(45) NULL,
  `created_date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `modifed_by` VARCHAR(45) NULL,
  `modified_date` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));
INSERT INTO `recipe`.`users` (`user_name`, `users_email`, `users_password`, `created_by`) VALUES ('End User', 'enduser@gmail.com', 'enduser@123', '1');

CREATE TABLE `recipe`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categories_name` VARCHAR(255) NULL,
  `created_by` VARCHAR(25) NULL,
  `created_date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` VARCHAR(45) NULL,
  `modified_date` DATETIME NULL,
  PRIMARY KEY (`id`));


CREATE TABLE `recipe`.`meals` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `photo` VARCHAR(45) NULL,
  `category` VARCHAR(45) NULL,
  `country` VARCHAR(45) NULL,
  `link` VARCHAR(45) NULL,
  `instruction` VARCHAR(45) NULL,
  `ingredients` VARCHAR(45) NULL,
  `amount` VARCHAR(45) NULL,
  `unit` VARCHAR(45) NULL,
  `created_by` VARCHAR(45) NULL,
  `created_date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` VARCHAR(45) NULL,
  `modified_date` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));


ALTER TABLE `recipe`.`meals` 
CHANGE COLUMN `name` `meals_name` VARCHAR(255) NULL DEFAULT NULL ,
CHANGE COLUMN `photo` `meals_photo` VARCHAR(45) NULL DEFAULT NULL ,
CHANGE COLUMN `category` `meals_categoryid` VARCHAR(45) NULL DEFAULT NULL ,
CHANGE COLUMN `country` `meals_countryid` VARCHAR(45) NULL DEFAULT NULL ,
CHANGE COLUMN `link` `meals_youtubelink` VARCHAR(45) NULL DEFAULT NULL ,
CHANGE COLUMN `instruction` `meals_instruction` VARCHAR(45) NULL DEFAULT NULL ,
CHANGE COLUMN `ingredients` `meals_ingredients` VARCHAR(45) NULL DEFAULT NULL ,
CHANGE COLUMN `modified_date` `modified_date` DATETIME NULL DEFAULT NULL ;


CREATE TABLE `recipe`.`countries` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `countries_name` VARCHAR(45) NULL,
  `countries_photo` VARCHAR(45) NULL,
  `created_by` VARCHAR(45) NULL,
  `created_date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` VARCHAR(45) NULL,
  `modified_date` DATETIME NULL,
  PRIMARY KEY (`id`));



CREATE TABLE `recipe`.`ingredients` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ingredients_name` VARCHAR(45) NULL,
  `ingredients_photo` VARCHAR(45) NULL,
  `created_by` VARCHAR(45) NULL,
  `created_date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` VARCHAR(45) NULL,
  `modified_date` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));


ALTER TABLE `recipe`.`countries` 
CHANGE COLUMN `id` `countries_id` INT NOT NULL AUTO_INCREMENT ;


ALTER TABLE `recipe`.`ingredients` 
CHANGE COLUMN `id` `ingredients_id` INT NOT NULL AUTO_INCREMENT ,
CHANGE COLUMN `modified_date` `modified_date` DATETIME NULL DEFAULT NULL ;


ALTER TABLE `recipe`.`categories` 
ADD COLUMN `categories_photo` VARCHAR(45) NULL AFTER `modified_date`;


ALTER TABLE `recipe`.`categories` 
CHANGE COLUMN `categories_photo` `categories_photo` VARCHAR(255) NULL DEFAULT NULL ,
ADD COLUMN `categories_description` LONGTEXT NULL AFTER `categories_photo`;


ALTER TABLE `recipe`.`categories` 
CHANGE COLUMN `id` `categories_id` INT NOT NULL AUTO_INCREMENT ;

ALTER TABLE `recipe`.`meals` 
CHANGE COLUMN `id` `meals_id` INT NOT NULL AUTO_INCREMENT ;

ALTER TABLE `recipe`.`meals` 
CHANGE COLUMN `meals_instruction` `meals_instruction` LONGTEXT NULL DEFAULT NULL ,
CHANGE COLUMN `meals_ingredients` `meals_ingredients` LONGTEXT NULL DEFAULT NULL ;

ALTER TABLE `recipe`.`users` 
ADD COLUMN `user_type` INT NULL COMMENT '1- Admin\n2 - User' AFTER `modified_date`;


ALTER TABLE `recipe`.`users` 
CHANGE COLUMN `user_type` `user_type` INT NULL DEFAULT NULL COMMENT '1- Admin\n2 - User' AFTER `users_password`;
ALTER TABLE `recipe`.`users` 
CHANGE COLUMN `user_type` `users_type` INT NULL DEFAULT NULL COMMENT '1- Admin\n2 - User' ;


