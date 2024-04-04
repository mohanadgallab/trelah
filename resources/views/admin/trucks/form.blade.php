<div class="row">
    <div class="col-xs-3">
        <label for="lang">lang</label>
        <select name="lang" class="form-control @error('lang') is-invalid @enderror">
            <option value="">--Select--</option>
            <option value="ar" {{ 'ar' == old('lang', $truck->lang) ? 'selected' : '' }}>Arabic</option>
            <option value="en" {{ 'en' == old('lang', $truck->lang) ? 'selected' : '' }}>English</option>
        </select>
        @error('lang')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }} </strong>
            </span>
        @enderror
    </div>
    <div class="col-xs-3">
        <label for="name">name</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $truck->name) }} " />
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }} </strong>
            </span>
        @enderror
    </div>

    <div class="col-xs-3">
        <label for="image">Image</label>
        <input type="file" name="image_path" class="form-control @error('image') is-invalid @enderror" />
        @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }} </strong>
            </span>
        @enderror
        @if ($truck->id)
            <img src="{{ Storage::url($truck->image_path) }}" alt="{{ Storage::url($truck->image_path) }}"
                class="img-fluid w-25" />
        @endif
    </div>

    <div class="col-xs-3">
        <label for="long">Long</label>
        <input type="text" name="long" class="form-control @error('long') is-invalid @enderror"
            value="{{ old('long', $truck->long) }} " />
        @error('long')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }} </strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="width">width</label>
        <input type="text" name="width" class="form-control @error('width') is-invalid @enderror"
            value="{{ old('width', $truck->width) }} " />
        @error('width')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }} </strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="weight">weight</label>
        <input type="text" name="weight" class="form-control @error('weight') is-invalid @enderror"
            value="{{ old('weight', $truck->weight) }} " />
        @error('weight')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }} </strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="area_1">Area 1</label>
        <textarea name="area_1" class="form-control @error('area_1') is-invalid @enderror">{{ old('area_1', $truck->area_1) }}</textarea>
        @error('area_1')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }} </strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="area_2">Area 2</label>
        <textarea name="area_2" class="form-control @error('area_2') is-invalid @enderror">{{ old('area_2', $truck->area_2) }}</textarea>
        @error('area_2')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }} </strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="area_3">Area 3</label>
        <textarea name="area_3" class="form-control @error('area_3') is-invalid @enderror">{{ old('area_3', $truck->area_3) }}</textarea>
        @error('area_3')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }} </strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="area_4">Area 4</label>
        <textarea name="area_4" class="form-control @error('area_4') is-invalid @enderror">{{ old('area_4', $truck->area_4) }}</textarea>
        @error('area_4')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }} </strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="area_5">Area 5</label>
        <textarea name="area_5" class="form-control @error('area_5') is-invalid @enderror">{{ old('area_5', $truck->area_5) }}</textarea>
        @error('area_5')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }} </strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="area_6">Area 6</label>
        <textarea name="area_6" class="form-control @error('area_6') is-invalid @enderror">{{ old('area_6', $truck->area_6) }}</textarea>
        @error('area_6')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }} </strong>
            </span>
        @enderror
    </div>




</div>
