{extends file="main.tpl"}
{block name=intro}
    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                <li class="active">{$page_title}</li>
            </ol>
            <h2 class="text-center thin">Opinie</h2>
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
        </div>
    </div>

    <script>
        function deleteOpinion(id) {
            if (confirm("Na pewno chcesz usunąć opinie? Nie można będzie cofnąć tej operacji")) {
                window.location.href = '{$conf->action_root}manageOpinions/{$offset}/delete/'+id;
            }
        }
        function doNothing(){ return false; }
    </script>

{/block}