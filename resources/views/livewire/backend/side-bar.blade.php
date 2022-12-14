<div>
    @foreach ($catalogues as $catalogue)
        <li class="menu-item">
        <a href="{{route('catalogue_manager',[$catalogue->slug])}}" class="menu-link">
            <div data-i18n="Account">{{$catalogue->name}} </div>
        </a>
        </li>
@endforeach
</div>