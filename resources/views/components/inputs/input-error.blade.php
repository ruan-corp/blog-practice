@props(['fieldIdentifier'])

@error($fieldIdentifier)
    <span class="text-red-500">{{ $message }}</span>
@enderror
