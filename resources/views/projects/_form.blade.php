
@csrf
<div class="form-group">

    <label class="label" for="title">Titulo del proyecto</label>

    <input class="form-control @error('title') is-invalid @else border-0 @enderror bg-light shadow-sm"  id="title"  type="text" name="title" value="{{ old('title', $project->title) }}">

</div>

<div class="form-group">

    <label for="description"> Descripción del proyecto </label>
    <textarea id="description" class="form-control @error('description') is-invalid @else border-0 @enderror bg-light shadow-sm" name="description">{{ old('description', $project->description) }}</textarea>

</div>


<button class="btn btn-primary">{{ $btnText }}</button>
