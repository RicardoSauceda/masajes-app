<input  type="text"  class="border-0 border-b border-gray-400"
    name="{{ $name }}" 
    id="{{ $id }}" 
    value="{{ $value }}"
    @if($required) required @endif 
    @if($autofocus) autofocus @endif 
    @if($autocomplete)
        autocomplete="{{ $autocomplete }}" 
    @endif 
/>