{extends file="main.tpl"}
{block name=intro}
    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                <li class="active">{$page_title}</li>
            </ol>
            <h2 class="text-center thin">Logi administracyjne</h2>
            <table id="logsValues" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Data</th>
                    <th scope="col">Adres IP</th>
                    <th scope="col">Treść</th>
                </tr>
                </thead>
                <tbody>
                {foreach $logs as $log}
                    <tr>
                        <th scope="row">{$log['id_log']}</th>
                        <td>{$log['datetime']}</td>
                        <td>{$log['ip']}</td>
                        <td>{$log['log']}</td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
            {if $next_page > 1}
                <a type="button" class="btn btn-light btn-sm float-right" href="{$conf->action_root}adminLogs/{$previous_page}">Załaduj nowsze rekordy</a>
            {/if}
            <a type="button" class="btn btn-light btn-sm float-right" href="{$conf->action_root}adminLogs/{$next_page}">Załaduj starsze rekordy</a>
            <a type="button" class="btn btn-light btn-sm float-right" href="{$conf->action_root}adminLogs/-1">Załaduj wszystkie logi</a>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#logsValues').DataTable( {
                "order": [[ 0, "desc" ]]
            } );
        });
    </script>
{/block}