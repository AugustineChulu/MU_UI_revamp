<table class="ui_table {{ $tableColumnsType }} {{ $tableTitle }}">

    @if ($tableTitle != 'no_caption')
        <caption>{{ $tableTitle }}</caption>
    @endif
    
    @foreach ($collection as $item)
        
        <tr>
            <td>{{ $item['key'] }}</td>
            <td>
                @if (!empty($item['value']))
                    @if (filter_var($item['value'], FILTER_VALIDATE_EMAIL))
                        <a href="mailto:{{ $item['value'] }}">{{ $item['value'] }}</a>
                    @elseif (str_ends_with($item['value'], '.pdf'))
                        <a href="{{ $item['value'] }}">{{ $item['value'] }}</a>
                    @else
                        {{ $item['value'] }}
                    @endif
                @else
                    NA
                @endif
            </td>
        </tr>
    @endforeach
    
</table>