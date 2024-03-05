![Ιστολόγιο Laravel με πίνακα διαχείρισης Filament](../docs/social-preview-en.png)

# Ιστολόγιο Laravel με πίνακα διαχείρισης Filament

Αυτό είναι το έργο του κιτ εκκίνησης ιστολογίου [Laravel](https://laravel.com) με τον πίνακα διαχείρισης [Filament](https://filamentphp.com).

Ο στόχος αυτού του αποθετηρίου είναι να παρουσιάσει καλές πρακτικές ανάπτυξης [Laravel](https://laravel.com) με μια απλή εφαρμογή.

## Χαρακτηριστικά

- 📚 Δημιουργία και επεξεργασία αναρτήσεων
- 🥑 Κατηγορίες
- :fire: Δημοφιλείς αναρτήσεις
- :hatched_chick: Πίνακας διαχειριστή που βασίζεται στο [Filament](https://filamentphp.com)

## Αίτημα χαρακτηριστικών

Ανοίξτε ένα [νέο τεύχος](https://github.com/gomzyakov/laravel-blog/issues/new) για να ζητήσετε μια λειτουργία (ή αν βρείτε κάποιο σφάλμα).

## Πώς να εκτελέσετε το blog τοπικά;

Κλωνοποιήστε το έργο:

```μπας
git clone git@github.com:gomzyakov/laravel-blog.git
```

Πιστεύω ότι έχετε ήδη εγκαταστήσει το Docker. Εάν όχι, απλώς κάντε το στο [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) ή [Linux](https://docs.docker.com/desktop/install/linux-install/).

Δημιουργήστε την εικόνα `laravel-blog` με την ακόλουθη εντολή:

```μπας
docker compose build --no-cache
```

>Αυτή η εντολή μπορεί να διαρκέσει μερικά λεπτά για να ολοκληρωθεί.

Όταν ολοκληρωθεί η κατασκευή, μπορείτε να εκτελέσετε το περιβάλλον σε λειτουργία παρασκηνίου με:

```μπας
docker συνθέτω επάνω -δ
```

Τώρα θα τρέξουμε το "composer install" για να εγκαταστήσουμε τις εξαρτήσεις της εφαρμογής:

```μπας
εγκατάσταση συνθέτη εφαρμογής docker compose exec
```

Αντιγράψτε τις ρυθμίσεις περιβάλλοντος:

```μπας
docker compose exec app cp .env.local .env
```

Ορισμός κλειδιού κρυπτογράφησης με το εργαλείο γραμμής εντολών «artisan» Laravel:

```μπας
docker compose exec app ./artisan key:generate --ansi
```

Μετεγκατάσταση DB και δημιουργία πλαστών δεδομένων:

```μπας
docker compose exec app ./artisan migrate:fresh --seed
```

Και προσθέστε χρήστη διαχειριστή Filament:

```μπας
docker compose exec app ./artisan make:filament-user
```

Και ανοίξτε το http://127.0.0.1:8000 στο αγαπημένο σας πρόγραμμα περιήγησης. Χαίρομαι που χρησιμοποιείτε το Laravel Blog!

## Πώς να μπείτε μέσα στο δοχείο;

Πρόσβαση στο κοντέινερ Docker:

```μπας
docker exec -ti laravel-blog-app bash
```

## Άδεια

Αυτό είναι λογισμικό ανοιχτού κώδικα με άδεια χρήσης [MIT License](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Κυκλοφορία GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![άδεια](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)