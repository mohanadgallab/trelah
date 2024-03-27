
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

<!-------------SUBTITLE------------------->

<div class="form-group">
    <label for="subtitle">subtitle</label>
    <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" value="{{ old('subtitle', $service->subtitle ) }} " />
    @error('subtitle')
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




