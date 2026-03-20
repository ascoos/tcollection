# ASCOOS OS – TCollection  
Μια ελαφριά, object‑only Deep Core κλάση συλλογής για το ASCOOS Web Operating System.

![Ascoos](https://dl.ascoos.com/images/ascoos.png)

---

## Επισκόπηση

Η `TCollection` είναι **Deep Core** κλάση του ASCOOS OS Kernel.  
Παρέχει μια απλή, προβλέψιμη, μη‑chainable συλλογή που αποθηκεύει **μόνο αντικείμενα** (όχι arrays, όχι scalars).

Σχεδιασμένη για χρήση στον πυρήνα και για προγραμματιστές που χρειάζονται αυστηρές, object‑based συλλογές με προαιρετική επιβολή τύπου.

Υλοποιεί:

- ArrayAccess  
- Countable  
- IteratorAggregate  
- JsonSerializable  

---

## Χαρακτηριστικά

- ✔ Αποθηκεύει **μόνο αντικείμενα**  
- ✔ Προαιρετική αυστηρή επιβολή τύπου (`instanceof`)  
- ✔ Array‑like πρόσβαση  
- ✔ Φιλτράρισμα, mapping, grouping  
- ✔ diff() & intersect()  
- ✔ JSON serialization  
- ✔ Deep Core Kernel class (πάντα φορτωμένη)  
- ✔ Πλήρης τεκμηρίωση με DoBu  

Για χειρισμό πινάκων/data χρησιμοποιήστε την **TArrayHandler**.

---

## Namespace

```php
use Ascoos\OS\Kernel\Core\Collections\TCollection;
```

---

## Βασικό Παράδειγμα

```php
$users = new TCollection();

$user = new stdClass();
$user->name = 'Γιάννης';

$users->add($user);

echo $users->count(); // 1
```

---

## Τυποποιημένες Συλλογές (μέσω TCollector)

```php
use Ascoos\OS\Kernel\Core\Collections\TCollector;

TCollector::register('user', App\Models\User::class);

$users = TCollector::create('user');

$users->add(new User()); // OK
```

---

## Τεκμηρίωση

Η πλήρης τεκμηρίωση (μέθοδοι, παράμετροι, παραδείγματα, DoBu) βρίσκεται στην επίσημη ιστοσελίδα του ASCOOS OS.

---

## Άδεια Χρήσης

AGL (Ascoos General License)

---

## Συγγραφέας

**Δρογκίδης Χρήστος**  
Δημιουργός του ASCOOS OS  
https://www.ascoos.com