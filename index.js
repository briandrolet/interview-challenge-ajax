// Keep these timeouts - simulating network delays.
window.setTimeout(get_facebook_profiles, 400);
window.setTimeout(get_twitter_profiles, 800);

// Keep this function.
function get_facebook_profiles()
{
	$.get('/profiles.php?enabled=1&network=facebook&fields=name,network', function(data) {
		// Create <div>'s from the data, add the class "profile" and "facebook", and set the inner text to the name.
		// It'll look like <div class="profile facebook">Matt</div>
		// Add these new divs as children of the .facebook_list div.
		// Then remove the "Loading..." text.
	});
}

// Keep this function.
function get_twitter_profiles()
{
	$.get('/profiles.php?enabled=1&network=twitter&fields=name,network', function(data) {
		// Create <div>'s from the data, add the class "profile" and "twitter", and set the inner text to the name.
		// It'll look like <div class="profile twitter">Matt</div>
		// Add these new divs as children of the .twitter_list div.
		// Then remove the "Loading..." text.
	});
}
