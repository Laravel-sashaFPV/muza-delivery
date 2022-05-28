@empty
    No messages yet. Type one below
@endforelse
<div class="mt-6 border-top">
    <form wire:submit.prevent="sendMessage">
        <div class="md:inline-flex w-full">
            <div class="md:w-9/12 w-full max-w-sm mx-auto space-y-5">
                <input wire:model.defer="messageText" type="text"
                    placeholder="New Message"
                    class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-top">
            </div>
        </div>

        <div class="md:w-3/12 md:pl-6 space-y-5">
            <button type="submit"
                class="mt-2 inline-flex items-center px-4 py-3 bg-gray-800 border">
                Send
            </button>
        </div>
    </form>
</div>
