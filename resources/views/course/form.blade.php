
<div class="form-group">
    <label for="name" class="pr-4">Name:</label><br>
    <input type="text" name="name" value="{{ old('name') ?? $course->name}}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>


<div class="form-group">
    <label for="prerequisities">Prerequisities:</label><br>
    <input type="text" name="prerequisities" value="{{ old('prerequisities') ?? $course->prerequisities }}" class="form-control">
    <div>{{ $errors->first('prerequisities') }}</div>
</div>


</div>
<div class="form-group">
    <label for="description">Description:</label><br>
    <input type="text" name="description" value="{{ old('description') ?? $course->desription }}" class="form-control">
    <div>{{ $errors->first('description') }}</div>
</div>


@csrf
