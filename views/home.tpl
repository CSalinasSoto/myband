{foreach from=$result item=oneItem}
<div class="frame">
<iframe width="420" height="315" src="https://www.youtube.com/embed/{$oneItem.link}" frameborder="0" allowfullscreen></iframe>
    <h3>{$oneItem.title|truncate:50}</h3>
    <datum>{$oneItem.date}</datum>

</div>
{/foreach}