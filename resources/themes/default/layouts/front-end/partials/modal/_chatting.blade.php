<div class="modal fade" id="chatting_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-faded-info">
<<<<<<< HEAD
                <h6 class="modal-title text-capitalize" id="exampleModalLongTitle">
                    @if(isset($seller) && isset($user_type) && $user_type == 'admin')
                        {{ translate('send_message_to') }} {{ getWebConfig(name: 'company_name') }}
                    @elseif(isset($seller) && isset($user_type) && $user_type == 'seller')
                        {{ translate('send_message_to') }} {{ $seller->shop['name'] }}
                    @endif
                </h6>
=======
                <h5 class="modal-title text-capitalize" id="exampleModalLongTitle">{{translate('send_message_to_vendor')}}</h5>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('messages_store')}}" method="post" id="seller-chat-form">
                    @csrf
<<<<<<< HEAD

                    @if(isset($seller) && isset($user_type) && $user_type == 'admin')
                        <input value="{{ 0 }}" name="shop_id" hidden>
                        <input value="{{ 0 }}" name="admin_id" hidden>
                    @elseif(isset($seller) && isset($user_type) && $user_type == 'seller')
                        <input value="{{ $seller->shop['id'] }}" name="shop_id" hidden>
                        <input value="{{ $seller['id'] }}" name="seller_id" hidden>
                    @endif

                    <textarea name="message" class="form-control min-height-100px max-height-200px" required placeholder="{{ translate('Write_here') }}..."></textarea>
=======
                    @if(isset($seller->shop->id) && $seller->shop->id != 0)
                        <input value="{{$seller->shop->id}}" name="shop_id" hidden>
                        <input value="{{ $seller['id'] }}}" name="seller_id" hidden>
                    @endif

                    <textarea name="message" class="form-control" required placeholder="{{ translate('Write_here') }}..."></textarea>
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                    <br>
                    <div class="justify-content-end gap-2 d-flex flex-wrap">
                        <a href="{{route('chat', ['type' => 'seller'])}}" class="btn btn-soft-primary bg--secondary border">
                            {{translate('go_to_chatbox')}}
                        </a>
<<<<<<< HEAD
                        <button class="btn btn--primary text-white">{{translate('send')}}</button>
=======
                        @if(isset($seller->shop->id) && $seller->shop->id  != 0)
                            <button class="btn btn--primary text-white">{{translate('send')}}</button>
                        @else
                            <button class="btn btn--primary text-white" disabled>
                                {{translate('send')}}
                            </button>
                        @endif
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
