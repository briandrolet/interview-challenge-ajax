<?php

include 'App.php';
// This is the controller for the ajax request GET /profiles.php
// Parse the request variables, get the profile data from profiles.json, filter the results, and send the data back.
$app = new App();

const PROFILES_FILENAME = "profiles.json";
$enabled = $app->getRequestVar("enabled");
$network = $app->getRequestVar("network");
$fields_to_show = explode(',', $app->getRequestVar("fields"));

echo get_filtered_json_profiles($enabled, $network, $fields_to_show);

/**
 * returns a filtered profile list.
 *
 * @param $enabled
 * @param $network
 * @param $fields
 * @return string (json object)
 */
function get_filtered_json_profiles($enabled, $network, $fields)
{
    $all_profiles = json_decode(get_all_profiles(), true);
    $filtered_profiles = array();

    foreach ($all_profiles as $profile) {
        if ($profile["enabled"] == $enabled && $profile["network"] == $network) {
            foreach ($fields as $field) {
                $filtered_profile[$field] = $profile[$field];
            }
            array_push($filtered_profiles, $filtered_profile);
        }
    }

    return json_encode($filtered_profiles);
}

function get_all_profiles()
{
    return file_get_contents(PROFILES_FILENAME);
}
