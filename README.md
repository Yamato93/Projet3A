Projet3A
========
##Fonctions core

###function_notification.php :
Fonctions afin d'enregistrer, et afficher les notifications
```php
function sessionize($level, $content)
```

La fonction sessionize sert à mettre en mémoire la notification à afficher. Avec le `$level` qui correspond à la couleur de la barre de notification symbolisant ainsi la nature de la notification (danger ou success) et `$content`pour le contenu.

```php
function display($msg)
```

La fonction display se place en general à la fin du header. Cela affiche le message à styliser si besoin. `$msg` = nom de la session utilisé pour les notifications.

###function_select__everything.php :
```php
function select_everything($connect, $table_name ,$order_by = null, $order = null, $limit = null, $offset = null)
```
La fonction select_everything permet de sélectionner toutes les données d'une table. Avec la connexion `$connect`en pdo, le nom de la table `$table_name`, avec un ordre spécifique `$order_by` *ASC* ou *DESC* `$order`, ainsi qu'une limite `$limit` et un offset `$offset` pour la pagination par exemple.

###function_start__session.php
```php
function my_session_start($name = "")
```
Permet de démarrer une session avec la variable `$name` qui est le nom de la session. À définir avec une constante de préférence. Et vérifie l'authenticité de la session. Via l'user agent. 

###function_validate__email.php
```php
function email_validate($mail)
```
Permet de tester l'exactitude d'une adresse e-mail.
