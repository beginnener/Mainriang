@props([
    'position'=> '',
    'title' => '',
])
<div class="max-w-lg w-2/3 p-4 mx-auto flex justify-center {{ $position === 'center' ? 'text-center' : 'text-left' }} text-wrap bg-gradient-to-l from-orange-400 to-amber-300 rounded-full">
    <h2 class="font-['Poppins'] font-bold text-2xl">{{ $title }}</h2>
</div>