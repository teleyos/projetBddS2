insert into auteur (id,nom,prenom)
values (NULL, 'Orwell', 'George');

set @last_id_in_auteur = LAST_INSERT_ID();

select *
from auteur
where id = @last_id_in_auteur;

update auteur
set nom = 'ORWELL', prenom = 'GEORGE'
where id = @last_id_in_auteur;

delete from auteur
where id = @last_id_in_auteur;

select * from auteur where id = @last_id_in_auteur;

select id, nom from auteur order by nom;

-- Question 1a

SELECT au.nom, au.prenom, au.id, count(oe.id) as nbrOeuvre
FROM oeuvre oe
RIGHT JOIN auteur au ON au.id=oe.auteur_id
GROUP BY au.nom, au.prenom, au.id
ORDER BY au.nom;