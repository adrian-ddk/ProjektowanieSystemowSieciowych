{extends file="main.tpl"}
{block name=intro}
    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                <li class="active">{$page_title}</li>
            </ol>
            <h2 class="text-center thin">Opinie</h2>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h4>Wyszukiwarka</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="GET" action="{$conf->action_root}search">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" list="nameHints" name="shopName" class="form-control" placeholder="Nazwa użytkownika"
                                               onkeyup="ajaxReloadElement('{$conf->action_root}hint?column=name&value='+this.value, 'nameHints', doNothing)">
                                        <datalist id="nameHints">
                                        </datalist>
                                        <hr></hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" value="Szukaj">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <table id="opinionsValues" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Imie</th>
                    <th scope="col">Treść</th>
                    <th scope="col">Autor</th>
                </tr>
                </thead>
                <tbody>
                {foreach $opinions as $opinion}
                    <tr>
                        <th scope="row">{$opinion['id']}</th>
                        <td>{$opinion['name']}</td>
                        <td>{$opinion['description']}</td>
                        <td><a href="{$conf->action_root}profile/{$opinion['userid']}">{$opinion['login']}</a></td>
                        <td><button onclick="deleteOpinion('{$opinion['id']}')" href="#" class="btn btn-link">Usuń</button></td>
                    </tr>
                {/foreach}
                </tbody>
            </table>

            {if $previous_page > 0}
                <a type="button" class="btn btn-light btn-sm float-right" href="{$conf->action_root}manageOpinions/{$previous_page}">Załaduj poprzednie rekordy</a>
            {/if}
            {if $isNextPage}
                <a type="button" class="btn btn-light btn-sm float-right" href="{$conf->action_root}manageOpinions/{$next_page}">Załaduj następne rekordy</a>
            {/if}
            <a type="button" class="btn btn-light btn-sm float-right" href="{$conf->action_root}manageOpinions/0">Załaduj wszystkich użytkowników</a>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#opinionsValues').DataTable();
        });
    </script>

    <script>
        function deleteOpinion(id) {
            if (confirm("Na pewno chcesz usunąć opinie? Nie można będzie cofnąć tej operacji")) {
                window.location.href = '{$conf->action_root}manageOpinions/{$offset}/delete/'+id;
            }
        }
        function doNothing(){ return false; }
    </script>

{/block}