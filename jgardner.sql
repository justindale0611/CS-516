use heroku_b0950797e204108;

CREATE TABLE IF NOT exists users(
	id int PRIMARY KEY,
    username VARCHAR(130) NOT NULL,
    password VARCHAR (65) NOT NULL
);

CREATE TABLE IF NOT exists wrestlers(
	firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR (30) NOT NULL,
    phone	VARCHAR (9) NOT NULL,
    email VARCHAR (256) NOT NULL
);

CREATE TABLE IF NOT exists Parents(
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR (30) NOT NULL,
    wrestlersname VARCHAR (60) NOT NULL,
    phone	VARCHAR (9) NOT NULL,
    email VARCHAR (256) NOT NULL
);

INSERT INTO users (username, password)
VALUES ('justingardner', 'wrestling890');

