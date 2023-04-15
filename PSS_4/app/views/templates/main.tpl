<!DOCTYPE HTML>
<html lang="pl">
<head>
	<title>{$page_title}</title>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Pizzeria Catto">
	<meta name="author"      content="Adrian Dudek">

	<link rel="stylesheet" type="text/css" href="{$conf->styles}/alertify.css">
	<link rel="shortcut icon" href="{$conf->images}/gt_favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{$conf->styles}/bootstrap.min.css">
	<link rel="stylesheet" href="{$conf->styles}/font-awesome.min.css">
	<link rel="stylesheet" href="{$conf->styles}/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="{$conf->styles}/main.css">
	<link rel="stylesheet" href="{$conf->styles}/additional.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{$conf->scripts}/alertify.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<div class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="{$conf->action_root}main">
					<img src="{$conf->images}/gt_favicon.png">
					Pizzeria Catto
				</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="{$conf->action_root}main">Strona główna</a></li>
					{if !core\RoleUtils::inRole("logged")}
						<li><a href="{$conf->action_root}login">Zaloguj</a></li>
						<li><a class="btn" href="{$conf->action_root}register">Rejestracja</a></li>
					{/if}
					{if core\RoleUtils::inRole("logged")}
						<li class="dropdown">
							<a class="dropdown-toggle btn" data-toggle="dropdown">Narzędzia <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{$conf->action_root}panel">Panel główny</a></li>
								<li><a href="{$conf->action_root}addOpinion">Dodaj opinie</a></li>
								<li><a href="{$conf->action_root}profile">Mój profil</a></li>
								{if core\RoleUtils::inRole("admin") || core\RoleUtils::inRole("moderator")}
									<li class="divider"></li>
									<li><a href="{$conf->action_root}manageUsers">Moderuj użytkowników</a></li>
									<li><a href="{$conf->action_root}manageOpinions">Moderuj opinie</a></li>
									<li class="divider"></li>
								{/if}
								{if core\RoleUtils::inRole("admin")}
									<li><a href="{$conf->action_root}adminLogs">Logi administracyjne</a></li>
									<li class="divider"></li>
								{/if}
								<li><a href="{$conf->action_root}logout">Wyloguj</a></li>
							</ul>
						</li>
					{/if}
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
</div>

<!-- Head -->
{block name=head}{/block}

<!-- Intro -->
{block name=intro}{/block}

<!-- Jumbotron -->
{block name=jumbotron}{/block}

{block name=generated}{/block}

<footer id="footer" class="top-space always-bottom">
	<div class="footer1">
		<div class="container">
			<div class="row">

				<div class="col-md-3 widget">
					<h3 class="widget-title">Kontakt</h3>
					<div class="widget-body">
						ul. Będzińska 39, 41-205 Sosnowiec
						<br/>
						Telefon: 32 368 98 66
						<br/>
						<a href="https://www.google.com/maps/place/B%C4%99dzi%C5%84ska+39,+41-205+Sosnowiec/">Mapa dojazdu</a>
					</div>
				</div>

				<div class="col-md-3 widget">

				</div>

			</div> <!-- /row of widgets -->
		</div>
	</div>

	<div class="footer2">
		<div class="container">
			<div class="row">

				<div class="col-md-6 widget">
					<div class="widget-body">
						<p class="simplenav">
							<a href="{$conf->action_root}main">Strona Główna</a> |
							{if !core\RoleUtils::inRole("logged")}
								<a href="{$conf->action_root}login">Zaloguj</a> |
								<a href="{$conf->action_root}register">Zarejestruj</a>
							{/if}
							{if core\RoleUtils::inRole("logged")}
								<a href="{$conf->action_root}logout">Wyloguj</a>
							{/if}
						</p>
					</div>
				</div>

				<div class="col-md-6 widget">
					<div class="widget-body">
						<p class="text-right">
							Copyright © 2023, Adrian Dudek. Design: <a href="http://gettemplate.com/" rel="designer">GetTemplate</a>
						</p>
					</div>
				</div>

			</div> <!-- /row of widgets -->
		</div>
	</div>

</footer>

{block name=alerts}
{if $msgs->isError()}
	<script type="text/javascript">
	{foreach $msgs->getMessages() as $msg}
	alertify.error("{$msg->text}");
{/foreach}
	</script>
{/if}

{if $msgs->isInfo()}
	<script type="text/javascript">
	{foreach $msgs->getMessages() as $msg}
	alertify.success("{$msg->text}");
{/foreach}
	</script>
{/if}
{/block}

<script src="{$conf->scripts}/headroom.min.js"></script>
<script src="{$conf->scripts}/jQuery.headroom.min.js"></script>
<script src="{$conf->scripts}/template.js"></script>
<script type="text/javascript" src="{$conf->scripts}/ajax-functions.js"></script>

</body>
</html>
