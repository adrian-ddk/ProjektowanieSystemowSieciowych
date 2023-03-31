{extends file="main.tpl"}
{block name=intro}
    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                <li class="active">{$page_title}</li>
            </ol>
            <h2 class="text-center thin">Profil użytkownika <b>{$profile['login']}</b></h2>
            <div class="col-md-12">
                <!-- resumt -->
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-8">
                                    <ul class="list-group">
                                        <li class="list-group-item">Login: {$profile['login']}</li>
                                        <li class="list-group-item">Grupa:
                                            {if {$profile['name']=='admin'}}<span class="admin">Administratorzy</span>{/if}
                                            {if {$profile['name']=='moderator'}}<span class="moderator">Moderatorzy</span>{/if}
                                            {if {$profile['name']=='user'}}<span class="user">Użytkownicy</span>{/if}
                                            {if {$profile['name']=='zbanowany'}}<span class="banned">Zbanowani</span>{/if}
                                        </li>
                                        <li class="list-group-item">Data utworzenia konta: {$profile['register_date']}</li>
                                        <li class="list-group-item">Ostatnio zalogowany: {$profile['last_login']}</li>
                                        <li class="list-group-item">Adres email: {$profile['email']}</li>
                                        {if core\RoleUtils::inRole("admin") || core\RoleUtils::inRole("moderator")}
                                            <li class="list-group-item">Numer ID konta: {$profile['id']}</li>
                                            <li class="list-group-item">
                                                <a href="{$conf->action_root}manageUsers/1/edit/{$profile['id']}"><button class="btn btn-primary">Edytuj użytkownika</button></a>
                                            </li>
                                        {/if}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}