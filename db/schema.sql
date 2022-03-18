CREATE TABLE cats (
    id INT  UNSIGNED  NOT null AUTO_INCREMENT ,
    name VARCHAR (255)NOT NULL ,
    created_at DATETIME NOT NULL DEFAULT NOW(),
    PRIMARY KEY (id)
);
CREATE TABLE products(
    id INT  UNSIGNED  NOT  NULL AUTO_INCREMENT ,
    name VARCHAR (255) NOT  NULL ,
    `desc`TEXT NOT NULL ,
    price DECIMAL (8,2) NOT NULL ,
    pieces_no SMALLINT NOT null,
    img VARCHAR (255)NOT NULL ,
    cat_id INT  UNSIGNED  ,
    created_at DATETIME NOT null DEFAULT  NOW(),
    PRIMARY KEY (id),
    FOREIGN KEY (cat_id) REFERENCES cats(id)on delete set null

);
CREATE TABLE orders (
id int UNSIGNED not NULL AUTO_INCREMENT ,
name VARCHAR(255) NOT NULL,
email VARCHAR (255),
phone VARCHAR (255) NOT null,
address VARCHAR  (255),
status enum('pending','approved','canceled')NOT NULL DEFAULT 'pending',
Created_at DATETIME NOT null default now(),

PRIMARY  KEY (id)
);

CREATE TABLE order_details(
    id int UNSIGNED not NULL AUTO_INCREMENT,
    order_id INT  UNSIGNED  ,
    product_id INT  UNSIGNED  ,
    qty INT NOT NULL ,
    PRIMARY KEY (id), 
    FOREIGN KEY (order_id)REFERENCES orders(id)on delete set null,
    FOREIGN KEY (product_id) REFERENCES products(id)on delete set null
);
CREATE TABLE admins(
id int UNSIGNED not NULL AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
email VARCHAR (255) NOT null,
`password` VARCHAR (255) NOT null,
is_super enum('yes','no') NOT null DEFAULT 'no',
Created_at DATETIME NOT null default now(),
PRIMARY KEY (id)

);