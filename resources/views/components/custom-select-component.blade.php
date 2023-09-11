<div class="custom-select {{ $small ? 'custom-select--small' : '' }} {{ $white ? 'custom-select--white' : '' }}" id="{{ $id }}">
    <div class="custom-select__head">
        <button class="custom-select__btn collapsed" type="button" data-tab-target="{{ $tabBody }}">
            <span class="custom-select__title"></span>
            <img class="custom-select__icon" src="{{ asset($small ? 'icons/arrow-down-grey.svg' : 'icons/arrow-down-regular.svg') }}" alt="Стрелка вниз" data-tab-icon>
        </button>
    </div>
    <div class="custom-select__main" data-tab-body="{{ $tabBody }}" data-simplebar data-simplebar-auto-hide="false">
        <ul class="custom-select__options">
            @foreach ($options as $item)
            <li class="custom-select__option" data-option-value="{{ $item['value'] }}">{{ $item['text'] }}</li>
            @endforeach
        </ul>
    </div>
</div>