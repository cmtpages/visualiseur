# La page `view.php`
Page utilisée depuis un ordinateur, après la prise de photo depuis la page `photo.php` (cf. [la documentation concernée](photo.md)).
## Principe général
On doit pouvoir afficher une photo lorsqu'elle est disponible sur le serveur (elle est alors nommée `$id.jpg` dans le répertoire `uploads/`). Lorsqu'une photo est affichée à l'écran, elle est *immédiatement* supprimée du serveur (mais elle reste évidemment affichée).

Le nom de la photo est transmis par la variable PHP `$_GET['id']` et il est tout de suite copié dans une variable locale `$id` (pour alléger les notations).

Trois cas sont alors possibles :

1. Aucune photo n'a été chargée précédemment : la variable `$_SESSION['id']` n'est pas initialisée.
2. Une photo est affichée, mais la variable `$_SESSION['id']` a changé de valeur : c'est une nouvelle session.
3. Une photo est affichée et l'identifiant `$_SESSION['id']` n'a pas changé. Cela signifie que la page a été rafraîchie avec la même session.

### Cas 1 : aucune photo chargée précédemment
On vérifie si une photo nommée `$id.jpg` existe dans le répertoire `uploads/` et le cas échéant, on l'affiche.

### Cas 2 : nouvelle session
Il y a une photo actuellement affichée, mais le numéro de session a changé (`$_SESSION['id']` a changé de valeur). Il faut mettre à jour l'affichage :

- soit une photo est disponible avec le nouvel identifiant et on l'affiche.
- soit aucune photo n'est disponible avec cet identifiant et il n'y a rien à afficher.

### Cas 3 : même session
Si l'identifiant de session n'a pas changé (la variable `$_SESSION['id']` a la même valeur qu'au précédent chargement) :

- regarder si une photo avec le nom `$id.jpg` est disponible dans `/uploads/`, si oui l'afficher ;
- si aucune photo n'est présente, garder l'affichage de la photo précédente (qui est déjà supprimée du serveur).

## Réalisation technique
### Principales variables
- `_GET[id']`, passée par URL via la page `accueil.php` (cf. [la documentation](accueil.md)), contient l'identifiant de la session courante et le nom de la photo qui sera à afficher.
- `$id = $_GET['id']` : sucre syntaxique.
- `$_SESSION['id']` : récupère la valeur de `$id` pour la garder en mémoire si la page est actualisée. Permet de savoir si la session a changé en compararant avec la valeur de `$_GET['id']`.
- `$_SESSION['base54']` : garde en mémoire le contenu de la dernière image chargée depuis la même session.
### Pseudo-code
```
$id := $_GET['id'] // Sucre syntaxique
SI $_SESSION['id'] n'existe pas
	SI uploads/$id.jpg n'existe pas
		Aucune photo à afficher
	SINON
		$_SESSION['id'] := $id
		$_SESSION['base54'] := contenu de l'image
		Supprimer uploads/$id.jpg
		Afficher l'image via $_SESSION['base54']
SINON SI($_SESSION['id'] existe et $_SESSION['id'] != $id)
	SI uploads/$id n'existe pas
		Aucune photo à afficher
	SINON
		$_SESSION['id'] := $id
		$_SESSION['base54'] := contenu de l'image
		Supprimer uploads/$id.jpg
		Afficher l'image via $_SESSION['base54']
SINON // $_SESSION['id'] existe et $_SESSION['id'] == $id
	SI uploads/$id.jpg n'existe pas // Ancienne image
		Afficher l'ancienne image via $_SESSION['base54']
	SINON // uploads/$id.jpg existe
		$_SESSION['base54'] := contenu de l'image
		Supprimer uploads/$id.jpg
		Afficher l'image via $_SESSION['base54']
```


### Gestion du cache
``` php
// Empêche la mise en cache des documents.
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

$id=uniqid("", false); // Génère l'id de la session et le nom de la photo
```

Ces lignes empêchent la mise en cache des données, pour forcer le rechargement des images en cas de session multiple. Ces lignes sont présentes sur toutes les pages du *frontend*.
