# mini-tchat
Vous allez créer un mini chat dont les spécifications sont les suivantes :
● Le chat est une application qui contient une seule page, avec une grande fenêtre
qui contient les messages de tout le monde, et en dessous une barre horizontale
contenant le formulaire d'envoi d'un nouveau message
● Il y a également une fenêtre verticale à droite qui affiche la liste des utilisateurs
● Chaque pseudo est unique. Cela signifie que je peux poster plusieurs messages
avec le même pseudo, mais en base de données, il ne doit exister qu'un seul
utilisateur par pseudo.
Vous devez donc vérifier si le pseudo existe déjà ou pas à chaque publication de
message, pour ne pas créer de doublon.
● Tous les messages doivent être enregistrés avec :
○ l'id de l'utilisateur qui a posté le message
○ la date complète avec secondes
○ l'adresse IP
● Tous les messages affichés sont préfixés de la date (avec secondes).
● En tant qu'utilisateur, je peux écrire un message dans le chat en saisissant
simplement mon pseudo et mon message
● En tant qu'utilisateur, je vois les messages de tout le monde.