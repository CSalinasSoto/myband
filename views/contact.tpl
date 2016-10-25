<head>
    <link rel="stylesheet" href="css/contact.css">
</head>
{foreach from=$result item=oneItem}
<h1>{$oneItem.title}</h1>
<form class="cf">
    <div class="half left cf">
        <input type="text" id="input-name" placeholder="Name">
        <input type="email" id="input-email" placeholder="Email address">
        <input type="text" id="input-subject" placeholder="Subject">
    </div>
    <div class="half right cf">
        <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
    </div>
    <input type="submit" value="Submit" id="input-submit">
</form>
{/foreach}
{*<h3>My Google Maps Demo</h3>*}
{*<div id="map"></div>*}
{*<script>*}
    {*function initMap() {*}
        {*var uluru = {lat: -25.363, lng: 131.044};*}
        {*var map = new google.maps.Map(document.getElementById('map'), {*}
            {*zoom: 4,*}
            {*center: uluru*}
        {*});*}
        {*var marker = new google.maps.Marker({*}
            {*position: uluru,*}
            {*map: map*}
        {*});*}
    {*}*}
{*</script>*}
{*<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwNkG5pkgCfBRRNYctTVCMk0fIK74x9Bc"*}
        {*async defer>*}
{*</script>*}
