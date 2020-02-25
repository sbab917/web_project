CREATE TABLE "user" (
    id SERIAL PRIMARY KEY ,
    login VARCHAR NOT NULL ,
    mdp VARCHAR NOT NULL
);

INSERT INTO "user"(login,  mdp) VALUES ('john.doe','test');
INSERT INTO "user"(login,  mdp) VALUES ('yvette.angel','test');
INSERT INTO "user"(login,  mdp) VALUES ('amelia.waters','test');
INSERT INTO "user"(login,  mdp) VALUES ('manuel.holloway','test');
INSERT INTO "user"(login,  mdp) VALUES ('alonzo.erickson','test');
INSERT INTO "user"(login,  mdp) VALUES ('otis.roberson','test');
INSERT INTO "user"(login,  mdp) VALUES ('jaime.king','test');

/*
admin NUMERIC DEFAULT 0

INSERT INTO "user"(login, firstname, lastname, mdp,admin) VALUES ('mehdi.tahri','Mehdi', 'Tahri','test',1);

CREATE TABLE "favorie" (
    id_user INTEGER PRIMARY KEY ,
    id_pokemon INTEGER PRIMARY KEY
);
*/
