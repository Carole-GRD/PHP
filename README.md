# PHP

Start server : php -S localhost:8000

 ATTENTION :
 
 ## Si l'index.php se trouve au niveau du dossier PHP

 -> lancer la commande "php -S localhost:8000" au niveau de 
        "PS C:\Users\gerar\OneDrive\2022 Documents\BeCode\PHP>"

 -> dans le navigateur : http://localhost:8000  


 ## Si l'index.php se trouve au niveau du dossier PHP/phpFundamentals

 -> lancer la commande "php -S localhost:8000" au niveau de 
        "PS C:\Users\gerar\OneDrive\2022 Documents\BeCode\PHP\phpFundamentals>"

 -> dans le navigateur : http://localhost:8000/phpFundamentals
  

 ## Si l'index.php se trouve au niveau du dossier PHP/phpFundamentals/variable

 -> lancer la commande "php -S localhost:8000" au niveau de 
        "PS C:\Users\gerar\OneDrive\2022 Documents\BeCode\PHP\phpFundamentals\variable>"

 -> dans le navigateur : http://localhost:8000/phpFundamentals/variale


# Afficher les erreurs dans la console

[php-error-logging](https://www.cloudways.com/blog/php-error-logging/#enable-errorlog)

```
ini_set('display_errors', 1);
error_reporting(E_ALL);
```
ou bien ...

```
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
```