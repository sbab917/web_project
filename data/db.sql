CREATE TABLE "user" (
    id SERIAL PRIMARY KEY ,
    login VARCHAR NOT NULL ,
    firstname VARCHAR NOT NULL ,
    lastname VARCHAR NOT NULL,
    mdp VARCHAR NOT NULL
);

INSERT INTO "user"(login, firstname, lastname, mdp) VALUES ('john.doe','John', 'Doe','test');
INSERT INTO "user"(login, firstname, lastname, mdp) VALUES ('yvette.angel','Yvette', 'Angel','test');
INSERT INTO "user"(login, firstname, lastname, mdp) VALUES ('amelia.waters','Amelia', 'Waters','test');
INSERT INTO "user"(login, firstname, lastname, mdp) VALUES ('manuel.holloway','Manuel', 'Holloway','test');
INSERT INTO "user"(login, firstname, lastname, mdp) VALUES ('alonzo.erickson','Alonzo', 'Erickson','test');
INSERT INTO "user"(login, firstname, lastname, mdp) VALUES ('otis.roberson','Otis', 'Roberson','test');
INSERT INTO "user"(login, firstname, lastname, mdp) VALUES ('jaime.king','Jaime', 'King','test');

/*
CREATE TABLE "favorie" (
    id_user INTEGER PRIMARY KEY ,
    id_pokemon INTEGER PRIMARY KEY
);
*/
