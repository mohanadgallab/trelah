
<!-------------LANGUAGE------------------->

<div class="form-group mb-2">

    <label for="lang">lang</label>

    <select name="lang" class="form-control @error('lang') is-invalid @enderror">

        <option value="">--Select--</option>

        <option value="ar" {{ 'ar' == old('lang', $service->lang) ? 'selected' : '' }}>Arabic</option>

        <option value="en" {{ 'en' == old('lang', $service->lang) ? 'selected' : '' }}>English</option>

    </select>

    @error('lang')

    <span class="invalid-feedback" role="alert">

        <strong>{{ $message }} </strong>

    </span>

    @enderror

</div>


<!-------------Country------------------->

<div class="form-group mb-2">
    <label for="lang">Country</label>
    <select name="country_id" class="form-control @error('country_id') is-invalid @enderror">
        <option value="">--Select--</option>
        @foreach ($countries as $country )
        <option value="{{ $country->id}}">{{ $country->name}}</option>
        @endforeach
        
    </select>
    @error('country_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<!-------------NAME------------------->

<div class="form-group">
    <label for="name">name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $service->name ) }} " />
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>


<!-------------IMAGE------------------->

<div class="form-group">
    <label for="image_path">Image</label>
    <input type="file" name="image_path" class="form-control @error('image_path') is-invalid @enderror" />
    @error('image_path')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
    @if ($service->id)
    <img src="{{ Storage::url($service->image_path) }}" alt="{{ Storage::url($service->image_path)}}" class="img-fluid w-25" />
    @endif
</div>


<!-------------DESCRIPTION------------------->

<div class="form-group">
    <label for="desc">desc</label>
    <textarea name="desc" cols="20" class="form-control @error('desc') is-invalid @enderror">{{ old('desc', $service->desc ) }}</textarea>
    @error('desc')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>


<!-------------ICON------------------->

<div class="form-group">
    <label for="icon">Icon</label>
    <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror" value="{{ old('icon', $service->icon ) }} " />
    @error('icon')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

