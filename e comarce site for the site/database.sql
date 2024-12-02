
CREATE DATABASE ecommerce;

USE ecommerce;

-- Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    balance DECIMAL(10, 2) DEFAULT 0,
    role ENUM('admin', 'customer') DEFAULT 'customer'
);

-- Products Table
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    stock INT DEFAULT 0,
    image VARCHAR(255) DEFAULT 'default.jpg'
);

-- Orders Table
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    total_price DECIMAL(10, 2) NOT NULL,
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Transactions Table
CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    type ENUM('top-up', 'spent') NOT NULL,
    transaction_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);


-- Insert Dummy Products
INSERT INTO products (name, description, price, stock, image) VALUES ('Wireless Headphones', 'Noise-cancelling over-ear headphones.', 99.99, 50, 'headphones.jpg');
INSERT INTO products (name, description, price, stock, image) VALUES ('Smartphone Stand', 'Adjustable stand for smartphones and tablets.', 14.99, 150, 'stand.jpg');
INSERT INTO products (name, description, price, stock, image) VALUES ('Gaming Mouse', 'Ergonomic mouse with customizable buttons.', 29.99, 75, 'mouse.jpg');
INSERT INTO products (name, description, price, stock, image) VALUES ('Mechanical Keyboard', 'RGB backlit mechanical keyboard.', 79.99, 30, 'keyboard.jpg');
INSERT INTO products (name, description, price, stock, image) VALUES ('Portable Charger', '10,000mAh power bank for your devices.', 25.99, 100, 'charger.jpg');
