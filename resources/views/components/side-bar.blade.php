<div {{$attributes->merge(['class' => 'border-8 border-green-500', 'style' => 'text-align:center;'])}} >
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <h1>Hello From Sidebar</h1>
    <h1>{{$title}}</h1>
    <!-- Display data passed by controller -->
    <h1>{{$info}}</h1>

    <h1>List Items</h1>   
    <h1 class="text-blue-200">{{$namedslot}}</h1>
    <ul>
        @foreach ($list('new hatdog') as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
    {{$slot}}
    
</div>