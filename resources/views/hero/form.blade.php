<!----------Lang------------>
<div class="form-group mb-2">
    <label for="lang">lang</label>
    <select name="lang" class="form-control @error('lang') is-invalid @enderror">
        <option value="">--Select--</option>
        <option value="ar" {{ 'ar' == old('lang', $hero->lang) ? 'selected' : '' }}>Arabic</option>
        <option value="en" {{ 'en' == old('lang', $hero->lang) ? 'selected' : '' }}>English</option>
    </select>
    @error('lang')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<!----------H1------------>
<div class="form-group">
    <label for="h1">H1</label>
    <input type="text" name="h1" class="form-control @error('h1') is-invalid @enderror" value="{{ old('h1', $hero->h1 ) }} " />
    @error('h1')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>
<!----------Span H1------------>
<div class="form-group">
    <label for="spanh1">Span H1</label>
    <input type="text" name="spanh1" class="form-control @error('spanh1') is-invalid @enderror" value="{{ old('spanh1', $hero->spanh1 ) }} " />
    @error('spanh1')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>



<!----------H2------------>
<div class="form-group">
    <label for="h2">H2</label>
    <input type="text" name="h2" class="form-control @error('h2') is-invalid @enderror" value="{{ old('h2', $hero->h2 ) }} " />
    @error('h2')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>
<!----------Span H2------------>
<div class="form-group">
    <label for="spanh2">Span H2</label>
    <input type="text" name="spanh2" class="form-control @error('spanh2') is-invalid @enderror" value="{{ old('spanh2', $hero->spanh2 ) }} " />
    @error('spanh2')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>




