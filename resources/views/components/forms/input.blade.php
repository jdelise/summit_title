@props([
    'show_label' => 'true',
    'label' => 'Use the label property',
])
<div class="mb-4 sm:mb-8">
    @if($show_label === 'true')
        <label for="{{$attributes->get('id')}}" class="block mb-2 text-sm font-medium">{{$label}}</label>
    @endif
    <input {{$attributes->merge(['class' => 'py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 sm:p-4'])}}>
</div>
