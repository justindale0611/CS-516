use heroku_b0950797e204108;
DROP TABLE IF EXISTS users;

CREATE TABLE users(usersuserswrestlers
	id int auto_increment PRIMARY KEY, 
    username VARCHAR(130) NOT NULL,
    password VARCHAR (256) NOT NULL
);
DROP TABLE IF EXISTS wrestlers;

CREATE TABLE IF NOT exists wrestlers(
	wrestlersname VARCHAR(30) NOT NULL,
    phone	VARCHAR (9) NOT NULL,
    email VARCHAR (256) NOT NULL
);
DROP TABLE IF EXISTS Parents;

CREATE TABLE IF NOT exists Parents(
    EmergencyContact VARCHAR (30) NOT NULL,
    wrestlersname VARCHAR (60) NOT NULL,
    phone	VARCHAR (9) NOT NULL,
    email VARCHAR (256) NOT NULL
);

INSERT INTO users(username, password)
VALUES ('justingardner', 'wrestling890');

