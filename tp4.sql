drop table if exists EMPRUNT;
drop table if exists EXEMPLAIRE;
drop table if exists OEUVRE;
drop table if exists AUTEUR;
drop table if exists ADHERENT;

create table if not exists ADHERENT (
    id int auto_increment
    , nom varchar(255)
    , adresse varchar(255)
    , date_paiement date
    , primary key (id)
);

create table if not exists AUTEUR (
    id int auto_increment
    , nom varchar(255)
    , prenom varchar(255)
    , primary key (id)
);

create table if not exists OEUVRE (
    id int auto_increment
    , titre varchar(255)
    , date_parution date
    , photo varchar(255)
    , AUTEUR_id int
    , primary key (id)
    , constraint fk_oeuvre_auteur foreign key (auteur_id) references AUTEUR(id)
);

create table if not exists EXEMPLAIRE (
    id int auto_increment
    , etat varchar(255)
    , date_achat date
    , prix numeric
    , oeuvre_id int
    , primary key (id)
    , constraint fk_exemplaire_oeuvre foreign key (oeuvre_id) references OEUVRE(id)
);

create table if not exists EMPRUNT (
    adherent_id int
    , exemplaire_id int
    , date_emprunt date
    , date_retour date
    , primary key (adherent_id, exemplaire_id, date_emprunt)
    , constraint fk_emprunt_adherent foreign key (adherent_id) references ADHERENT(id)
    , constraint fk_emprunt_exemplaire foreign key (exemplaire_id) references EXEMPLAIRE(id)
);

LOAD DATA LOCAL INFILE 'ADHERENT.csv' INTO TABLE ADHERENT FIELDS TERMINATED BY ',';
LOAD DATA LOCAL INFILE 'AUTEUR.csv' INTO TABLE AUTEUR FIELDS TERMINATED BY ',';
LOAD DATA LOCAL INFILE 'OEUVRE.csv' INTO TABLE OEUVRE FIELDS TERMINATED BY ',';
LOAD DATA LOCAL INFILE 'EXEMPLAIRE.csv' INTO TABLE EXEMPLAIRE FIELDS TERMINATED BY ',';
LOAD DATA LOCAL INFILE 'EMPRUNT.csv' INTO TABLE EMPRUNT FIELDS TERMINATED BY ',';

update EMPRUNT set date_retour = null
where cast(date_retour as char(10))="0000-00-00";

update OEUVRE set date_parution = null
where cast(date_parution as char(10))="0000-00-00";

select * from ADHERENT;
select * from AUTEUR;
select * from OEUVRE;
select * from EXEMPLAIRE;
select * from EMPRUNT;