# To Do list

## Travail a faire 1

- [ ] Creation de base de donnee et des tables , donnees de test (30 min)
  - [ ] Produit (idProduit,designation , prixUnitaire , quantite , enStock )
  - [ ]  caisse (idCaisse , numero , montant)
  - [ ]  achats (idClient,idCaisse,idProduit,prixUnitaire,quantite,montant )
  - [ ] Donnees de test
    - [ ] 5 produits
    - [ ] 2 caisses
- [x] Initialiser Codeigniter (5 min)
- [ ] Cree le template (25 min)

## Travail a faire 2

- [ ] Ecran d'accueil pour choisir l numero de caisse ( 20 min)
  - [ ] formuliare avec un select
  - [ ] recuperer la liste des caisses
  - [ ] validation => redirection vers saisie d'achat
  - [ ] afficher numero de caisse et montant de caisse

## Travail a faire 3

( 45 min + 60 min)

- [ ] Page d saisie de caisse
  - [ ] formulaire d'achat
    - [ ] select de produit
    - [ ] quantite de produit
    - [ ] validation => ajouter au liste des achats
    - [ ] recuperer la liste des produits
  - [ ] Liste des achats en cours
    - [ ] tableau (produit,prixu,qte,montant)
    - [ ] total des achats

## Travail a faire 4

- [ ] login avant choix de la caisse
  - [ ] table utilisateur (login,motdepasse,nom)
  - [ ] authentification
  - [ ] formulaire de connexion
- [ ] Cloturer achats
  - [ ] enregistrer les achats en base
    - [ ] les produits acheter
    - [ ] le numero de caisse
    - [ ] le client
  - [ ] vider la liste locale
