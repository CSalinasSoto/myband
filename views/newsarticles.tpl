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

{*<?php*}

{*echo '<section>';*}

{*//fetch_assoc should not be in the view!*}
{*foreach ($result as $newsItem => $oneItem) {*}

{*echo '<article>';*}
    {*echo '<h1>'.$oneItem['title'].'</h1>';*}
    {*echo '<img width=100px src="image/'. $oneItem['image'] .'" alt="'.$oneItem['date_created'].'">';*}
    {*//echo $oneItem['image'];*}
    {*echo '<content>'.$oneItem['content'].'</content>';*}
    {*echo '<data>'.$oneItem['date_created'].'</data>';*}
    {*echo '</article>';*}
{*}*}

{*echo '</section>';*}

