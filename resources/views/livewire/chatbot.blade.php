<div>
<style>
    #content-request::before {
    content: "";
    position: absolute;
    border: 5px solid transparent;
    border-right-color: pink;
    border-top-color: pink;
    left: -10px;
    top: 0;
}
</style> 
    <div class="chat-conversation p-3 px-2" data-simplebar>
        <ul class="list-unstyled mb-0">
            <li class="chat-day-title">
                <span class="title">Today</span>
            </li>
            @foreach ($chats as $chat)
                @if ($chat['user'] === 'ai')
                    <li class="text-end">
                        <div class="conversation-list text-end">
                            <div class="ctext-wrap">
                                <div class="ctext-wrap-content">
                                    <p class="mb-0 text-white">{{ $chat['response'] }}</p>
                                </div>
                            </div>
                        </div>
                    </li>
                @else
                    <li class="text-start">
                        <div class="conversation-list text-start rounded-3">  <div class="ctext-wrap">
                                <div class="ctext-wrap-content " id="content-request" style="background-color:pink !important;">
                                    <p class="mb-0 text-black">{{ $chat['request'] }}</p>
                                </div>
                            </div>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>

    <div class="p-3 border-top">
        <div class="row">
            <div class="col">
                <div class="position-relative">
                    <input wire:model="input" type="text" class="form-control border bg-soft-light" placeholder="Enter Message...">
                </div>
            </div>
            <div class="col-auto">
                <button wire:click.prevent="submit" type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light">
                    <span class="d-none d-sm-inline-block me-2">Send</span>
                    <i class="mdi mdi-send float-end"></i>
                </button>
            </div>
        </div>
    </div>
</div>
