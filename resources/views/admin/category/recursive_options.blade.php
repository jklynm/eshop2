@foreach($parents as $parent)
    <option value="{{ $parent->id }}" {{ ($selected_id == $parent->id) ? "selected" : "" }}>  {{ $parent->title }}</option>
    @include('admin.category.recursive_options', ['parents' => $parent->subCategories, 'selected_id' => $selected_id ?? ""])
@endforeach



