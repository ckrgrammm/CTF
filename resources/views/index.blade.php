<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Storyline Game</title>
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <img src="{{ asset('img/images.webp') }}" alt="Interactive Map" usemap="#image-map">

    <map name="image-map">
        <!-- Area for the girl, with the circle shape -->
        <area target="" alt="Girl" title="Girl" href="#" coords="338,1032,142" shape="circle" onclick="showModal('girlModal')">
        <!-- Area for the boy, with the circle shape -->
        <area target="" alt="Boy" title="Boy" href="#" coords="2654,1025,136" shape="circle" onclick="showModal('boyModal')">
    </map>



<!-- The Modal for the girl -->
<div id="girlModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('girlModal')">&times;</span>
        <p>HI! I am a girl.</p>
    </div>
</div>

<!-- The Modal for the man -->
<div id="boyModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('boyModal')">&times;</span>
        <p>HI! I am a boy.</p>
    </div>
</div>


<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
