<div class="form-group">
    <label for="name" class="pr-4">Name:</label><br>
    <input type="text" name="name" value="{{ old('name') ?? $club->name}}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>


<div class="form-group">
    <label for="description">Description:</label><br>
    <input type="text" name="description" value="{{ old('description') ?? $club->description}}" class="form-control">
    <div>{{ $errors->first('description') }}</div>
</div>

<div class="form-group">
    <label for="member">Member:</label><br>
    <input type="text" name="member" value="{{ old('member') ?? $club->member}}" class="form-control">
    <div>{{ $errors->first('member') }}</div>
</div>

<div class="form-group d-flex flex-column">
    <label for="image">Profile Image</label>
    <input type="file" name="image" class="py-2">
    <div>{{ $errors->first('image') }}</div>
</div>




@csrf
