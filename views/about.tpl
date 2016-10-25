<section>
    {foreach from=$result item=oneItem}
        <h1>Game Grumps crew</h1>
        <article>
            <h2>{$oneItem.name}</h2>
            <img src="image/{$oneItem.image}" alt="">
            <br>
            <a href='{$oneItem.link}' target="_blank" class="twitterbird">
                    <img src="image/twitter.png" alt="logo twitter" class="mad">
            </a>
            <br>
            <info>{$oneItem.text}</info>
            <br>

            <date>{$oneItem.date|date_format:"%e %B  %Y"}</date>
        </article>
    {/foreach}
</section>
