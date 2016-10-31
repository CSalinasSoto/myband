<section>
    <h1>Game Grumps crew</h1>
    {foreach from=$result item=oneItem}
        <div class="wrapper_about">
        <article>
            <h2>{$oneItem.name}</h2>
            <img src="image/{$oneItem.image}" class="pasfoto">
            <br>
            <a href='{$oneItem.link}' target="_blank" class="twitterbird">
                    <img src="image/twitter.png" alt="logo twitter" class="mad">
                    <img src="image/instagram.png" alt="logo instagram" class="mad">
                    <img src="image/youtube.png" alt="logo youtube" class="mad">
                    <img src="image/youtube.png" alt="logo youtube" class="mad">
            </a>
            <br>
            <info>{$oneItem.text}</info>
            <br>

            <date>{$oneItem.date|date_format:"%e %B  %Y"}</date>
        </article>
        </div>
    {/foreach}
</section>
