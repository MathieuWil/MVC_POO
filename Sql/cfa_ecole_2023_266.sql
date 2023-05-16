DROP databse IF EXISTS cfa_ecole_2023_266;
CREATE DATABASE cfa_ecole_2023_266;
USE cfa_ecole_2023_266;

CREATE TABLE Promotion (
    idpromotion int(3) not null auto_increment,
    designation varchar(50),
    salle varchar(50),
    diplome varchar(50),
    primary key (idpromotion)
);

CREATE TABLE etudiant (
    idetudiant int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    mdp varchar(50),
    adresse varchar(50),
    statut enum("alternant", "initial"),
    idpromotion int(3) not null,
    primary key(idetudiant),
    foreign key(idpromotion) references Promotion(idpromotion)
);

CREATE TABLE Professeur (
    idprofesseur int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    mdp varchar(50),
    diplome varchar(50),
    primary key(idprofesseur)
);

CREATE TABLE Enseignement (
    idenseignement int(3) not null auto_increment,
    matiere varchar(50),
    coef int(2),
    nbheures int(3),
    annee varchar(20),
    idpromotion int(3) not null,
    idprofesseur int(3) not null,
    primary key(idenseignement),
    foreign key (idpromotion) references Promotion(idpromotion),
    foreign key (idprofesseur) references Professeur(idprofesseur)
);