<div class="mb-3">

    <label class="form-label">

        Titre

    </label>

    <input

        type="text"

        name="title"

        value="{{ old('title',$service->title ?? '') }}"

        class="form-control">

</div>

<div class="mb-3">

    <label>

        Résumé

    </label>

    <textarea

        name="excerpt"

        rows="3"

        class="form-control">{{ old('excerpt',$service->excerpt ?? '') }}</textarea>

</div>

<div class="mb-3">

    <label>

        Description

    </label>

    <textarea

        name="description"

        rows="8"

        class="form-control">{{ old('description',$service->description ?? '') }}</textarea>

</div>

<div class="row">

    <div class="col-md-6">

        <label>

            Icône

        </label>

        <input

            type="text"

            name="icon"

            value="{{ old('icon',$service->icon ?? '') }}"

            class="form-control">

    </div>

    <div class="col-md-6">

        <label>

            Position

        </label>

        <input

            type="number"

            name="position"

            value="{{ old('position',$service->position ?? 1) }}"

            class="form-control">

    </div>

</div>

<div class="mt-3">

    <label>

        Image

    </label>

    <input

        type="file"

        name="image"

        class="form-control">

</div>

@if(isset($service) && $service->image)

<div class="mt-3">

    <img

        src="{{ asset('storage/'.$service->image) }}"

        width="180"

        class="rounded">

</div>

@endif

<div class="form-check mt-4">

    <input

        type="checkbox"

        name="featured"

        value="1"

        @checked(old('featured',$service->featured ?? false))

        class="form-check-input">

    <label class="form-check-label">

        Service mis en avant

    </label>

</div>

<div class="form-check">

    <input

        type="checkbox"

        name="is_active"

        value="1"

        @checked(old('is_active',$service->is_active ?? true))

        class="form-check-input">

    <label class="form-check-label">

        Service actif

    </label>

</div>

<button class="btn btn-primary mt-4">

    Enregistrer

</button>