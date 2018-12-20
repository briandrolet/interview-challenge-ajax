// Keep these timeouts - simulating network delays.
window.setTimeout(get_facebook_profiles, 400);
window.setTimeout(get_twitter_profiles, 800);

// Keep this function.
function get_facebook_profiles() {
  $.get("/profiles.php?enabled=1&network=facebook&fields=name,network", function(data) {
    if (data) {
      $("div .facebook_list")
        .find(".loading")
        .remove();
      display_profiles("facebook", $.parseJSON(data));
    }
  });
}

// Keep this function.
function get_twitter_profiles() {
  $.get("/profiles.php?enabled=1&network=twitter&fields=name,network", function(data) {
    if (data) {
      $("div .twitter_list")
        .find(".loading")
        .remove();
      display_profiles("twitter", $.parseJSON(data));
    }
  });
}

//helper function to create and display the profile div tag for each platform
function display_profiles(network, profiles) {
  $.each(profiles, function(index, profile) {
    $profile_div = '<div class="profile ' + network + '">' + profile.name + "</div>";
    $("div ." + network + "_list").append($profile_div);
  });
}
