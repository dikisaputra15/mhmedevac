<strong>Category:</strong>
@foreach (['National Police HQ', 'Regional Police Substation', 'Municipal Police Posts'] as $policeCategory)
<label style="display:block;font-size:13px;">
    <input type="checkbox" name="policeCategory" value="{{ $policeCategory }}">
    {{ $policeCategory }} (<span data-police-category-count="{{ $policeCategory }}">0</span>)
</label>
@endforeach
