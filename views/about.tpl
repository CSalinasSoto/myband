<section>
    {foreach from=$result item=oneItem}
        <article>
            <h1>{$oneItem.name}</h1>
            <img src="image/{$oneItem.image}" alt="">
            <info>{$oneItem.text}</info>
            <date>{$oneItem.date|date_format:"%e %B  %Y"}</date>
        </article>
    {/foreach}
</section>