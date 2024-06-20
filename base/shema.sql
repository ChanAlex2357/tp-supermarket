use supermarket;

CREATE TABLE Produit (
    idProduit int primary key auto_increment,
    designation varchar(50),
    prixUnitaire decimal(10,2),
    enStock int
);

CREATE TABLE Caisse (
    idCaisse int primary key auto_increment,
    numeroCaisse int ,
    montant decimal(10,2)
);

CREATE TABLE Utilisateur (
    idClient int primary key auto_increment,
    login varchar(50) unique  not null,
    motdepasse varchar(50) not null,
    nom varchar(50)
);
