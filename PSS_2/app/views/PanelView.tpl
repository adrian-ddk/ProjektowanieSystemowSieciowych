{extends file="main.tpl"}
{block name=intro}
    <header id="head" class="secondary"></header>
    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="{$conf->action_root}main">Strona główna</a></li>
            <li class="active">{$page_title}</li>
        </ol>

        <div class="row">
            <!-- Article main content -->
            <article class="col-md-12 col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Panel główny</h1>
                </header>
            </article>

            <article class="col-md-12 col-xs-12 maincontent">
                {if core\RoleUtils::inRole("admin") || core\RoleUtils::inRole("moderator")}
                <div class="col-md-6 col-sm-12">
                    <h4>Ostatnio zarejestrowani użytkownicy</h4>
                    <ul class="list-group">
                        {foreach $lastRegister as $last}
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a href="{$conf->action_root}profile/{$last['id']}">{$last['login']}</a>
                                    </div>
                                    <div class="col-md-7">
                                        {$last['register_date']}
                                    </div>
                                </div>
                            </li>
                        {/foreach}
                    </ul>
                </div>
                {/if}
                <div class="col-md-6 col-sm-12">
                    <h4>Akcje</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{$conf->action_root}addOpinion">Dodaj opinie</a></li>
                        <li class="list-group-item"><a href="{$conf->action_root}profile">Mój profil</a></li>
                        <li class="list-group-item"><a href="{$conf->action_root}logout">Wyloguj</a></li>
                    </ul>
                </div>
            </article>

            <article class="col-md-12 col-xs-12 maincontent">
                <div class="col-md-6 col-sm-6">
                    <h4>Ilość opinii w naszej bazie</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><h4>{$allOpinions}</h4></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4>Ilość zarejestrowanych użytkowników</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><h4>{$allUsers}</h4></li>
                    </ul>
                </div>
            </article>
            <!-- /Article -->

            <div class="space"> . </div>
        </div>

    </div>	<!-- /container -->

{/block}