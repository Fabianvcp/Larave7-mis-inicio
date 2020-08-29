
@csrf
<label for="">
    Titulo del proyecto <br>
    <input type="text" name="title" value="{{ old('title', $project->title) }}">
</label>
<br>
<label for="">
    Descripción del proyecto <br>
    <textarea name="description">{{ old('description', $project->description) }}</textarea>
</label>
<br>

<button>{{ $btnText }}</button>
