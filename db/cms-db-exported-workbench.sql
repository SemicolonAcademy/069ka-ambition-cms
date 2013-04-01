SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `cms`;

-- -----------------------------------------------------
-- Table `cms`.`comments`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cms`.`comments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `user_id` INT(11) NULL DEFAULT NULL ,
  `post_id` INT(11) NOT NULL ,
  `author` VARCHAR(255) CHARACTER SET 'utf8' NULL DEFAULT NULL ,
  `author_email` VARCHAR(255) CHARACTER SET 'utf8' NULL DEFAULT NULL ,
  `author_url` VARCHAR(255) NULL DEFAULT NULL ,
  `content` TEXT NOT NULL ,
  `approved` INT(11) NOT NULL ,
  `created_at` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cms`.`gallery`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cms`.`gallery` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  `path` VARCHAR(255) NOT NULL ,
  `caption` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  `status` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cms`.`navigations`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cms`.`navigations` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `link_text` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  `url` VARCHAR(255) NOT NULL ,
  `description` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  `group_id` INT(11) NOT NULL ,
  `click_count` INT(11) NOT NULL ,
  `created_at` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cms`.`navigation_groups`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cms`.`navigation_groups` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  `slug` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cms`.`post`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cms`.`post` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `user_id` INT(11) NOT NULL ,
  `title` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  `content` TEXT CHARACTER SET 'utf8' NOT NULL ,
  `category` INT(11) NULL DEFAULT NULL ,
  `image` VARCHAR(255) NULL DEFAULT NULL ,
  `created_at` INT(11) NOT NULL ,
  `status` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cms`.`post_categories`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cms`.`post_categories` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  `slugis` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cms`.`settings`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cms`.`settings` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `site_name` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  `site_slogan` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cms`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `cms`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(255) NOT NULL ,
  `password` VARCHAR(255) NOT NULL ,
  `email` VARCHAR(255) NOT NULL ,
  `created_at` INT(11) NOT NULL ,
  `image` VARCHAR(255) NULL DEFAULT NULL ,
  `about` TEXT CHARACTER SET 'utf8' NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 73
DEFAULT CHARACTER SET = latin1;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
