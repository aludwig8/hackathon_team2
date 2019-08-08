
CREATE TABLE `roles`
(
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `categories`
(
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `users`
(
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) UNIQUE NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int NOT NULL,

   FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
);


CREATE TABLE `products`
(
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `creator_id` int,
  `category_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255),
  `profile_picture` varchar(255),
  `stock` int NOT NULL,
  `status` boolean,
  `price` float NOT NULL,
  `created_at` datetime,

FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`),
FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
);

CREATE TABLE `orders`
(
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `created_at` datetime,

FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
);


INSERT INTO roles (name) VALUES ('admin'),('simple');

INSERT INTO categories (name) VALUES ('printers'),('laptops'),('computers');

INSERT INTO users (`id`, `full_name`, `email`, `password`, `role_id`) VALUES ('1', 'admin', 'admin@gmail.com', '$2y$10$yHXmTcJ8EzIemdBOnpt3neL2MYjOvXsO3limriUgXGg6BQIgyiGRa', '2');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('1', '1', '3', 'The Perfect PC, A Real Classic PC\n', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/1.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('2', '1', '3', 'The Perfect PC, A Real Classic PC\n', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/bildschirm2.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('3', '1', '3', 'The Perfect PC, A Real Classic PC\n', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/bildschirm2.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('4', '1', '3', 'The Perfect PC, A Real Classic PC\n', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/bildschirm2.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('5', '1', '3', 'The Perfect PC, A Real Classic PC\n', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/bildschirm2.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('6', '1', '3', 'The Perfect PC, A Real Classic PC\n', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/bildschirm2.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('7', '1', '3', 'The Perfect PC, A Real Classic PC\n', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/bildschirm2.jpg', '100', '0', '100');


INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('8', '1', '3', 'The Perfect PC, A Real Classic PC\n', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/bildschirm2.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('9', '1', '3', 'The Perfect PC, A Real Classic PC\n', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/bildschirm2.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('10', '1', '3', 'The Perfect PC, A Real Classic PC\n', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/bildschirm2.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('11', '1', '1', 'All I Need Is a Printer
', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/drucker1.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('12', '1', '1', 'All I Need Is a Printer
', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/drucker1.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('13', '1', '1', 'All I Need Is a Printer
', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/drucker1.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('14', '1', '1', 'All I Need Is a Printer
', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/drucker1.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('15', '1', '1', 'All I Need Is a Printer
', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/drucker1.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('16', '1', '1', 'All I Need Is a Printer
', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/drucker1.jpg', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('17', '1', '2', 'All I Need Is a Laptop
', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/laptop3.png', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('18', '1', '2', 'All I Need Is a Laptop
', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/laptop3.png', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('19', '1', '2', 'All I Need Is a Laptop
', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/laptop3.png', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('20', '1', '2', 'All I Need Is a Laptop
', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/laptop3.png', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('21', '1', '2', 'All I Need Is a Laptop
', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/laptop3.png', '100', '0', '100');

INSERT INTO `products` (`id`, `creator_id`, `category_id`, `name`, `description`, `profile_picture`, `stock`, `status`, `price`) VALUES ('22', '1', '2', 'All I Need Is a Laptop
', 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.\n\n', 'images/laptop3.png', '100', '0', '100');













