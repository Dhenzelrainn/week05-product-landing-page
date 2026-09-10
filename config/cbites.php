<?php
return [
    // Add only the bakery's verified profile URLs. Missing profiles are not clickable.
    "socials" => [
        "facebook" => env("CBITES_FACEBOOK_URL"),
        "instagram" => env("CBITES_INSTAGRAM_URL"),
        "tiktok" => env("CBITES_TIKTOK_URL"),
        "messenger" => env("CBITES_MESSENGER_URL"),
    ],
];
