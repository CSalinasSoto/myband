<section>
    {foreach from=$result item=oneItem}
        <h1>Game Grumps</h1>
        <article>
            <h2>{$oneItem.name}</h2>
            <img src="image/{$oneItem.image}" alt="">
            <info>{$oneItem.text}</info>
            <br>
            <ul>
                <li>

                    <a href="https://twitter.com/egoraptor" target="_blank">

                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink" version="1.1">

                            <circle cx="50" cy="50" r="40" stroke-width="4" class="colour-background-twitter colour-fill-light">
                            Sorry, your browser does not support inline SVG

                        </svg>
                    </a>
                </li>
            </ul>
            <br>
            <date>{$oneItem.date|date_format:"%e %B  %Y"}</date>
        </article>
    {/foreach}
</section>
