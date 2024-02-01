CREATE DATABASE IF NOT EXISTS BDDTickets;
USE BDDTickets;

CREATE TABLE IF NOT EXISTS utilisateur (
    id int not null auto_increment,
    nom varchar(10),
    prenom varchar(10),
    adresseIP varchar(15),
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

CREATE TABLE IF NOT EXISTS agencer (
    idTickets int,
    idGrav int,
    FOREIGN KEY (idGrav) REFERENCES couleur(id),
    FOREIGN KEY (idTickets) REFERENCES tickets(id)    
);

CREATE TABLE IF NOT EXISTS soumettre (
    idUser int,
    idTickets int,
    CONSTRAINT fk1 FOREIGN KEY (idUser) REFERENCES utilisateur(id),
    CONSTRAINT fk2 FOREIGN KEY (idTickets) REFERENCES tickets(id)
);

CREATE TABLE IF NOT EXISTS valider (
    idUser int,
    idTickets int,
    CONSTRAINT fk3 FOREIGN KEY (idUser) REFERENCES utilisateur(id),
    CONSTRAINT fk4 FOREIGN KEY (idTickets) REFERENCES tickets(id)
);

