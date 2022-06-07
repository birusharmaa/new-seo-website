ALTER TABLE `seo_slider` ADD `heading_color` VARCHAR(50) NULL DEFAULT '#000000' AFTER `slider_image`;
ALTER TABLE `seo_service` ADD `menu_link` VARCHAR(256) NOT NULL AFTER `menu_id`;
ALTER TABLE `seo_products` ADD `menu_link` VARCHAR(100) NOT NULL AFTER `product_name`;
ALTER TABLE `seo_post_section` ADD `post_image` VARCHAR(256) NULL AFTER `pages_id`;