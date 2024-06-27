# Transcription d'une Requête SQL en DQL avec Doctrine dans Symfony

## Objectif

Transcrire la requête SQL suivante en DQL en utilisant les entités `Product` et `Category` avec une relation Many-to-One où `Product` a une propriété `category`.

```sql
SELECT p.id, p.name, c.name as category_name
FROM products p
INNER JOIN categories c ON p.category_id = c.id
WHERE c.name = 'Electronics';
```

## Solution

La transcription de cette requête SQL en DQL est la suivante :

```sql
SELECT p.id, p.name, c.name as category_name
FROM App\Entity\Product p
JOIN p.category c
WHERE c.name = :categoryName
```
## Cas Pratique 

Pour exécuter cette requête, nous utiliserons le gestionnaire d'entités de Doctrine 

```php
use Doctrine\ORM\EntityManagerInterface;

// Supposons que $entityManager est une instance de EntityManagerInterface
$query = $entityManager->createQuery(
    'SELECT p.id, p.name, c.name as category_name
     FROM App\Entity\Product p
     JOIN p.category c
     WHERE c.name = :categoryName'
)->setParameter('categoryName', 'Electronics');

$results = $query->getResult();

foreach ($results as $result) {
    echo $result['id'] . ' - ' . $result['name'] . ' - ' . $result['category_name'] . PHP_EOL;
}


