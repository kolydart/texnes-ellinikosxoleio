<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "email" => $faker->safeEmail,
        "checkin" => collect(["Checked-in","Αbsent",])->random(),
        "phone" => $faker->name,
        "attribute" => collect(["Εκπαιδευτικός ΠΕ 91.01","Εκπαιδευτικός ΠΕ 79.01","Εκπαιδευτικός ΠΕ 08","Εκπαιδευτικός ΠΕ 70","Εκπαιδευτικός ΠΕ 60","Εκπαιδευτικός ΠΕ 02","Εκπαιδευτικός ΠΕ 11","Εκπαιδευτικός ΠΕ 05 / 06 / 07 / 34 / 40","Εκπαιδευτικός ΠΕ 03/ 04","Εκπαιδευτικός ΠΕ 86","Εκπαιδευτικός ΠΕ 36","Προπτυχιακός/ή Φοιτητής /τρια","Μεταπτυχιακός /η Φοιτητής / τρια","Διδάκτορας","Ανεξάρτητος Ερευνητής","Μέλος ΕΔΙΠ / ΕΕΠ","Μέλος ΔΕΠ","Ομότιμος Καθηγητής / τρια","Άλλο",])->random(),
        "password" => str_random(10),
        "role_id" => factory('App\Role')->create(),
        "remember_token" => $faker->name,
        "approved" => 0,
    ];
});
