@props(['size' => 'sm', 'model' => null, 'src' => null])
@if (!is_null($src))
    <span class="avatar avatar-{{ $size }}" style="background-image: url({{ $src }})"></span>
@elseif (Laravel\Jetstream\Jetstream::managesProfilePhotos() && !is_null($model))
    @if (!is_null($model->profile_photo_url))
        <span class="avatar avatar-{{ $size }}"
            style="background-image: url({{ $model->profile_photo_url }})"></span>
    @else
        <span class="avatar avatar-{{ $size }}">{{ $model->acronym() }}</span>
    @endif
@else
    <span class="avatar avatar-{{ $size }}">
        <x-tablericon-user class="avatar-icon" />
    </span>
@endif
