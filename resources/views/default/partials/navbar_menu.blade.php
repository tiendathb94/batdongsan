<ul class="dropdown-navigative-menu">
@foreach(navbarMenuItemsDefinition() as $key => $menu)
    <li class="lv0">
      <a href="{{ $menu['route_name'] ? route($menu['route_name'], $menu['parameter']): '' }}" class="haslink ">
      <span class="icon"></span><span class="text">{{ $menu['label'] }}</span></a>
      <div class="arrrow"></div>
        @if(count($menu['items']))
        <ul class="tc_mn">
            @foreach($menu['items'] as $item)
            <li class="lv1">
                <a href="{{ $item['route_name'] ? route($item['route_name'], $item['parameter']): '' }}" class="haslink ">{{ $item['label'] }}</a>
                @if(count($item['items']))
                <ul>
                    @foreach($item['items'] as $childItem)
                        <li class="lv2">
                            <a href="{{ $childItem['route_name'] ? route($childItem['route_name'], $childItem['parameter']): '' }}" class="haslink ">{{ $childItem['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
            </ul>
        @endif
    </li>
@endforeach
</ul>