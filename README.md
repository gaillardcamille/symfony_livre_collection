# Informations concernant la collection

Après avoir fait 3 fois le symfony, je suis arrivée jusqu'à l'étape de la collection. Je souhaitais faire une collection par utilisateur nommé Favoris.

Sur les deux repository (ou trois j'ai perdu le compte) précédents j'arrvais, sans aucun mal, à afficher la collection, à en créé une pour un nouvel user, la modifié.
Cependant, dès que je faisais Delete sur la page de modification, mon symfony était "cassé". 

### **L'erreur était la suivante :**
User
"App\Entity\User" object not found by "Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver"

Cette erreur me bloquait donc tout possibilité de me connecté, m'a supprimé on user admin, et impossibilité de faire quoi que ce soit.
Impossibilité aussi de récupérer sur les anciens commit (qui fonctionnait très bien par ailleurs)

Vous avez donc ce repository qui est fonctionnel, sans les collections.
