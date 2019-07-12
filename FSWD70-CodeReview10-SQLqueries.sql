/*
*@author Adam Gyarmati
*/

/*-------------------------------DB tables------------------------------------------------------*/

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
    isbn_code varchar(40),
    lib_description text (1000),
    publish_date date,
    lib_type VARCHAR(50),
    PRIMARY KEY (library_id),
    FOREIGN KEY (fk_author_id) REFERENCES authors(author_id),
    FOREIGN KEY (fk_media_status_id) REFERENCES media_status(media_status_id)
);

/*--------------------------------DB datas---------------------------------------------------------*/

INSERT INTO publisher (publisher_name, publisher_address, size)
VALUES 
('Big Book Publisher', 'Big Street 128/B', 'Big'),
('Small Book Publisher', 'Small Street 23', 'Small'),
('Rich CD Publisher', 'Rich Street 78', 'Big'),
('Poor CD Publisher', 'Poor Street 17', 'Small'),
('Amazing DVD Publisher', 'Amazing Street 111', 'Big'),
('General DVD Publisher', 'General Street 36', 'Medium');

INSERT INTO authors (fk_publisher_id, author_firstName, author_lastName, media)
VALUES 
(1 , 'Huge', 'Grant', 'Actor'),
(2 , 'Elvis', 'Pressure', 'Singer'),
(3 , 'Agatha', 'Cirsty', 'Writer'),
(4 , 'Denzel', 'Toronto', 'Actor'),
(5 , 'Eni', 'Men', 'Singer'),
(6 , 'Johnny', 'Deep', 'Actor'),
(6 , 'Lady', 'Mama', 'Singer'),
(5 , 'William', 'Skapseer', 'Writer'),
(4 , 'George', 'Elitt', 'Writer'),
(3 , 'Leonardo', 'Dicabrio', 'Actor'),
(2 , 'George', 'Orrfell', 'Writer'),
(1 , 'Mark', 'Train', 'Writer'),
(1 , 'Michael', 'Jacket', 'Singer'),
(2 , 'Stephen', 'Koenig', 'Writer'),
(3 , 'Beyonce', 'Knowledge', 'Singer'),
(4 , 'Ernst', 'Haminghighway', 'Writer');

INSERT INTO media_status (media_status_desc)
VALUES
('Available'),
('Reserved');

INSERT INTO library (fk_author_id, fk_media_status_id, title, isbn_code, lib_description, publish_date, lib_type)
VALUES
(1 ,1 , ' A.I. Artificial Intelligence', '1982-03-12-1982-03-12', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-03-12', 'DVD'),
(2 ,2 , 'Nowhere ', '1974-03-15-1974-03-15', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1974-03-15', 'CD'),
(3 ,1 , 'And Then There Were None ', '2002-03-15-2002-03-15', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1999-05-13', 'BOOK'),
(4 ,2 , 'The Abyss ', '2014-03-14-2014-03-14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2002-03-15', 'DVD'),
(5 ,2 , 'After the Gold Rush ', '2002-03-15-2002-03-15', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2014-03-14', 'CD'),
(6 ,1 , 'Adaptation.', '1999-07-14-1989-05-24', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2015-07-14', 'DVD'),
(7 ,1 , 'Transmissions From the Satellite Heart ', '1974-03-15-2015-07-14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1999-07-14', 'CD'),
(8 ,2 , 'The Catcher in the Rye ', '1999-07-14-1989-05-24', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2001-05-11', 'BOOK'),
(9 ,1 , 'Extremely Loud and Incredibly Close ', '1989-05-24-1989-05-24', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1989-05-24', 'BOOK'),
(10 ,1 , 'The Adventures of Robin Hood ', '1989-05-24-1974-03-15', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2005-03-15', 'DVD'),
(11 ,2 , 'A Thousand Splendid Suns ', '1999-07-14-1974-03-15', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1974-03-15', 'BOOK'),
(12 ,1 , 'Another Bullshit Night in Suck City ', '1999-03-16-1999-03-16', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1999-03-16', 'BOOK'),
(13 ,1 , 'Closing Time ', '1989-05-24-2015-07-14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2013-03-14', 'CD'),
(14 ,2 , 'How to Lose Friends and Alienate People ', '1982-03-13-7896-03-13', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1999-09-16', 'BOOK'),
(15 ,1 , 'Murmur ', '1989-05-24-1982-03-13', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1999-08-19', 'CD'),
(16 ,2 , 'One Hundred Years of Solitude ', '1989-05-24-4322-07-23', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-03-12', 'BOOK'),
(1 ,1 , 'Interstellar', '1982-07-23-1982-07-23', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-07-23', 'DVD'),
(2 ,1 , 'I Can Hear the Heart Beating as One ', '1999-03-16-1889-03-16', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-07-23', 'CD'),
(3 ,1 , 'Cloudy With a Chance of Meatballs ', '2005-03-15-2005-03-15', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1952-03-10', 'BOOK'),
(4 ,1 , 'Aguirre, the Wrath of God ', '1982-07-23-1952-03-10', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1986-07-14', 'DVD'),
(1 ,1 , 'The Man Without Qualities ', '1952-03-10-1952-03-10', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-03-19', 'BOOK'),
(6 ,1 , 'Airplane!', '1982-07-14-1982-03-13', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-03-18', 'DVD'),
(9 ,2 , 'Midnight in the Garden of Good and Evil ', '1982-03-13-1982-03-13', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-03-13', 'BOOK'),
(10 ,1 , 'Aliens', '1982-07-23-1982-07-14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1974-03-15', 'DVD'),
(11 ,1 , 'A Clockwork Orange ', '1982-07-14-1982-07-14', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1982-07-14', 'BOOK');