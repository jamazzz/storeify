CREATE TABLE
    users_perms (
        id INT PRIMARY KEY AUTO_INCREMENT,
        level INT NOT NULL,
        description VARCHAR(255) NOT NULL,
        creation_date DATETIME NOT NULL,
        deleted BOOLEAN DEFAULT FALSE,
        deleted_date DATETIME
    );

CREATE TABLE
    users (
        id INT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        permission_level INT NOT NULL,
        creation_date DATETIME NOT NULL,
        attempts INT NOT NULL DEFAULT 5,
        deleted BOOLEAN DEFAULT FALSE,
        deleted_date DATETIME,
        FOREIGN KEY (permission_level) REFERENCES users_perms (id)
    );

CREATE TABLE
    users_data (
        id INT PRIMARY KEY AUTO_INCREMENT,
        login DATETIME NOT NULL,
        logout DATETIME NOT NULL
    );

CREATE TABLE
    users_ids (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        nif VARCHAR(255) NOT NULL,
        address VARCHAR(255) NOT NULL,
        postal_code VARCHAR(255) NOT NULL,
        birth_date DATETIME,
        gender INT NOT NULL,
        nationality VARCHAR(255) NOT NULL,
        user_id INT NOT NULL,
        deleted BOOLEAN DEFAULT FALSE,
        deleted_date DATETIME NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users (id),
        FOREIGN KEY (gender) REFERENCES gender (id)
    );

CREATE TABLE
    gender (
        id INT PRIMARY KEY AUTO_INCREMENT,
        gender VARCHAR(255) NOT NULL,
        deleted BOOLEAN DEFAULT FALSE,
        deleted_date DATETIME NOT NULL
    );

CREATE TABLE
    products (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        section_id INT NOT NULL,
        deleted BOOLEAN DEFAULT FALSE,
        deleted_date DATETIME,
        FOREIGN KEY (section_id) REFERENCES sections (id)
    );

CREATE TABLE
    packages (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        description VARCHAR(255) NOT NULL,
        duration INT NOT NULL,
        creation_date DATETIME NOT NULL,
        deleted BOOLEAN DEFAULT FALSE,
        deleted_date DATETIME
    );

CREATE TABLE
    websites (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        owner INT NOT NULL,
        package_id INT,
        subscription_date DATETIME,
        expiration_date DATETIME,
        favicon VARCHAR(255),
        deleted BOOLEAN DEFAULT FALSE,
        deleted_date DATETIME,
        FOREIGN KEY (package_id) REFERENCES packages (id)
    );

CREATE TABLE
    members (
        id INT PRIMARY KEY AUTO_INCREMENT,
        memberid INT NOT NULL,
        websiteid INT NOT NULL,
        login BOOLEAN NOT NULL, --wip
        added_date DATETIME NOT NULL,
        deleted BOOLEAN DEFAULT FALSE,
        deleted_date DATETIME
    );

CREATE TABLE
    sections (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        number INT,
        section_type VARCHAR(255),
        website_id INT,
        deleted BOOLEAN DEFAULT FALSE,
        deleted_date DATETIME,
        FOREIGN KEY (website_id) REFERENCES websites (id)
    );

CREATE TABLE
    discount_coupons (
        id INT PRIMARY KEY AUTO_INCREMENT,
        store_name VARCHAR(255) NOT NULL,
        discount DECIMAL(5, 2) NOT NULL,
        code VARCHAR(255) NOT NULL,
        used_count INT DEFAULT 0,
        max_usage INT NOT NULL,
        creation_date DATETIME NOT NULL,
        deleted BOOLEAN DEFAULT FALSE,
        deleted_date DATETIME,
        FOREIGN KEY (store_name) REFERENCES websites (name)
    );

CREATE TABLE
    clients (
        id INT PRIMARY KEY AUTO_INCREMENT,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        creation_date DATETIME NOT NULL,
        login_attempts INT NOT NULL DEFAULT 5,
        deleted BOOLEAN DEFAULT FALSE,
        deleted_date DATETIME
    );

-- CREATE TABLE
--     shopping_carts (
--         id INT PRIMARY KEY AUTO_INCREMENT,
--         website_id INT,
--         client_id INT,
--         FOREIGN KEY (website_id) REFERENCES websites (id),
--         FOREIGN KEY (client_id) REFERENCES clients (id)
--     );