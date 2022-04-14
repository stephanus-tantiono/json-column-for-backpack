{{-- @if ($crud->columnTypeNotLoaded($column)) --}}
@loadOnce('/css/json-viewer.css')
@loadOnce('/js/json-viewer.js')
{{-- @endif--}}

<div id="json-column-{{ $column['name'] }}"></div>
<!-- json viewer by Roman Makudera (LorDOniX) https://github.com/LorDOniX/json-viewer 
https://www.cssscript.com/minimal-json-data-formatter-jsonviewer/ -->
<script>
    var jsonViewer = new JSONViewer();
    document.querySelector("#json-column-{{ $column['name'] }}").appendChild(jsonViewer.getContainer());
    jsonViewer.showJSON(@json($entry->{$column['name']}), -1, -1);
</script>