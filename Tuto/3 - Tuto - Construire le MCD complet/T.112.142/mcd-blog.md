# MCD complet du Blog

## Schéma

```
┌────────────────────────┐
│ VILLE                  │
├────────────────────────┤
│ id_ville               │
│ ‾‾‾‾‾‾‾‾               │
│ nom_ville              │
└────────────┬───────────┘
             │ 0,N
        ( habite )
             │ 1,1
┌────────────┴───────────┐
│ AUTEUR                 │
├────────────────────────┤
│ id_auteur              │
│ ‾‾‾‾‾‾‾‾‾              │
│ nom_auteur             │
│ prenom_auteur          │
│ email_auteur           │
└────────────┬───────────┘
             │ 0,N
        ( rédige )
             │ 1,1
┌────────────┴───────────┐
│ ARTICLE                │
├────────────────────────┤
│ id_article             │
│ ‾‾‾‾‾‾‾‾‾‾             │
│ titre_article          │
│ contenu_article        │
│ date_publication       │
│ statut_article         │
│ image_article          │
└────────────┬───────────┘
             │ 1,1
        ( regroupe )
             │ 0,N
┌────────────┴───────────┐
│ CATEGORIE              │
├────────────────────────┤
│ id_categorie           │
│ ‾‾‾‾‾‾‾‾‾‾‾‾           │
│ nom_categorie          │
└────────────────────────┘
```