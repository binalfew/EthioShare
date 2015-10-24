<!DOCTYPE html>
<html>
<head>
	<title>EthioShare</title>
	<link rel="stylesheet" type="text/css" href="/css/all.css">
	@yield('scripts.header')
</head>
<body class="top-navigation">
	<div id="wrapper">
		<div id="page-wrapper" class="gray-bg">
			@include('partials.navigation')
			<div class="wrapper wrapper-content">
				@include('partials.content')
				@include('partials.footer')
			</div>
		</div>
	</div>
	
	<script src="/js/all.js"></script>
	<script>
		// $(document).pjax('a', '#page-wrapper');
	</script>
	@yield('scripts.footer')
	@include('flash')
</body>
</html>