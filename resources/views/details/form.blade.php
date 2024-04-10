

<div class="row">
<!----------Main Title------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="main_title">Main Title</label>
        <input type="text" name="main_title" class="form-control @error('main_title') is-invalid @enderror" value="{{ old('main_title', $item->main_title ) }} " />
        @error('main_title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>
<input type="hidden" name="item_id" value="{{$item->id}}" />
<div class="col-md-6">
<!----------Sub Title------------>
    <div class="form-group">
        <label for="sub_title">Sub Title</label>
        <input type="text" name="sub_title" class="form-control @error('sub_title') is-invalid @enderror" value="{{ old('sub_title', $item->sub_title ) }} " />
        @error('sub_title')
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
        <textarea type="text" name="paragraph" cols="5" class="form-control @error('paragraph') is-invalid @enderror" value="{{ old('paragraph', $item->paragraph ) }} " ></textarea>
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
        <input type="text" name="l_1" class="form-control @error('l_1') is-invalid @enderror" value="{{ old('l_1', $item->l_1 ) }} " />
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
        <input type="text" name="l_2" class="form-control @error('l_2') is-invalid @enderror" value="{{ old('l_2', $item->l_2 ) }} " />
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
        <input type="text" name="l_3" class="form-control @error('l_3') is-invalid @enderror" value="{{ old('l_3', $item->l_3 ) }} " />
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
        <input type="text" name="l_4" class="form-control @error('l_4') is-invalid @enderror" value="{{ old('l_4', $item->l_4 ) }} " />
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
        <input type="text" name="l_5" class="form-control @error('l_5') is-invalid @enderror" value="{{ old('l_5', $item->l_5 ) }} " />
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
        <input type="text" name="l_6" class="form-control @error('l_6') is-invalid @enderror" value="{{ old('l_6', $item->l_6 ) }} " />
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
        <input type="text" name="l_7" class="form-control @error('l_7') is-invalid @enderror" value="{{ old('l_7', $item->l_7 ) }} " />
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
        <input type="text" name="l_8" class="form-control @error('l_8') is-invalid @enderror" value="{{ old('l_8', $item->l_8 ) }} " />
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
        <input type="text" name="l_9" class="form-control @error('l_9') is-invalid @enderror" value="{{ old('l_9', $item->l_9 ) }} " />
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
        <input type="text" name="l_10" class="form-control @error('l_10') is-invalid @enderror" value="{{ old('l_10', $item->l_10 ) }} " />
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
        <input type="text" name="l_11" class="form-control @error('l_11') is-invalid @enderror" value="{{ old('l_11', $item->l_11 ) }} " />
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
        <input type="text" name="l_12" class="form-control @error('l_12') is-invalid @enderror" value="{{ old('l_12', $item->l_12 ) }} " />
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
        <input type="text" name="l_13" class="form-control @error('l_13') is-invalid @enderror" value="{{ old('l_13', $item->l_13 ) }} " />
        @error('l_13')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>



<!----------LIST 14 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_14">List 14</label>
        <input type="text" name="l_14" class="form-control @error('l_14') is-invalid @enderror" value="{{ old('l_14', $item->l_14 ) }} " />
        @error('l_14')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>




<!----------LIST 15 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_15">List 15</label>
        <input type="text" name="l_15" class="form-control @error('l_15') is-invalid @enderror" value="{{ old('l_15', $item->l_15 ) }} " />
        @error('l_15')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>



<!----------LIST 16 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_16">List 16</label>
        <input type="text" name="l_16" class="form-control @error('l_16') is-invalid @enderror" value="{{ old('l_16', $item->l_16 ) }} " />
        @error('l_16')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>



<!----------LIST 17 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_17">List 17</label>
        <input type="text" name="l_17" class="form-control @error('l_17') is-invalid @enderror" value="{{ old('l_17', $item->l_17 ) }} " />
        @error('l_17')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>


<!----------LIST 18 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_8">List 18</label>
        <input type="text" name="l_8" class="form-control @error('l_8') is-invalid @enderror" value="{{ old('l_8', $item->l_8 ) }} " />
        @error('l_8')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>


<!----------LIST 19 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_19">List 19</label>
        <input type="text" name="l_19" class="form-control @error('l_19') is-invalid @enderror" value="{{ old('l_19', $item->l_19 ) }} " />
        @error('l_19')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>



<!----------LIST 20 ------------>
<div class="col-md-6">
    <div class="form-group">
        <label for="l_20">List 20</label>
        <input type="text" name="l_20" class="form-control @error('l_20') is-invalid @enderror" value="{{ old('l_20', $item->l_20 ) }} " />
        @error('l_20')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }} </strong>
        </span>
        @enderror
    </div>
</div>


</div>