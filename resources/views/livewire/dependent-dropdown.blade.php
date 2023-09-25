<div>
    <h1>laravel 10 Livewire Dependent Dropdown - Websolutionstuff</h1>
    <div>
        <label for="country">Country:</label>
        <select wire:model="selectedCountry" id="country">
            <option value="">Select Country</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
    </div>

    @if (!empty($states))
        <div>
            <label for="state">State:</label>
            <select wire:model="selectedState" id="state">
                <option value="">Select State</option>
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
        </div>
    @endif

    @if (!empty($cities))
        <div>
            <label for="city">City:</label>
            <select id="city">
                <option value="">Select City</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
</div>