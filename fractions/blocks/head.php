<!-- The one and only jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<!-- Google's Material Icons -->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23421052-3', 'auto');
  ga('send', 'pageview');

</script>

<!-- Favicon -->
<link rel="icon" type="image/png" href="/favicon.ico" />

<!-- Material Design -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

<!-- Site javacsript & css -->
<script src="<?= assemble_url("js/main.js", true) ?>"></script>
<link rel="stylesheet" href="<?= assemble_url("css/style.css", true) ?>" />
<link rel="stylesheet" href="<?= assemble_url("css/mobile.css", true) ?>" />

<!-- Syntax Highlighter -->
<link rel="stylesheet" href="<?= assemble_url("externals/prism/prism.css", true) ?>">
<script src="<?= assemble_url("externals/prism/prism.js", true) ?>"></script>

<!-- Meta Tags -->
<?= get_fraction('blocks.meta', $data) ?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
