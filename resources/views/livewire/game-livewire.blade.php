@push('title')
    Games
@endpush

@include('livewire.game.game_' . app()->getLocale())
