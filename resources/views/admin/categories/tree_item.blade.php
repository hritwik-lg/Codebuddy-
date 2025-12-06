<li>
    {{ $category->name }}

    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-info">Edit</a>
    
    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline">
        @csrf @method('DELETE')
        <button class="btn btn-sm btn-danger">Delete</button>
    </form>

    @if ($category->children->count())
        <ul>
            @foreach ($category->children as $child)
                @include('admin.categories.tree_item', ['category' => $child])
            @endforeach
        </ul>
    @endif
</li>