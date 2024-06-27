# Transcription d'une Requête SQL en DQL avec Doctrine dans Symfony

## Objectif

Transcrire la requête SQL suivante en DQL en utilisant les entités `Product` et `Category` avec une relation Many-to-One où `Product` a une propriété `category`.

```sql
SELECT p.id, p.name, c.name as category_name
FROM products p
INNER JOIN categories c ON p.category_id = c.id
WHERE c.name = 'Electronics';
