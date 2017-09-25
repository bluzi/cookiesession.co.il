<?php	
	// description
	if (is_array($data) && array_key_exists('description', $data)) {
		$description = $data['description'];
	}
	else if (isset($page) && is_array($page) && array_key_exists('description', $page)) {
		$description = $page['description'];
	}
	else {
		$description = t('site-description');
	}
	
	// title
	if (is_array($data) && array_key_exists('title', $data)) {
		$title = $data['title'];
	}
	else if (isset($page) && is_array($page) && array_key_exists('title', $page)) {
		$title = $page['title'];
	}
	else {
		$title = t('site-title');
	}
	
	// keywords
	if (is_array($data) && array_key_exists('keywords', $data)) {
		$keywords = $data['keywords'];
	}
	else if (isset($page) && is_array($page) && array_key_exists('keywords', $page)) {
		$keywords = $page['keywords'];
	}
	else {
		$keywords = t('site-keywords');
	}
?>

<!-- General -->
<meta name="description" content="<?= $description ?>" />
<meta name="keywords" content="<?= $keywords ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!-- Google -->
<link rel="author" href="https://plus.google.com/106403508857505805908"/>

<!-- Facebook -->
<meta property="og:site_name" content="%site-title%"/>
<meta property="og:title" content="<?= $title ?>"/>
<meta property="og:type" content="article" />
<meta property="og:description" content="<?= $description ?>" />
<meta property="og:locale" content="he_IL" />  
<meta property="og:locale:alternate" content="en_US" />
<meta property="article:author" content="https://www.facebook.com/eliran.peer" />
<?php if (is_array($data) && array_key_exists('image', $data)) { ?>
<meta property="og:image" content="{{image}}" />
<?php } else { ?>
<meta property="og:image" content="/cookiesession.com/siteimage.png" />
<?php } ?>

<!-- Twitter -->
<meta property="twitter:card" content="summary" />
<meta property="twitter:title" content="<?= $title ?>" />
<meta property="twitter:description" content="<?= $description ?>" />

<?php if (is_array($data) && array_key_exists('image', $data)) { ?>
<meta property="twitter:image" content="{{image}}" />
<?php } ?>