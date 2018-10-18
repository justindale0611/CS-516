use heroku_b0950797e204108;

CREATE TABLE users(
	id int PRIMARY KEY,
    username VARCHAR(130) NOT NULL,
    password VARCHAR (65) NOT NULL
);

CREATE TABLE wrestlers(
	firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR (30) NOT NULL,
    phone	VARCHAR (9) NOT NULL,
    email VARCHAR (256) NOT NULL
);

CREATE TABLE Parents(
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR (30) NOT NULL,
    wrestlersname VARCHAR (60) NOT NULL,
    phone	VARCHAR (9) NOT NULL,
    email VARCHAR (256) NOT NULL
);

