<h1>Fleet</h1>
<br /><br />

<table class="table table-hover">
    <tr>
        <th>
            ID
        </th>
        <th>
            Make
        </th>
        <th>
            Model
        </th>
    </tr>  
    {fleet}
        <tr>
        <td>
            <a href="/fleet/{id}">{id}</a>
        </td>
        <td>{make}</td>
        <td>{model}</td>
            
    </tr>
    {/fleet}
</table>