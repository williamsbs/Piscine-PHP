INSERT INTO ft_table (login, groupe, date_de_creation)
SELECT nom, 'other', date_naissance FROM fiche_personne WHERE LENGHT(nom) < 9  AND LIKE '%a%' ORDER BY ASC LIMIT 10;
