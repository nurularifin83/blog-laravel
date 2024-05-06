@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert alert-info alert-dismissible"']) }} role="alert">
        {{ $status }}
    </div>
@endif