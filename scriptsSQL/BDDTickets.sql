CREATE DATABASE IF NOT EXISTS BDDTickets;
USE BDDTickets;

CREATE TABLE IF NOT EXISTS utilisateur (
    id int not null auto_increment,
    nom varchar(10),
    prenom varchar(10),
    adresseIP varchar(15),
    SHA_PASS varchar(64),
    username varchar(25),
    adminMode boolean,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS tickets(
    id int not null auto_increment,
    motif varchar(500),
    datePublication date,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS  couleur (
    id int not null auto_increment,
    couleurHex varchar(7),
    libelle varchar(100),
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS valider (
    idAdmin int,
    idTickets int,
    CONSTRAINT fk3 FOREIGN KEY (idAdmin) REFERENCES utilisateur(id),
    CONSTRAINT fk4 FOREIGN KEY (idTickets) REFERENCES tickets(id)
);

