# Etna Movies
etna_movies est une interface permettant la gestion d'un commerce de location de films. Differentes fonctions sont accessibles afin de gérer les loueurs ainsi que les films. Toutes les commandes sont sous la forme suivante:
```
etna_movies.php help|command [subhelp|subcomand [...]]
```
## Liste des commandes de gestion des loueurs
Voici la liste des commandes de gestion des loueurs disponibles, et leur utilisation:
  ### add_student
  La commande add_student permet d'ajouter un loueur dans la base de donnée, en fontion de son login.
  ```
  etna_movies.php add_student login_n
  ```
  ### del_student
  La commande del_student permet de supprimer un loueur dans la base de donnée, en fontion de son login.
  ```
  etna_movies.php del_student login_n
  ```
  ### update_student
  La commande update_student permet de mettre a jour les données d'un loueur dans la base de donnée, en fontion de son login.
  ```
  etna_movies.php update_student login_n
  ```
  ### show_student
  La commande show_student affiche tous les loueurs de la base de	données. Si login_n est précisé, seul le loueur correspondant à ce login est affiché.
  ```
  etna_movies.php show_student login_n
  ```
## Liste des commandes de gestion des films
Voici la liste des commandes de gestion des films disponibles, et leur utilisation:
  ### movies_storing
  La commande movies_storing charge les données contenues dans le fichier movies.csv si celui-ci est existant et lisible, et affiche le nombre de films insérés dans la base de donnée.
  ```
  etna_movies.php movies_storing
  ```
  ### show_movies
  La commande show_movies sert a afficher la liste des films chargés en mémoire. Plusieurs sous-commandes sont disponibles. Par défaut, l'affichage se fait dans l'ordre alphabétique.
  ```
  etna_movies.php show_movies [subcommand]
  ```
  Voici la liste des sous-commandes disponibles:
    #### desc
    Affiche les resultats dans l'ordre alphabétique descendant.
    ```
    etna_movies.php show_movies desc
    ```
    #### genre
    Affiche les resultats en filtrant selon UN genre.
    ```
    etna_movies.php show_movies genre action
    ```
    #### year
    Affiche les resultats en filtrant selon l'année de sortie.
    ```
    etna_movies.php show_movies year 2008
    ```
    #### rate
    Affiche les resultats en filtrant selon la note attribuée.
    ```
    etna_movies.php show_movies rate 7
    ```
## Liste des commandes de gestion des locations
Voici la liste des commandes de gestion des locations disponibles, et leur utilisation:
  ### rent_movie
  La commande rent_movie tente de stocker la location d'un film par un loueur en base de donnée.
  ```
  etna_movies.php rent_movie login_n imdb_code
  ```
  ### return_movie
  La commande return_movie tente de stocker le retour d'un film précédement emprunté par un loueur en base de donnée.
  ```
  etna_movies.php return_movie login imdb_code
  ```
  ### show_rented_movies
  La commande show_rented_movies permet d'afficher tous les films actuellement en location.
  ```
  etna_movies.php show_rented_movies
  ```
