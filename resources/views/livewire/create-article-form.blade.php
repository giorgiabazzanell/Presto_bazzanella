<form wire:submit="save">
    @if (session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input wire:model.blur="title" id="title" type="text" class="form-control @error('title') is-invalid @enderror">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea wire:model.blur="description" id="description" rows="5" class="form-control @error('description') is-invalid @enderror"></textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input wire:model.blur="price" id="price" type="text" class="form-control @error('price') is-invalid @enderror">
        @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Categoria</label>
        <select wire:model.live="category" id="category" class="form-select @error('category') is-invalid @enderror">
            <option value="">Seleziona una categoria</option>
            @forelse($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @empty
                <option value="">Nessuna categoria disponibile</option>
            @endforelse
        </select>
        @error('category')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-dark">Pubblica articolo</button>
    </div>
</form>
