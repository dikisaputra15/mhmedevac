<strong>Facility Level:</strong>
@foreach (['Hospital', 'Clinic / Health Center'] as $facilityLevel)
<label style="display:block;font-size:13px;">
    <input type="checkbox" name="hospitalLevel" value="{{ $facilityLevel }}">
    {{ $facilityLevel }} (<span data-facility-level-count="{{ $facilityLevel }}">0</span>)
</label>
@endforeach
