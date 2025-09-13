@csrf
<div class="space-y-4">
  <div>
    <label class="block text-sm font-medium">Title</label>
    <input name="title" value="{{ old('title', $post->title ?? '') }}"
           class="mt-1 w-full border rounded px-3 py-2" required>
    @error('title') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
  </div>

  <div>
    <label class="block text-sm font-medium">Body</label>
    <textarea name="body" rows="6" class="mt-1 w-full border rounded px-3 py-2" required>{{ old('body', $post->body ?? '') }}</textarea>
    @error('body') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
  </div>
</div>

<div class="mt-6 flex gap-3">
  <button class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
  <a href="{{ route('posts.index') }}" class="px-4 py-2 border rounded">Cancel</a>
</div>
