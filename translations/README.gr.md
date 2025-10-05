>[!IMPORTANT]
>This file needs to updated in order to match the [english](/README.md) README file.  
>Αυτό το αρχείο πρέπει να ενημερωθεί για να ταιριάζει με το [αγγλικά](/README.md) αρχείο README.

![Ιστολόγιο Laravel με πίνακα διαχείρισης Filament](../docs/social-preview-en.png)

_Read this in [other languages](./Translations.md)_

>This file is automatically translated. If you notice an error, please correct it yourself (by making a PR) or write about it in the [issues](https://github.com/gomzyakov/laravel-blog/issues).

# Ιστολόγιο Laravel με πίνακα διαχείρισης Filament

Αυτό είναι το έργο του κιτ εκκίνησης ιστολογίου [Laravel](https://laravel.com) με τον πίνακα διαχείρισης [Filament](https://filamentphp.com).

Ο στόχος αυτού του αποθετηρίου είναι να παρουσιάσει καλές πρακτικές ανάπτυξης [Laravel](https://laravel.com) με μια απλή εφαρμογή.

## Χαρακτηριστικά

- 📚 Δημιουργία και επεξεργασία αναρτήσεων
- 🥑 Κατηγορίες
- 🔥 Δημοφιλείς αναρτήσεις
- 🎉 Πίνακας διαχειριστή που βασίζεται στο [Filament](https://filamentphp.com)

## Αίτημα χαρακτηριστικών

Ανοίξτε ένα [νέο τεύχος](https://github.com/gomzyakov/laravel-blog/issues/new) για να ζητήσετε μια λειτουργία (ή αν βρείτε κάποιο σφάλμα).

## Πώς να εκτελέσετε το blog τοπικά;

Κλωνοποιήστε το έργο:

```bash
git clone git@github.com:gomzyakov/laravel-blog.git
```

Πιστεύω ότι έχετε ήδη εγκαταστήσει το Docker. Εάν όχι, απλώς κάντε το στο [Mac](https://docs.docker.com/desktop/install/mac-install/), [Windows](https://docs.docker.com/desktop/install/windows -install/) ή [Linux](https://docs.docker.com/desktop/install/linux-install/).

Δημιουργήστε την εικόνα `laravel-blog` με την ακόλουθη εντολή:

```bash
docker compose build --no-cache
```

>Αυτή η εντολή μπορεί να διαρκέσει μερικά λεπτά για να ολοκληρωθεί.

Όταν ολοκληρωθεί η κατασκευή, μπορείτε να εκτελέσετε το περιβάλλον σε λειτουργία παρασκηνίου με:

```bash
docker compose up -d
```

Τώρα θα τρέξουμε το `composer install` για να εγκαταστήσουμε τις εξαρτήσεις της εφαρμογής:

```bash
docker compose exec app composer install
```

Αντιγράψτε τις ρυθμίσεις περιβάλλοντος:

```bash
docker compose exec app cp .env.local .env
```

Ορισμός κλειδιού κρυπτογράφησης με το εργαλείο γραμμής εντολών `artisan` Laravel:

```bash
docker compose exec app ./artisan key:generate --ansi
```

Μετεγκατάσταση DB και δημιουργία πλαστών δεδομένων:

```bash
docker compose exec app ./artisan migrate:fresh --seed
```

Και προσθέστε χρήστη διαχειριστή Filament:

```bash
docker compose exec app ./artisan make:filament-user
```

Και ανοίξτε το http://127.0.0.1:8000 στο αγαπημένο σας πρόγραμμα περιήγησης. Χαίρομαι που χρησιμοποιείτε το Laravel Blog!

## Πώς να μπείτε μέσα στο δοχείο;

Πρόσβαση στο κοντέινερ Docker:

```bash
docker exec -ti laravel-blog-app bash
```

## Άδεια

Αυτό είναι λογισμικό ανοιχτού κώδικα με άδεια χρήσης [MIT License](https://github.com/gomzyakov/php-code-style/blob/main/LICENSE).


[![Κυκλοφορία GitHub](https://img.shields.io/github/release/gomzyakov/laravel-blog.svg)](https://github.com/gomzyakov/laravel-blog/releases/latest)
[![άδεια](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/gomzyakov/laravel-blog/blob/development/LICENSE)
[![codecov](https://codecov.io/gh/gomzyakov/laravel-blog/branch/main/graph/badge.svg?token=4CYTVMVUYV)](https://codecov.io/gh/gomzyakov/ laravel-blog)
