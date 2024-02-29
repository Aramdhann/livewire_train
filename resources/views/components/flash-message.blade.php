@if(flash()->message)
{{-- give default value in side flash()->class with default is success
    you can change class inside action of livewire:form
    --}}
<div class="alert alert-{{ flash()->class ?? 'success' }}" role="alert">
    @if(flash()->class === 'success')
        <i class="bi bi-check-circle-fill me-2"></i>
    @endif
    @if(flash()->class === 'info')
        <i class="bi bi-info-circle-fill me-2"></i>
    @endif
    @if(flash()->class === 'warning')
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
    @endif
    @if(flash()->class === 'danger')
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
    @endif

    
    {{ flash()->message }}
</div>
@endif
