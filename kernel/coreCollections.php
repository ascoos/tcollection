<?php
/*
dobu {
    file:id(`core412`),name(`collections`) {
        ascoos {
            logo {`
                  __ _  ___  ___ ___   ___   ___     ___   ___
                 / _` |/  / / __/ _ \ / _ \ /  /    / _ \ /  /
                | (_| |\  \| (_| (_) | (_) |\  \   | (_) |\  \
                 \__,_|/__/ \___\___/ \___/ /__/    \___/ /__/
            `},
            name {`ASCOOS OS`},
            version {`1.0.0`},
            category {`Web OS`},
            subcategory {`Web5 / WebAI`},
            description {`A Web 5.0 and Web AI Kernel for decentralized web and IoT applications`},
            creator {`Drogidis Christos`},
            site {`https://www.ascoos.com`},
            issues {`https://issues.ascoos.com`},
            support {`support@ascoos.com`},
            license {`[Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html`},
            copyright {`Copyright (c) 2007 - 2026, AlexSoft Software.`},
        },
        project {
            package:langs {
                en {`Ascoos OS`},
                el {`Ascoos OS`}
            },
            subpackage:langs {
                en {`A simple, non-chainable collection class for managing items/objects.`},
                el {`Μια απλή, μη αλυσίδωτη κλάση συλλογής για τη διαχείριση αντικειμένων/αντικειμένων.`}
            },
            category:langs {
                en {`Deep Core`},
                el {`Βασικός Πυρήνας`}
            },
            subcategory:langs {
                en {`Collections`},
                el {`Συλλογές`}
            },
            source {`aos/kernel/coreCollections.php`},
            description:langs {
                en {`Lightweight collection that stores items in an internal array. Supports strict item type enforcement (instanceof check).`},
                el {`Ελαφριά συλλογή που αποθηκεύει αντικείμενα σε ένα εσωτερικό πίνακα. Υποστηρίζει αυστηρή επιβολή τύπου αντικειμένων (έλεγχος με instanceof).`}
            },
            fileNo {`core412`},
            version {`1.0.0`},
            build {`16732`},
            created {`2026-01-22 02:25:00`},
            updated {`2026-01-22 11:13:23`},
            author {`Christos Drogidis`},
            authorSite {`https://www.ascoos.com`},
            support {`support@ascoos.com`},
            license {`AGL (ASCOOS General License)`},
            since {`1.0.0`},
            sincePHP {`8.4.0`}
        }
    }
}
*/


/******************************************************************************
 * @startcode TCollection
 *****************************************************************************/
/*
dobu {
class:id(`tcollection`),name(`TCollection`),extends(`TObject`),implements(`ArrayAccess, Countable, IteratorAggregate, JsonSerializable`),namespace(`Ascoos\OS\Kernel\Core\Collections`),hierarchy(`TObject, TCollection`),version(`1.0.0`),build(`16732`),since(`1.0.0`),sincePHP(`8.4.0`),license(`AGL (Ascoos General License)`) {
    category:langs {
        en {`Collections`},
        el {`Συλλογές`}
    },
    intro:langs {
        en {`A simple, non-chainable collection class for managing items/objects. Implements basic array-like operations with optional type checking`},
        el {`Απλή, μη-chainable κλάση συλλογής για διαχείριση στοιχείων/αντικειμένων. Υλοποιεί βασικές λειτουργίες τύπου array με προαιρετικό έλεγχο τύπου.`}
    },
    summary:langs {
        en {`Lightweight collection that stores items in an internal array.`},
        el {`Ελαφριά συλλογή που αποθηκεύει στοιχεία σε εσωτερικό πίνακα.`}
    },
    desc:langs {
        en {`Lightweight collection that stores items in an internal array. Supports strict item type enforcement (instanceof check).
            Does NOT use TObject's $properties for items storage.`},
        el {`Ελαφριά συλλογή που αποθηκεύει στοιχεία σε εσωτερικό πίνακα. Υποστηρίζει αυστηρό έλεγχο τύπου στοιχείων (instanceof).
            ΔΕΝ χρησιμοποιεί το $properties του TObject για αποθήκευση items.`}
    },
    properties:active(`table {name,type,langs,default}`) {
        property:id(`items`),name(`$items`),access(`protected`),type(`array`),default(`[]`)langs {
            en {`Internal storage of collection items.`},
            el {` Εσωτερική αποθήκευση των στοιχείων της συλλογής.`}
        },
        property:id(`itemtype`),name(`$itemType`),access(`protected`),type(`?string`),default(`NULL`),langs {
            en {`Optional class name for type strictness`},
            el {`Προαιρετικό όνομα κλάσης για αυστηρό τύπο`}
        }
    },
    methods:active(`idx,toc`) {
        method:id(`construct`),name(`__construct`),syntax(`__construct(array $initialItems = [], ?string $itemType = null, array $properties = [])`),return(`void`),langs {
            en {`Initialize the collection`},
            el {`Αρχικοποιεί τη συλλογή`}
        },
        method:id(`add`),name(`add`),syntax(`add(mixed $item, mixed $key = null): void`),return(`void`),langs {
            en {`Add a single item to the collection`},
            el {`Προσθέτει ένα στοιχείο στη συλλογή`}
        },
        method:id(`additems`),name(`addItems`),syntax(`addItems(array $items): void`),return(`void`),langs {
            en {`Add multiple items at once`},
            el {`Προσθέτει πολλαπλά στοιχεία ταυτόχρονα`}
        },
        method:id(`avgby`),name(`avgBy`),syntax(`avgBy(string $property): ?float`),return(`?float`),langs {
            en {`Calculates the average of a numeric property across all objects`},
            el {`Υπολογίζει τον συνολικό μέσο όρο αριθμητικής ιδιότητας σε όλα τα αντικείμενα`}
        },
        method:id(`clear`),name(`clear`),syntax(`clear(): void`),return(`void`),langs {
            en {`Remove all items from the collection`},
            el {`Αφαιρεί όλα τα στοιχεία από τη συλλογή`}
        },
        method:id(`count`),name(`count`),syntax(`count(): int`),return(`int`),langs {
            en {`Returns the number of items in the collection`},
            el {`Επιστρέφει τον αριθμό των στοιχείων στη συλλογή`}
        },
        method:id(`countby`),name(`countBy`),syntax(`countBy(string $property): array`),return(`array`),langs {
            en {`Counts occurrences of each unique value for a property`},
            el {`Μετράει τις εμφανίσεις κάθε μοναδικής τιμής μιας ιδιότητας`}
        },
        method:id(`diff`),name(`diff`),syntax(`diff(TCollection $other): array`),return(`array`),langs {
            en {`Returns objects present in this collection but not in $other`},
            el {`Επιστρέφει αντικείμενα που υπάρχουν εδώ αλλά όχι στο $other`}
        },
        method:id(`each`),name(`each`),syntax(`each(callable $callback): void`),return(`void`),langs {
            en {`Executes a callback on each object (side-effect only)`},
            el {`Εκτελεί callback σε κάθε αντικείμενο (μόνο side-effect)`}
        },
        method:id(`filter`),name(`filter`),syntax(`filter(callable $callback): array`),return(`array`),langs {
            en {`Filters objects based on a callback function`},
            el {`Φιλτράρει αντικείμενα βάσει συνάρτησης callback`}
        },
        method:id(`find`),name(`find`),syntax(`find(callable $callback, mixed $default = null): mixed`),return(`mixed`),langs {
            en {`Finds the first object matching the callback`},
            el {`Βρίσκει το πρώτο αντικείμενο που ταιριάζει με το callback`}
        },
        method:id(`first`),name(`first`),syntax(`first(): mixed`),return(`mixed`),langs {
            en {`Returns the first item or null if empty`},
            el {`Επιστρέφει το πρώτο στοιχείο ή null αν είναι άδεια`}
        },
        method:id(`get`),name(`get`),syntax(`get(mixed $key, mixed $default = null): mixed`),return(`mixed`),langs {
            en {`Get item by key with optional default value`},
            el {`Επιστρέφει στοιχείο με βάση το κλειδί με προαιρετική προεπιλεγμένη τιμή`}
        },
        method:id(`getiterator`),name(`getIterator`),syntax(`getIterator(): Traversable`),return(`Traversable`),langs {
            en {`Returns an iterator for the items`},
            el {`Επιστρέφει iterator για τα στοιχεία`}
        },
        method:id(`getitems`),name(`getItems`),syntax(`getItems(): array`),return(`array`),langs {
            en {`Returns all items as array (shallow copy)`},
            el {`Επιστρέφει όλα τα στοιχεία ως πίνακα (ρηχή αντιγραφή)`}
        },
        method:id(`getitemtype`),name(`getItemType`),syntax(`getItemType(): ?string`),return(`?string`),langs {
            en {`Returns the current enforced item type (if any)`},
            el {`Επιστρέφει τον τρέχοντα επιβαλλόμενο τύπο στοιχείων (αν υπάρχει)`}
        },
        method:id(`groupby`),name(`groupBy`),syntax(`groupBy(string $property): array`),return(`array`),langs {
            en {`Groups objects by a property value`},
            el {`Ομαδοποιεί αντικείμενα βάσει τιμής ιδιότητας`}
        },
        method:id(`has`),name(`has`),syntax(`has(mixed $key): bool`),return(`bool`),langs {
            en {`Checks if a key exists in the collection`},
            el {`Ελέγχει αν υπάρχει κλειδί στη συλλογή`}
        },
        method:id(`intersect`),name(`intersect`),syntax(`intersect(TCollection $other): array`),return(`array`),langs {
            en {`Returns objects present in both collections`},
            el {`Επιστρέφει αντικείμενα που υπάρχουν και στις δύο συλλογές`}
        },
        method:id(`isempty`),name(`isEmpty`),syntax(`isEmpty(): bool`),return(`bool`),langs {
            en {`Checks if the collection has no items`},
            el {`Ελέγχει αν η συλλογή δεν έχει στοιχεία`}
        },
        method:id(`jsonSerialize`),name(`jsonSerialize`),syntax(`jsonSerialize(): array`),return(`array`),langs {
            en {`Returns the items array for JSON encoding`},
            el {`Επιστρέφει τον πίνακα στοιχείων για JSON κωδικοποίηση`}
        },
        method:id(`keyby`),name(`keyBy`),syntax(`keyBy(string $property): array`),return(`array`),langs {
            en {`Re-indexes the collection using a property as key`},
            el {`Επανα-δεικτοδοτεί τη συλλογή χρησιμοποιώντας ιδιότητα ως κλειδί`}
        },
        method:id(`keys`),name(`keys`),syntax(`keys(): array`),return(`array`),langs {
            en {`Returns all keys/indexes of the collection`},
            el {`Επιστρέφει όλα τα κλειδιά/δείκτες της συλλογής`}
        },
        method:id(`last`),name(`last`),syntax(`last(): mixed`),return(`mixed`),langs {
            en {`Returns the last item or null if empty`},
            el {`Επιστρέφει το τελευταίο στοιχείο ή null αν είναι άδεια`}
        },
        method:id(`map`),name(`map`),syntax(`map(callable $callback): array`),return(`array`),langs {
            en {`Transforms each object using a callback function`},
            el {` Μετατρέπει κάθε αντικείμενο με βάση συνάρτηση callback`}
        },
        method:id(`merge`),name(`merge`),syntax(`merge(TCollection $other): void`),return(`void`),langs {
            en {`Merges another collection into this one`},
            el {`Συγχωνεύει άλλη συλλογή σε αυτήν`}
        },
        method:id(`offsetexists`),name(`offsetExists`),syntax(`offsetExists(mixed $offset): bool`),return(`bool`),langs {
            en {`Check if offset exists (ArrayAccess)`},
            el {`Ελέγχει αν υπάρχει offset (ArrayAccess)`}
        },
        method:id(`offsetget`),name(`offsetGet`),syntax(`offsetGet(mixed $offset): mixed`),return(`mixed`),langs {
            en {`Get value at offset (ArrayAccess)`},
            el {`Επιστρέφει τιμή σε offset (ArrayAccess)`}
        },
        method:id(`offsetset`),name(`offsetSet`),syntax(`offsetSet(mixed $offset, mixed $value): void`),return(`void`),langs {
            en {`Set value at offset (ArrayAccess)`},
            el {`Ορίζει τιμή σε offset (ArrayAccess)`}
        },
        method:id(`offsetunset`),name(`offsetUnset`),syntax(`offsetUnset(mixed $offset): void`),return(`void`),langs {
            en {`Unset value at offset (ArrayAccess)`},
            el {`Αφαιρεί τιμή από offset (ArrayAccess)`}
        },
        method:id(`pluck`),name(`pluck`),syntax(`pluck(string $property): array`),return(`array`),langs {
            en {`Extracts a single property from all objects in the collection`},
            el {`Εξάγει μία συγκεκριμένη ιδιότητα από όλα τα αντικείμενα της συλλογής`}
        },
        method:id(`remove`),name(`remove`),syntax(`remove(mixed $key): void`),return(`void`),langs {
            en {`Remove item by key`},
            el {`Αφαιρεί στοιχείο με βάση το κλειδί`}
        },
        method:id(`setitemtype`),name(`setItemType`),syntax(`setItemType(?string $type): void`),return(`void`),langs {
            en {`Set or change the enforced item type`},
            el {`Ορίζει ή αλλάζει τον επιβαλλόμενο τύπο στοιχείων`}
        },
        method:id(`sortby`),name(`sortBy`),syntax(`sortBy(string $property, string $direction = 'asc'): array`),return(`array`),langs {
            en {`Sorts objects by a property value`},
            el {`Ταξινομεί αντικείμενα βάσει τιμής ιδιότητας`}
        },
        method:id(`sortbydesc`),name(`sortByDesc`),syntax(`sortByDesc(string $property): array`),return(`array`),langs {
            en {`Sorts objects by a property in descending order`},
            el {`Ταξινομεί αντικείμενα βάσει ιδιότητας φθίνουσα `}
        },
        method:id(`sumby`),name(`sumBy`),syntax(`sumBy(string $property): float|int`),return(`float|int`),langs {
            en {`Calculates the total sum of a numeric property across all objects`},
            el {`Υπολογίζει το συνολικό άθροισμα αριθμητικής ιδιότητας σε όλα τα αντικείμενα`}
        },
        method:id(`unique`),name(`unique`),syntax(`unique(): array`),return(`array`),langs {
            en {`Removes duplicate objects (strict comparison)`},
            el {`Αφαιρεί διπλά αντικείμενα (αυστηρή σύγκριση)`}
        },
        method:id(`uniqueby`),name(`uniqueBy`),syntax(`uniqueBy(string $property): array`),return(`array`),langs {
            en {`Returns unique objects based on a property value`},
            el {`Επιστρέφει μοναδικά αντικείμενα βάσει τιμής ιδιότητας   `}
        },
        method:id(`values`),name(`values`),syntax(`values(): array`),return(`array`),langs {
            en {` Returns all values as indexed array`},
            el {`Επιστρέφει όλες τις τιμές ως αριθμητικό πίνακα `}
        } 
    }
}
*/
/******************************************************************************
 * @endcode TCollection
 *****************************************************************************/
?>