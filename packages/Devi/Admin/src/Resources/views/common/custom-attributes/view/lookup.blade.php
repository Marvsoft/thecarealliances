@php
    $lookUpEntity = app('Devi\Attribute\Repositories\AttributeRepository')->getLookUpEntity($attribute->lookup_type, $value);
@endphp

{{ $lookUpEntity ? $lookUpEntity->name : __('admin::app.common.not-available') }}