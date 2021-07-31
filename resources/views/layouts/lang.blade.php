<div>
    @foreach (Config::get('languages') as $lang => $language)
    @if ($lang != App::getLocale())
    <a href="{{ route('lang.switch', $lang) }}" class="ml-1 p-2"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
    @else
    <a href="#" class="ml-1 p-2 bg-secondary text-white"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
    @endif
    @endforeach
</div>
