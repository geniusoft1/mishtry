<?php

namespace App\Services;

use App\Traits\FileManagerTrait;

class ChattingService
{
    use FileManagerTrait;

    /**
     * @param object $request
     * @return array
     */
    public function getAttachment(object $request):array
    {
        $attachment = [];
        if ($request->file('image')) {
            foreach ($request['image'] as $key=>$value) {
                $attachment[] = $this->upload('chatting/', 'webp', $value);
            }
        }
        return $attachment;
    }

    /**
     * @param object $request
     * @param string|int $shopId
     * @param string|int $vendorId
     * @return array
     */
    public function getDeliveryManChattingData(object $request , string|int $shopId, string|int $vendorId):array
    {
        return [
            'delivery_man_id' => $request['delivery_man_id'],
            'seller_id' => $vendorId,
            'shop_id' => $shopId,
            'message' => $request['message'],
            'attachment' =>json_encode($this->getAttachment($request)),
            'sent_by_seller' => 1,
            'seen_by_seller' => 1,
            'seen_by_delivery_man' => 0,
            'created_at' => now(),
        ];
    }

    /**
     * @param object $request
     * @param string|int $shopId
     * @param string|int $vendorId
     * @return array
     */
    public function getCustomerChattingData(object $request , string|int $shopId, string|int $vendorId):array
    {
        return [
            'user_id' => $request['user_id'],
            'seller_id' => $vendorId,
            'shop_id' => $shopId,
            'message' => $request->message,
            'attachment' =>json_encode($this->getAttachment($request)),
            'sent_by_seller' => 1,
            'seen_by_seller' => 1,
            'seen_by_customer' => 0,
            'created_at' => now(),
        ];
    }

    /**
     * @param object $request
<<<<<<< HEAD
     * @param string $type
     * @return array
     */
    public function addChattingData(object $request,string $type):array
    {
        $attachment = $this->getAttachment(request: $request);
        return [
            'delivery_man_id' => $type == 'delivery-man' ? $request['delivery_man_id'] : null ,
            'user_id' => $type == 'customer' ? $request['user_id'] : null ,
=======
     * @return array
     */
    public function addChattingData(object $request):array
    {
        $attachment = $this->getAttachment(request: $request);
        return [
            'delivery_man_id' => $request['delivery_man_id'],
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            'admin_id' => 0,
            'message' => $request['message'],
            'attachment' => json_encode($attachment),
            'sent_by_admin' => 1,
            'seen_by_admin' => 1,
<<<<<<< HEAD
            'seen_by_customer' => 0,
            'seen_by_delivery_man' => $type == 'delivery-man' ? 0 : null,
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            'created_at' => now(),
        ];
    }
}
