<div class="form-group">
    <label for="name" class="pr-4">Name:</label><br>
    <input type="text" name="name" value="{{ old('name') ?? $club->name}}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group">
    <label for="name" class="pr-4">Category:</label><br>
    <select name="category" id="category" class="form-control">
        <option value=""></option>
        <option value="0">Student Union/ Student Society</option>
        <option value="1">Sport Society</option>
        <option value="2">Performance Society</option>
        <option value="3">Religion / Charity Society</option>
        <option value="4">Language / Cultural / Art</option>
        <option value="5">Others</option>
    </select>
</div>


{{-- <div class="form-group">
    <select name="category" id="category" class="form-control">
        <option value="" disabled>Category</option>
        @foreach ($club->categoryOptions() as $categoryOptionKey => $categoryOptionValue )
            <option value="{{ $categoryOptionKey }}" {{ $club->category == $categoryOptionValue ? 'selected' : ''}}>{{ $categoryOptionValue }}</option>
        @endforeach
    </select>
</div> --}}



<div class="form-group">
    <label for="link">Link:</label><br>
    <input type="text" name="link" value="{{ old('link') ?? $club->link}}" class="form-control">
    <div>{{ $errors->first('link') }}</div>
</div>





@csrf
