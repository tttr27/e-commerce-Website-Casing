CREATE DATABASE IF NOT EXISTS Casing COLLATE utf8mb4_general_ci;

USE casing;

CREATE TABLE IF NOT EXISTS users (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email varchar(70) NOT NULL,
    password varchar(255) NOT NULL,
    UNIQUE KEY email(email)
);


INSERT INTO users (email, password) VALUES ('user1@gmail.com',MD5('111111'));
INSERT INTO users (email, password) VALUES ('user2@gmail.com',MD5('222222'));
INSERT INTO users (email, password) VALUES ('user3@gmail.com',MD5('333333'));

CREATE TABLE IF NOT EXISTS admins (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email varchar(70) NOT NULL,
    password varchar(255) NOT NULL,
    UNIQUE KEY email(email)
);

INSERT INTO admins (email, password) VALUES ('admin1@gmail.com',MD5('111111'));
INSERT INTO admins (email, password) VALUES ('admin2@gmail.com',MD5('222222'));
INSERT INTO admins (email, password) VALUES ('admin3@gmail.com',MD5('333333'));

CREATE TABLE IF NOT EXISTS items (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	description VARCHAR(50) NOT NULL,
	image VARCHAR(100) NOT NULL,
	price DECIMAL(10, 2) NOT NULL,
	category VARCHAR(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS cart (
	id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL, 
    item_id INT NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (item_id) REFERENCES items(id)
);

CREATE TABLE IF NOT EXISTS wishlist (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	users_id INT(6) UNSIGNED NOT NULL,
	item_id INT(6) UNSIGNED NOT NULL,
	FOREIGN KEY (users_id) REFERENCES users(id),
	FOREIGN KEY (item_id) REFERENCES items(id)
);


INSERT INTO cart (users_id, item_id, quantity) VALUES
(1, 1, 2),
(1, 3, 1),
(2, 2, 3),
(2, 4, 2);

INSERT INTO wishlist (users_id, item_id) VALUES
(1, 1),
(1, 3),
(2, 2),
(2, 4);

CREATE TABLE IF NOT EXISTS information (
    id int(11) AUTO_INCREMENT,
    name varchar(255),
    email varchar(40),
    message text,
    posted datetime,
    PRIMARY KEY(id)
);

INSERT INTO items (name, description, image, price, category) VALUES
('ABSTRACT FACE HUAWEI CASE', 'Experience hybrid technology for long-lasting clarity and drop protection. Ultra Hybrid™ bears a rigid 
back while the flexible bumper contains Air Cushion Technology® for shock-absorption.', 'images/abstractface.jpg', 15.00, 'Huawei'),
('Avocado Huawei Case', 'Experience hybrid technology for long-lasting clarity and drop protection. Ultra Hybrid™ bears a rigid 
back while the flexible bumper contains Air Cushion Technology® for shock-absorption.', 'images/avagado.jpg', 16.00, 'Huawei'),
('Baran Filou iPhone Case', 'Shining. Shimmering. Protected. Liquid Crystal Glitter streamlines a whole new dimension to your iPhone.
Its form-fitting design keeps everyday dings and scratches away.', 'images/baranfilou.jpg', 19.00, 'iPhone'),
('Product 3', 'Description for Product 3', 'images/avagado.jpg', 16.00, 'Huawei'),
('Product 3', 'Description for Product 3', 'images/avagado.jpg', 16.00, 'Huawei'),
('Product 3', 'Description for Product 3', 'images/avagado.jpg', 16.00, 'Huawei'),
('Product 3', 'Description for Product 3', 'images/avagado.jpg', 16.00, 'Huawei'),
('Product 3', 'Description for Product 3', 'images/avagado.jpg', 16.00, 'Huawei'),
('Product 3', 'Description for Product 3', 'images/avagado.jpg', 16.00, 'Huawei'),
('Product 3', 'Description for Product 3', 'images/avagado.jpg', 16.00, 'Huawei'),

('Product 4', 'Description for Product 4', 'avocado.jpg', 25.00, 'Category 2');