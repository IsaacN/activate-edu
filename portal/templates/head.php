<head>
    <meta charset="utf-8">
    <title><?php echo isset($config['page_title']) ? $config['page_title'] : 'Activate Education Payment Portal'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://activateeducation.com.au/img/og-img.png" /> 

	<!-- Begin CSS -->
	<link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/vendor/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/vendor/datepicker3.css" rel="stylesheet">
	<link href="assets/css/vendor/sweet-alert.css" rel="stylesheet">
	<link href="assets/css/helpers.css" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">

	<!-- Begin JS -->
	<script type="text/javascript">
		var checkNotification = <?php echo $config['notification_status'] == 'check' ? 'true' : 'false'; ?>;
	</script>
	<script src="assets/js/vendor/jquery.min.js"></script>
	<script src="assets/js/vendor/bootstrap.min.js"></script>
	<script src="assets/js/vendor/bootstrap-datepicker.js"></script>
	<script src="assets/js/vendor/bootstrap-maxlength.js"></script>
	<script src="assets/js/vendor/stripe.min.js"></script>
	<script src="assets/js/vendor/sweet-alert.min.js"></script>
	<script src="assets/js/vendor/jquery.form.min.js"></script>
	<script src="assets/js/vendor/jquery.jGet.js"></script>
	<script src="assets/js/vendor/jquery.validate.min.js"></script>
	<script src="assets/js/vendor/jquery.validate.additional-methods.min.js"></script>
	<script src="assets/js/app.js"></script>
	<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','//connect.facebook.net/en_US/fbevents.js');

		fbq('init', '976044342489315');
		fbq('track', "PageView");
	</script>
	<script type="text/javascript"> //<![CDATA[ 
		var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
		document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
		//]]>
	</script>


    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>