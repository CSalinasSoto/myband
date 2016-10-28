{foreach from=$result item=oneItem}
<form method="post">

    <input type="text" value="{$oneItem.name}" name="name">
    <input value="{$oneItem.text}" name="text">
    <input type="date" value="{$oneItem.date}" name="date">
    <input type="text" value="{$oneItem.image}" name="image">
    <input type="text" value="{$oneItem.link}" name="link">
    <input type="text" value="{$oneItem.id}" style="display: none" name="id">
    <input type="submit" name="submit">
</form>
{/foreach}