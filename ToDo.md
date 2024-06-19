# To Do list

## Travail a faire 1

- [x] Creation de base de donnee et des tables , donnees de test (30 min)
  - [x] Produit (idProduit,designation , prixUnitaire , quantite , enStock )
  - [x]  caisse (idCaisse , numero , montant)
  - [x]  achats (idClient,idCaisse,idProduit,prixUnitaire,quantite,montant )
  - [x] Donnees de test
    - [x] 5 produits
    - [x] 2 caisses
- [x] Initialiser Codeigniter (5 min)
- [X] Cree le template (25 min)

## Travail a faire 2

- [X] Ecran d'accueil pour choisir l numero de caisse ( 20 min)
  - [X] formuliare avec un select
  - [X] recuperer la liste des caisses
  - [ ] validation => redirection vers saisie d'achat
  - [ ] afficher numero de caisse et montant de caisse

## Travail a faire 3

( 45 min + 60 min)

- [X] Page d saisie de caisse
  - [X] formulaire d'achat
    - [X] select de produit
    - [X] quantite de produit
    - [ ] validation => ajouter au liste des achats
    - [ ] recuperer la liste des produits
  - [ ] Liste des achats en cours
    - [X] tableau (produit,prixu,qte,montant)
    - [ ] total des achats

## Travail a faire 4

- [X] login avant choix de la caisse
  - [x] table utilisateur (login,motdepasse,nom)
  - [x] authentification
  - [x] formulaire de connexion
- [ ] Cloturer achats
  - [ ] enregistrer les achats en base
    - [ ] les produits acheter
    - [ ] le numero de caisse
    - [ ] le client
  - [ ] vider la liste locale