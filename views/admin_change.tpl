<form method="post">
    <fieldset>
        <legend>change about</legend>
        <table>
{foreach from=$result item=oneItem}
    <tr>
        <td><input type="text" value="{$oneItem.name}" name="name"></td>
        <td><input value="{$oneItem.text}" name="text"></td>
        <td><input type="date" value="{$oneItem.date}" name="date"></td>
        <td><input type="text" value="{$oneItem.image}" name="image"></td>
        <td><input type="text" value="{$oneItem.link}" name="link"></td>
        <td><input type="text" value="{$oneItem.id}" style="display: none" name="id"></td>
        <td><input type="submit" name="submit"></td>
    </tr>
{/foreach}
        </table>
    </fieldset>
</form>