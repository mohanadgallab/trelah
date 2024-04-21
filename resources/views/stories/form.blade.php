

<div class="row">
<!----------Main Title------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $service->title ) }} " />
        @error('main_title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>
<input type="hidden" name="item_id" value="{{$service->id}}" />
<div class="col-md-6">
<!----------Sub Title------------>
    <div class="form-group">
        <label for="subtitle">Sub Title</label>
        <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" value="{{ old('subtitle', $service->subtitle ) }} " />
        @error('subtitle')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>    


<!----------Paragraph------------>
<div class="col-md-12">
    <div class="form-group">
        <label for="paragraph">Paragraph</label>
        <textarea type="text" name="paragraph" cols="5" class="form-control @error('paragraph') is-invalid @enderror" value="{{ old('paragraph', $service->paragraph ) }} " ></textarea>
        @error('paragraph')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>


<!----------LIST 1 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_1">List 1</label>
        <input type="text" name="l_1" class="form-control @error('l_1') is-invalid @enderror" value="{{ old('l_1', $service->l_1 ) }} " />
        @error('l_1')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>

<!----------LIST 2 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_2">List 2</label>
        <input type="text" name="l_2" class="form-control @error('l_2') is-invalid @enderror" value="{{ old('l_2', $service->l_2 ) }} " />
        @error('l_2')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>

<!----------LIST 3 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_3">List 3</label>
        <input type="text" name="l_3" class="form-control @error('l_3') is-invalid @enderror" value="{{ old('l_3', $service->l_3 ) }} " />
        @error('l_3')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>






<!----------LIST 4 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_4">List 4</label>
        <input type="text" name="l_4" class="form-control @error('l_4') is-invalid @enderror" value="{{ old('l_4', $service->l_4 ) }} " />
        @error('l_4')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>

<!----------LIST 5 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_5">List 5</label>
        <input type="text" name="l_5" class="form-control @error('l_5') is-invalid @enderror" value="{{ old('l_5', $service->l_5 ) }} " />
        @error('l_5')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>

<!----------LIST 6 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_6">List 6</label>
        <input type="text" name="l_6" class="form-control @error('l_6') is-invalid @enderror" value="{{ old('l_6', $service->l_6 ) }} " />
        @error('l_6')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>

<!----------LIST 7 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_7">List 7</label>
        <input type="text" name="l_7" class="form-control @error('l_7') is-invalid @enderror" value="{{ old('l_7', $service->l_7 ) }} " />
        @error('l_7')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>


<!----------LIST 8 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_8">List 8</label>
        <input type="text" name="l_8" class="form-control @error('l_8') is-invalid @enderror" value="{{ old('l_8', $service->l_8 ) }} " />
        @error('l_8')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>


<!----------LIST 9 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_9">List 9</label>
        <input type="text" name="l_9" class="form-control @error('l_9') is-invalid @enderror" value="{{ old('l_9', $service->l_9 ) }} " />
        @error('l_9')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>


<!----------LIST 10 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_10">List 10</label>
        <input type="text" name="l_10" class="form-control @error('l_10') is-invalid @enderror" value="{{ old('l_10', $service->l_10 ) }} " />
        @error('l_10')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>


<!----------LIST 11 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_11">List 11</label>
        <input type="text" name="l_11" class="form-control @error('l_11') is-invalid @enderror" value="{{ old('l_11', $service->l_11 ) }} " />
        @error('l_11')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>


<!----------LIST 12 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_12">List 12</label>
        <input type="text" name="l_12" class="form-control @error('l_12') is-invalid @enderror" value="{{ old('l_12', $service->l_12 ) }} " />
        @error('l_12')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>



<!----------LIST 13 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_13">List 13</label>
        <input type="text" name="l_13" class="form-control @error('l_13') is-invalid @enderror" value="{{ old('l_13', $service->l_13 ) }} " />
        @error('l_13')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>