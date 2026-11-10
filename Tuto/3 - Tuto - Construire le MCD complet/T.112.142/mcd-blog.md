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

L'identifiant de chaque entité est souligné (`‾‾‾`). Les cardinalités `(min,max)` sont notées sur le trait, du côté de l'entité.

## Entités et attributs

| Entité | Identifiant (souligné) | Autres attributs |
|---|---|---|
| **VILLE** | <ins>id_ville</ins> | nom_ville |
| **AUTEUR** | <ins>id_auteur</ins> | nom_auteur, prenom_auteur, email_auteur |
| **ARTICLE** | <ins>id_article</ins> | titre_article, contenu_article, date_publication, statut_article, image_article |
| **CATEGORIE** | <ins>id_categorie</ins> | nom_categorie |

## Relations et cardinalités

| Entité A | Cardinalité A | Relation | Cardinalité B | Entité B |
|---|---|---|---|---|
| VILLE | `0,N` | habite | `1,1` | AUTEUR |
| AUTEUR | `0,N` | rédige | `1,1` | ARTICLE |
| CATEGORIE | `0,N` | regroupe | `1,1` | ARTICLE |

## Lecture dans les deux sens

- Une ville accueille zéro, un ou plusieurs auteurs. Un auteur habite dans une seule ville.
- Un auteur rédige zéro, un ou plusieurs articles. Un article est rédigé par un seul auteur.
- Une catégorie regroupe zéro, un ou plusieurs articles. Un article est classé dans une seule catégorie.

## Contrôle

La donnée calculée `duree_lecture` n'apparaît pas dans le modèle.