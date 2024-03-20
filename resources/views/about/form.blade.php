<!----------Lang------------>
<div class="form-group mb-2">
    <label for="lang">lang</label>
    <select name="lang" class="form-control @error('lang') is-invalid @enderror">
        <option value="">--Select--</option>
        <option value="ar" {{ 'ar' == old('lang', $about->lang) ? 'selected' : '' }}>Arabic</option>
        <option value="en" {{ 'en' == old('lang', $about->lang) ? 'selected' : '' }}>English</option>
    </select>
    @error('lang')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<!----------Title------------>
<div class="form-group">
    <label for="subtitle">Title</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $about->title ) }} " />
    @error('title')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>
<!----------Subtitle------------>
<div class="form-group">
    <label for="subtitle">Subtitle</label>
    <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" value="{{ old('subtitle', $about->subtitle ) }} " />
    @error('subtitle')
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

<!----------List 1------------>
<div class="form-group">
    <label for="list_1">List 1</label>
    <input type="text" name="list_1" class="form-control @error('list_1') is-invalid @enderror" value="{{ old('list_1', $about->list_1 ) }} " />
    @error('list_1')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<!----------List 2------------>
<div class="form-group">
    <label for="list_2">List 2</label>
    <input type="text" name="list_2" class="form-control @error('list_2') is-invalid @enderror" value="{{ old('list_2', $about->list_2 ) }} " />
    @error('list_2')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<!----------List 3------------>
<div class="form-group">
    <label for="list_3">List 3</label>
    <input type="text" name="list_3" class="form-control @error('list_3') is-invalid @enderror" value="{{ old('list_3', $about->list_3 ) }} " />
    @error('list_3')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>


<!----------List 4------------>
<div class="form-group">
    <label for="list_4">List 4</label>
    <input type="text" name="list_4" class="form-control @error('list_4') is-invalid @enderror" value="{{ old('list_4', $about->list_4 ) }} " />
    @error('list_4')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<!----------List 5------------>
<div class="form-group">
    <label for="list_5">List 5</label>
    <input type="text" name="list_5" class="form-control @error('list_5') is-invalid @enderror" value="{{ old('list_5', $about->list_5 ) }} " />
    @error('list_5')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<!----------End------------>
<div class="form-group">
    <label for="end">End</label>
    <input type="text" name="end" class="form-control @error('end') is-invalid @enderror" value="{{ old('end', $about->end ) }} " />
    @error('end')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>
{{-- <div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" cols="20" class="form-control @error('content') is-invalid @enderror">{{ old('content', $country->content ) }}</textarea>
    @error('content')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>
<div class="form-group">
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


