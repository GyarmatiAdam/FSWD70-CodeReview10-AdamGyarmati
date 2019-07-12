/*
*@author Adam Gyarmati
*/
CREATE DATABASE cr10_adam_gyarmati_biglibrary CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE publisher (
    publisher_id int NOT NULL AUTO_INCREMENT,
    publisher_name varchar(100),
    publisher_address varchar(155),
    size varchar(20),
    PRIMARY KEY (publisher_id)
);

CREATE TABLE authors (
    author_id int NOT NULL AUTO_INCREMENT,
    fk_publisher_id int NOT NULL,
    author_firstName varchar(50),
    author_lastName varchar(250),
    media VARCHAR (15),
    PRIMARY KEY (author_id),
    FOREIGN KEY (fk_publisher_id) REFERENCES publisher(publisher_id)
);

CREATE TABLE media_status (
    media_status_id int NOT NULL AUTO_INCREMENT,
    media_status_desc varchar(100),
    PRIMARY KEY (media_status_id)
);

CREATE TABLE library (
    library_id int NOT NULL AUTO_INCREMENT,
    fk_author_id int NOT NULL,
    fk_media_status_id int NOT NULL,
    title varchar(50),
    lib_image varchar(255),
    isbn_code varchar(20),
    lib_description VARCHAR (15),
    publish_date date,
    lib_type VARCHAR(50),
    PRIMARY KEY (library_id),
    FOREIGN KEY (fk_author_id) REFERENCES authors(author_id),
    FOREIGN KEY (fk_media_status_id) REFERENCES media_status(media_status_id)
);

