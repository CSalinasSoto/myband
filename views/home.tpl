{foreach from=$result item=oneItem}
<div class="frame">
<iframe width="320" height="240" src="https://www.youtube.com/embed/{$oneItem.link}" frameborder="0" allowfullscreen></iframe>
    <h3>{$oneItem.title|truncate:40}</h3>
    <datum >{$oneItem.date}</datum>
</div>
{/foreach}
<br>


<div class="center">
<ul class="pagination">
    {for $i=1 to $nr_of_pages}
        <li><a href="?action=home&page={$i}">{$i}</a></li>
    {/for}
</ul>
</div>

