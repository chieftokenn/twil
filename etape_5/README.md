# Travailler avec ChatGPT

## Objectif

Voici un prompt demandé à Chat GPT : Écrire une fonction en `PHP` qui prend un tableau d'entiers en entrée et retourne le plus grand nombre dans ce tableau.  

Exercice : Trouvez les cas non gérés par `ChatGPT`

```php
<?php
function findLargestNumber($array) {
	$largestNumber = 0;
	foreach ($array as $num) {
		if ($num > $largestNumber) {
			$largestNumber = $num;
		}
	}
	return $largestNumber;
}

$array = array(3, 5, 2, 8, 1);
echo "Le plus grand nombre est : " . findLargestNumber($array);
?>
```

## Cas Non Gérés

### Aucun Vérification du Tableau

La fonction ne vérifie pas si `le tableau est vide ou non` et ressortira 0 dans ce cas, ce qui voudrait dire que le tableau vide contiendrais un nombre.

### Non Entiers

La fonction ne vérifie pas si `tous les éléments du tableau sont des entiers`. Si le tableau contient des éléments non entiers, la fonction peut produire des résultats inattendus.

### Nombres Négatifs

Si le tableau contient uniquement des nombres négatifs, la fonction retournera 0 `au lieu du plus grand nombre négatif`, car elle initialise $largestNumber à 0 > nbre négatifs.


