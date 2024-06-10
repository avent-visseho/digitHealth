<div>
    <div class="chat-conversation p-3 px-2" data-simplebar>
        <ul class="list-unstyled mb-0">
            <li class="chat-day-title">
                <span class="title">Today</span>
            </li>
            @foreach ($chats as $chat)
                @if ($chat['user'] === 'ai')
                    <li>
                        <div class="conversation-list">
                        <div class="ctext-wrap">
                            <div class="ctext-wrap-content">
                                <p class="mb-0">{{ $chat['response'] }}</p>
                            </div>
                        </div>
                        </div>

                    </li>
                @else
                    <li>
                        {{-- <div class="conversation-list"> --}}
                        <div class="ctext-wrap">
                            <div class="ctext-wrap-content">
                                <p class="mb-0">{{ $chat['request'] }}</p>
                            </div>
                        </div>
                        {{-- </div> --}}

                    </li>
                @endif
            @endforeach


        </ul>
    </div>

    <div class="p-3 border-top">
        <div class="row">
            <div class="col">
                <div class="position-relative">
                    <input wire:model="input" type="text" class="form-control border bg-soft-light"
                        placeholder="Enter Message...">
                </div>
            </div>
            <div class="col-auto">
                <button wire:click.prevent="submit" type="submit"
                    class="btn btn-primary chat-send w-md waves-effect waves-light"><span
                        class="d-none d-sm-inline-block me-2">Send</span> <i
                        class="mdi mdi-send float-end"></i></button>
            </div>
        </div>
    </div>
</div>
