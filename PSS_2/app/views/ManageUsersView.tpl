{extends file="main.tpl"}
{block name=intro}
    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                <li class="active">{$page_title}</li>
            </ol>
            <h2 class="text-center thin">Użytkownicy</h2>
            {if isset($details)}
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Parametr</th>
                        <th scope="col">Wartość</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach $userDetails as $key => $val}
                        <tr>
                            <td>{$key}</td>
                            <td>{$val}</td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            {/if}

            {if isset($edit)}
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Edycja użytkownika</h3>
                            <p class="text-center text-muted">Jeżeli nie chcesz edytować niektórych pól, pozostaw je bez zmian.</p>
                            <hr>
                            <form method="post" action="{$conf->action_root}userEdit">
                                {foreach $userDetails as $key => $val}
                                    {if $key == 'id'}
                                        <input type="hidden" class="form-control" name="{$key}" value="{$val}">
                                    {/if}
                                    {if $key != 'id' && $key !='id_role' && $key != 'name'}
                                        <div class="form-group">
                                            <label for="{$key}">{$key}</label>
                                            <input class="form-control" name="{$key}" value="{$val}">
                                        </div>
                                    {/if}
                                    {if $key == 'id_role'}
                                        <div class="form-group">
                                            <label for="{$key}">Rola</label>
                                            <select class="form-control" name="id_role">
                                                {foreach $roles as $role}
                                                    <option value="{$role['id_role']}"{if $role['id_role'] == $val} selected{/if}>{$role['name']}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    {/if}
                                {/foreach}
                                <input type="submit" value="Edytuj" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            {/if}

            <table id="usersValues" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Rola</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                {foreach $users as $user}
                    <tr>
                        <th scope="row">{$user['id']}</th>
                        <td>{$user['login']}</td>
                        <td>{$user['name']}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{$conf->action_root}profile/{$user['id']}">Profil</a></li>
                                    <li><a class="dropdown-item" href="{$conf->action_root}manageUsers/{$offset}/edit/{$user['id']}">Edytuj</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>
{/block}