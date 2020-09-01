<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Laravel Components</title>
</head>
<body>
    <h1 class="bg-green-300">Example Blade template</h1>
    <x-sidebar class="bg-red-300" title="My Sidebar Title From attr to constructor" :info="$info">
        <!-- Un Named Slot -->
        <div>
            <h1>Additional Content Un-Named Slot</h1>
        </div>

        <!-- Named Slot -->
        <x-slot name="namedslot">Additional Content for Named Slot Example</x-slot>

    </x-sidebar>

    <!-- inline component -->
    <x-navigation/>
    <!-- inline component -->

    <!-- Anonymous Components -->
    <x-subview/>
    <x-partials.anonymous class="text-green-300"/>
    <!-- Anonymous Components -->
</body>
</html>