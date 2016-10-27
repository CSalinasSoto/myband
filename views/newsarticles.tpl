<section>

        {foreach from=$result item=oneItem}
    <article>
        <h1>{$oneItem.title}</h1>
        <img src="image/{$oneItem.image}" alt="">
        <content>{$oneItem.content|truncate:30}</content>
        <date>{$oneItem.date_created|date_format:"%e %B  %Y"}</date>
    </article>
        {/foreach}

</section>

<ul class="niks">
    <li><a href="?action=home&page=1">1</a></li>
    <li><a href="?action=home&page=2">2</a></li>
</ul>


