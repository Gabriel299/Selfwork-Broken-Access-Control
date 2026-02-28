<div class="article-image-preview">
  <div class="mb-3">
    <label for="imageUrl" class="form-label fw-semibold">Image URL</label>
    <input 
      type="search" 
      class="form-control rounded-pill @error('imageUrl') is-invalid @enderror" 
      id="imageUrl" 
      placeholder="https://example.com/image.jpg" 
      wire:model="imageUrl"
      wire:change="updateImageUrl"
    >
    @error('imageUrl')
      <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
  </div>

  @if($imageData)
    <div class="preview-container mb-3 border rounded-3 p-3 bg-light">
      <label class="form-label fw-semibold">Preview</label>
      <div class="image-preview-wrapper">
        <img 
          src="{{ $imageData }}" 
          alt="Image preview" 
          class="img-fluid rounded-2 w-100"
          style="max-height: 400px; object-fit: cover;"
        >
      </div>
    </div>
  @endif
</div>