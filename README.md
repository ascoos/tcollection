# ASCOOS OS – TCollection  
A lightweight, object‑only Deep Core collection class for the ASCOOS Web Operating System.

![Ascoos](https://dl.ascoos.com/images/ascoos.png)

---

## Overview

`TCollection` is a **Deep Core** class of the ASCOOS OS Kernel.  
It provides a simple, predictable, non‑chainable collection structure that stores **only objects** (not arrays, not scalars).

It is designed for internal Kernel usage and for developers who need strict, object‑based collections with optional type enforcement.

Implements:

- ArrayAccess  
- Countable  
- IteratorAggregate  
- JsonSerializable  

---

## Features

- ✔ Stores **only objects**  
- ✔ Optional strict type enforcement (`instanceof`)  
- ✔ Array‑like access  
- ✔ Filtering, mapping, grouping  
- ✔ diff() & intersect()  
- ✔ JSON serialization  
- ✔ Deep Core Kernel class (always loaded)  
- ✔ Fully documented with DoBu  

For array/data manipulation, use **TArrayHandler** instead.

---

## Namespace

```php
use Ascoos\OS\Kernel\Core\Collections\TCollection;
```

---

## Basic Example

```php
$users = new TCollection();

$user = new stdClass();
$user->name = 'John';

$users->add($user);

echo $users->count(); // 1
```

---

## Typed Collections (via TCollector)

```php
use Ascoos\OS\Kernel\Core\Collections\TCollector;

TCollector::register('user', App\Models\User::class);

$users = TCollector::create('user');

$users->add(new User()); // OK
```

---

## Documentation

Full documentation (methods, parameters, examples, DoBu blocks) is available on the official ASCOOS OS website.

---

## License

AGL (Ascoos General License)

---

## Author

**Drogidis Christos**  
Creator of ASCOOS OS  
https://www.ascoos.com