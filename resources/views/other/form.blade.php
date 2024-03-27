
<!-------------LANGUAGE------------------->

<div class="form-group mb-2">

    <label for="lang">lang</label>

    <select name="lang" class="form-control @error('lang') is-invalid @enderror">

        <option value="">--Select--</option>

        <option value="ar" {{ 'ar' == old('lang', $other->lang) ? 'selected' : '' }}>Arabic</option>

        <option value="en" {{ 'en' == old('lang', $other->lang) ? 'selected' : '' }}>English</option>

    </select>

    @error('lang')

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





<!-------------NAME------------------->

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $other->title ) }} " />
    @error('title')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>





<!-------------DESCRIPTION------------------->

<div class="form-group">
    <label for="desc">desc</label>
    <textarea name="desc" cols="20" class="form-control @error('desc') is-invalid @enderror">{{ old('desc', $other->desc ) }}</textarea>
    @error('desc')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>




