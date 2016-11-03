<section>
    <h1 style="text-align: center">Game Grumps crew</h1>
    {foreach from=$result item=oneItem}
        <div class="wrapper_about">
        <article>
            <h2 >{$oneItem.name}</h2>
            <img src="{$oneItem.image}" class="pasfoto">
            <br>
            <a href='{$oneItem.link}' target="_blank" class="twitterbird">
                    <img src="image/twitter.png" alt="logo twitter" class="mad">
            </a>
            <a href='{$oneItem.link2}' target="_blank" class="twitterbird">
                <img src="image/youtube.png" alt="logo twitter" class="mad">
            </a>
            <br>
            <div class="full">
            <info>{$oneItem.text}</info>
            </div>


            <date>Birthday is: {$oneItem.date|date_format:"%e %B"}</date>
        </article>
        </div>
    {/foreach}
</section>
