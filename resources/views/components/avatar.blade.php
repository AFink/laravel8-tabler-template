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
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user avatar-icon" width="24"
            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="12" cy="7" r="4"></circle>
            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
        </svg>
    </span>
@endif
