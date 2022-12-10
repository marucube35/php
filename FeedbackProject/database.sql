-- Active: 1670656035970@@127.0.0.1@3306@phpapp

CREATE TABLE
    feedback(
        id INT PRIMARY KEY auto_increment,
        name varchar (100) NOT NULL,
        email varchar (100) NOT NULL,
        body text DEFAULT '',
        date datetime
    );

INSERT INTO
    feedback (name, email, body, date)
VALUES (
        'John Doe',
        'john@email.com',
        'I love it',
        CURRENT_TIMESTAMP ()
    ), (
        'Malifa Kia',
        'kia@email.com',
        'I like it',
        CURRENT_TIMESTAMP ()
    ), (
        'Albert Alubaz',
        'alubaz@email.com',
        'So good',
        CURRENT_TIMESTAMP ()
    );

select * from feedback;