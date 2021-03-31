drop table if exists exemplaire;
drop table if exists oeuvre;
drop table if exists auteur;
drop table if exists adherent;

create table if not exists adherent(
    id int not null auto_increment,
    nom varchar(50),
    adresse varchar(50),
    date_paiement date,
    primary key (id)
);

create table if not exists auteur(
    id int not null auto_increment,
    nom varchar(50),
    prenom varchar(50)
    primary key (id)
);

create table if not exists oeuvre(
    id int not null auto_increment;
    titre varchar(50),
    date_parution date,
    prix int,
    auteur_id int,
    primary key (id),
    constraint fk_oeuvre_auteur
        foreign key (auteur_id)
        references auteur(id)
);

create table if not exists exemplaire(
    id int not null auto_increment,
    etat 
)