{extends file="main.tpl"}

{block name=content}

<table id="tab_credits" class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th class="amount-column">Kwota</th>
            <th class="years-column">Ile lat</th>
            <th class="interest-column">Oprocentowanie</th>
            <th class="installment-column">Rata miesięczna</th>
            <th class="date-column">Data obliczenia</th>
            <th class="action-column">Akcje</th>
        </tr>
    </thead>
    <tbody>
        {foreach $calcCredit as $c}
            {strip}
                <tr>
                    <td>{$c["amount"]}</td>
                    <td>{$c["period"]}</td>
                    <td>{$c["interest_rate"]}</td>
                    <td>{$c["monthly_installment"]}</td>
                    <td>{$c["date"]}</td>
                    <td>
                        <a class="button-small pure-button button-warning" href="{$conf->action_url}listDelete&id={$c['idcredit']}">Usuń</a>
                    </td>
                </tr>
            {/strip}
        {/foreach}
    </tbody>
</table>

{/block}
