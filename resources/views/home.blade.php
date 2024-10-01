<?php $nom = 'coco'; ?>
<h1>Bonjour {{$nom}} </h1>

@if ($nom  = 'coco')
    <p> coucou coco </p>
@endif