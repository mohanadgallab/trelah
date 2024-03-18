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

{{-- Type --}}
<div class="form-group mb-2">

    <label for="type">type</label>

    <select name="type" class="form-control @error('type') is-invalid @enderror">

        <option value="">--Select--</option>

        <option value="land" {{ 'land' == old('type', $service->type) ? 'selected' : '' }}>Land</option>
        <option value="sea" {{ 'sea' == old('type', $service->type) ? 'selected' : '' }}>Sea</option>

        <option value="air" {{ 'air' == old('type', $service->type) ? 'selected' : '' }}>Air</option>


    </select>

    @error('type')

    <span class="invalid-feedback" role="alert">

        <strong>{{ $message }} </strong>

    </span>

    @enderror

</div>
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
<div class="form-group">
    <label for="name">name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $service->name ) }} " />
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

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



<div class="form-group">
    <label for="desc">desc</label>
    <textarea name="desc" cols="20" class="form-control @error('desc') is-invalid @enderror">{{ old('desc', $service->desc ) }}</textarea>
    @error('desc')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>
{{-- <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" class="form-control @error('body') is-invalid @enderror">{{ old('body', $country->body ) }}</textarea>
    @error('body')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="type">Type</label>
    <select name="type" class="form-control @error('type') is-invalid @enderror">
        <option value="">--Select--</option>
        <option value="short" {{ 'short' == old('type', $country->type) ? 'selected' : '' }}>Short</option>
        <option value="long" {{ 'long' == old('type', $country->type) ? 'selected' : '' }}>Long</option>
    </select>
    @error('type')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <legend>
        <h6>Status</h6>
    </legend>

    <div class="form-check @error('status') is-invalid @enderror">
        <input type="radio" class="form-check-input" name="status" value="1" {{ '1' == old('status', $truck->status) ? 'checked' : '' }}>
        <label for="active" class="form-check-label">Yes</label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" name="status" value="0" {{ '0' == old('status', $truck->status) ? 'checked' : '' }}>
        <label for="active" class="form-check-label">No</label>
    </div>
    @error('status')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div> --}}


