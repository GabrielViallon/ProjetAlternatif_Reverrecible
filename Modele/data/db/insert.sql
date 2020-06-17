-- ADMINS - Mot de passe : admin
INSERT INTO user VALUES ('stephanie@mail.com','Dupont','Stephanie','$1$LMloqy6s$dRv111vrfiBO6r6uPDjUU0',1,'2019-06-16');
INSERT INTO user VALUES ('naim@mail.com','Roussel','Naim','$1$LMloqy6s$dRv111vrfiBO6r6uPDjUU0',1,'2018-06-16');

-- MEMBRES - Mot de passe : motdepasse
INSERT INTO user VALUES ('florentpeyrin@mail.com','Peyrin','Florent','$1$6X.tg6O9$HXCzcroQaQahUhonJ7ctG0',0,'2020-01-22');
INSERT INTO user VALUES ('gabrielviallon@mail.com','Viallon','Gabriel','$1$6X.tg6O9$HXCzcroQaQahUhonJ7ctG0',0,'2020-01-24');
INSERT INTO user VALUES ('panetierjules@mail.com','Panetier','Jules','$1$6X.tg6O9$HXCzcroQaQahUhonJ7ctG0',0,'2020-06-16');
INSERT INTO user VALUES ('yvesforest@mail.com','Forest','Yves','$1$6X.tg6O9$HXCzcroQaQahUhonJ7ctG0',0,'2020-04-12');


-- EVENEMENTS
INSERT INTO evenement VALUES ('Défi ramène ta bouteille !', '2020-09-16', 'Ramenez vos grandes bouteilles en verre de 75 cl / 1l dans un des points de collecte partenaires ou sur le stand REVERRECIBLE du marché de noël équitable. Pour chaque bouteille ramenée, on vous tamponne une carte jeu.
Dés que la carte jeu est pleine vous gagnez un lot! Récupérez vos lots sur le stand de REVERRECIBLE sur le marché de Noël équitable, square du docteur Martin.', 'Naim Roussel');
INSERT INTO evenement VALUES ('Soirée de remerciements', '2019-04-03', 'L''ensemble de l''équipe REVERRECIBLE vous convie à une soirée festive pour se réunir et partager un moment avec vous.', 'Stephanie Dupont');

-- DEMANDES DE POINTS
INSERT INTO demandePoint VALUES ('Ferme de Léon','7 Rue de la Paix DIJON', 'Bouteilles en verre','Consigne de toutes marques','panetierjules@mail.com');
INSERT INTO demandePoint VALUES ('Chez Gérard','3 Avenue des Roses LIMOGES', 'Bocaux','Restaurant artisanal','gabrielviallon@mail.com');
INSERT INTO demandePoint VALUES ('Ferme de la Lune','2 Chemin de la Montagne MONTELIMAR', 'Bouteilles recyclées','Consigne de bouteilles recyclées','florentpeyrin@mail.com');
