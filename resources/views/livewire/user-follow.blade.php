<div>
    @empty($following)
        <button class="px-2 py-1 text-sm text-green-700 bg-green-200 rounded-xl hover:text-green-800 hover:bg-green-300" wire:click.prevent="follow">Follow</button>
    @else
        <button class="px-2 py-1 text-sm text-red-700 bg-red-200 rounded-xl hover:text-red-800 hover:bg-red-300" wire:click.prevent="follow">Unfollow</button>
    @endempty
</div>
