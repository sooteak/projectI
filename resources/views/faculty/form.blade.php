<div class="form-group">
    <label for="name" class="pr-4">Name:</label><br>
    <input type="text" name="name" value="{{ old('name') ?? $faculty->name}}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>


<div class="form-group">
    <label for="email">Email:</label><br>
    <input type="text" name="email" value="{{ old('email') ?? $faculty->email}}" class="form-control">
    <div>{{ $errors->first('email') }}</div>
</div>

<div class="form-group">
    <label for="course_id">Course:</label><br>
    <select name="course_id" id="course_id" class="form-control">
        @foreach ($courses as $course)
            <option value="{{ $course->id }}"{{ $course->id == $faculty->course_id ? 'selected' : '' }}>{{ $course->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="department">Department:</label><br>
    <input type="text" name="department" value="{{ old('department') ?? $faculty->department }}" class="form-control">
    <div>{{ $errors->first('department') }}</div>
</div>
<div class="form-group">
    <label for="position">Position:</label><br>
    <input type="text" name="position" value="{{ old('position') ?? $faculty->position }}" class="form-control">
    <div>{{ $errors->first('position') }}</div>
</div>
<div class="form-group">
    <label for="ext_number">Ext No.:</label><br>
    <input type="text" name="ext_number" value="{{ old('ext_number') ?? $faculty->ext_number }}" class="form-control">
    <div>{{ $errors->first('ext_number') }}</div>
</div>
<div class="form-group">
    <label for="curriculum_vitae">Curriculum Vitae:</label><br>
    <input type="file" name="curriculum_vitae"  value="{{ old('curriculum_vitae') ?? $faculty->curriculum_vitae }}" class="form-control">
    <div>{{ $errors->first('curriculum_vitae') }}</div>
</div>

@csrf
