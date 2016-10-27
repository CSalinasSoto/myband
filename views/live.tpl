
{foreach from=$result item=oneItem}
    <div class="wrap">

<div class="datum" style="text-align: center ">
    <div class="datum_text" style="top: 3px; transform-origin: 32px 26.5px 0px;">
        <p><span class="datum_time">{$oneItem.day|date_format:"%b %e %a"}</span></p>
    </div>
</div>
    <div class="info">
        <div class="info_text" style="top: 3px; transform-origin: 32px 26.5px 0px;">
            <p><span>{$oneItem.theater}</span></p>
            <p class="info_time">{$oneItem.time}</p>

        </div>
    </div>
        <div class="live" >
            <div class="live_text" style="top: 3px; transform-origin: 32px 26.5px 0px;">
                <p><span class="live_game" ">GAME GRUMPS LIVE!</span></p>
                <p><span style="margin-left: 240px; margin-top: -20px">{$oneItem.ticket}</span></p>
                <a href="" target="_blank" ><input type="button" value="Buy tickets" class="button"></a>
            </div>
        </div>
</div>
            {/foreach}


