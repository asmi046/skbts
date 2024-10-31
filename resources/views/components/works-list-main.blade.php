<div class="work_list_wrapper">
    @foreach ($all_parts as $item)
        <x-work-list :item="$item"></x-work-list>
    @endforeach
</div>
