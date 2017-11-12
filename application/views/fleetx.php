<!-- adding a new fleet page with a button-->
<div id="body">
    
    <table>
        <tr>
            <td>Airplane ID</td>
            <td>Type</td>
        </tr>
        {planes}
        <tr>
            <td>{id}</td>
            <td>{type}</td>
        </tr>
        {/planes}
    </table>
    
    <p><a href="info/fleet">Info </a></p>
    <a href="info/fleet/add"><input type="button" value="Add a new Fleet"/></a>
    
</div>
