<?php 
$avatar = Auth::user() ? Auth::user()->avatar : null; $avatar = $avatar ? '/storage/avatars/' . $avatar : '/storage/avatars/default.webp'; 
$class = $class ?? 'w-10 h-10';
?>

<img src="{{ $avatar }}" alt="Avatar" class="{{ $class . ' rounded-full' }}">