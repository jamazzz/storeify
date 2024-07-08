CREATE DATABASE IF NOT EXISTS `storeify`
USE `storeify`;

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `order` int DEFAULT NULL,
  `website_id` int DEFAULT NULL,
  `deleted` tinyint DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `website_id` (`website_id`),
  CONSTRAINT `fk_categories_website` FOREIGN KEY (`website_id`) REFERENCES `websites` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16;

CREATE TABLE IF NOT EXISTS `checkout` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `subdomain` varchar(50) DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_checkout_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_checkout_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=154;

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  `attempts` int NOT NULL DEFAULT '5',
  `deleted` tinyint DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3;

CREATE TABLE IF NOT EXISTS `members` (
  `id` int NOT NULL AUTO_INCREMENT,
  `memberid` int NOT NULL,
  `websiteid` int NOT NULL,
  `added_date` datetime NOT NULL,
  `deleted` tinyint DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_members_member` FOREIGN KEY (`memberid`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_members_website` FOREIGN KEY (`websiteid`) REFERENCES `websites` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21;

CREATE TABLE IF NOT EXISTS `owned_products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_owned_products_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_owned_products_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36;

CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` int NOT NULL,
  `description` varchar(4096) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `order` int DEFAULT NULL,
  `deleted` tinyint DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`) USING BTREE,
  CONSTRAINT `fk_products_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50;

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `payer_id` varchar(50) DEFAULT NULL,
  `payer_name` varchar(50) DEFAULT NULL,
  `payer_email` varchar(50) DEFAULT NULL,
  `payer_country` varchar(20) DEFAULT NULL,
  `merchant_id` varchar(255) DEFAULT NULL,
  `merchant_email` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `paid_amount` decimal(10,2) NOT NULL,
  `currency_type` varchar(10) NOT NULL,
  `payment_source` varchar(50) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `store` varchar(50) DEFAULT NULL,
  `user` int DEFAULT NULL,
  `state` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_transactions_user` FOREIGN KEY (`user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `permission_level` int NOT NULL,
  `creation_date` datetime NOT NULL,
  `attempts` int NOT NULL DEFAULT '5',
  `deleted` tinyint DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_level` (`permission_level`)
) ENGINE=InnoDB AUTO_INCREMENT=9;

CREATE TABLE IF NOT EXISTS `users_ids` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `nif` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `birth_date` datetime DEFAULT NULL,
  `gender` tinyint DEFAULT NULL,
  `nationality` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `deleted` tinyint DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `fk_users_ids_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9;

CREATE TABLE IF NOT EXISTS `websites` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `subdomain` varchar(255) NOT NULL,
  `owner` int NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `home_info_html` varchar(4096) DEFAULT NULL,
  `home_info_md` varchar(4096) DEFAULT NULL,
  `deleted` tinyint DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `dark_color` varchar(50) DEFAULT NULL,
  `light_color` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_websites_owner` FOREIGN KEY (`owner`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21;
