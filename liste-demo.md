# mettre en place deployer
deplacer le phar dans /usr/local/bin/dep + chmod +x

# dep init
nettoyer le deploy.php
montrer hosts.yml

# ouvrir le site 

# verbose
dep deploy prod -vvv

## Analyse des etapes

# Exemple modification
modifier app/Resources/views/default/index.html.twig
git commit
dep deploy prod

# Exemple modification avec tag git
modifier app/Resources/views/default/index.html.twig
commit
modifier app/Resources/views/default/index.html.twig (bis)
commit
git tag -a v0.1 -m "version 0.1" numCommit
git push origin v0.1
dep deploy prod --tag=v0.1

# Rollback
dep rollback prod
