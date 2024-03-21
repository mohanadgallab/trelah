<!----------Lang------------>
<div class="form-group mb-2">
    <label for="lang">lang</label>
    <select name="lang" class="form-control @error('lang') is-invalid @enderror">
        <option value="">--Select--</option>
        <option value="ar" {{ 'ar' == old('lang', $item->lang) ? 'selected' : '' }}>Arabic</option>
        <option value="en" {{ 'en' == old('lang', $item->lang) ? 'selected' : '' }}>English</option>
    </select>
    @error('lang')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<!----------Country------------>
<div class="form-group mb-2">
    <label for="country_id">Country</label>
    <select name="country_id" class="form-control @error('country_id') is-invalid @enderror">
        <option value="">--Select--</option>
        @foreach ($countries as $country)
            <option value="{{ $country->id }}">{{ $country->name}}</option>
        @endforeach
    </select>
    @error('country_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>


<!----------Service------------>
<div class="form-group mb-2">
    <label for="service_id">Services</label>
    <select name="service_id" class="form-control @error('service_id') is-invalid @enderror">
        <option value="">--Select--</option>
        @foreach ($services as $service)
            <option value="{{ $service->id }}">{{ $service->name}}</option>
        @endforeach
    </select>
    @error('service_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<!----------Title------------>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $item->name ) }} " />
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>


<!----------Image------------>
<div class="form-group">
    <label for="image_path">Image</label>
    <input type="file" name="image_path" class="form-control @error('image_path') is-invalid @enderror" />
    @error('image_path')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
    
</div>

<!----------DESCRIPTION------------>

<div class="form-group">
    <label for="desc">Description</label>
    <textarea name="desc" class="form-control @error('desc') is-invalid @enderror">{{ old('desc', $item->desc ) }}</textarea>
    @error('desc')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>


