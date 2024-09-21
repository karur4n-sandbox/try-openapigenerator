<?php
/**
 * ChatRoomListUser
 */
namespace app\Models;

/**
 * ChatRoomListUser
 */
class ChatRoomListUser {

    /** @var string $id ID番号*/
    public $id = "";

    /** @var string $name 名前*/
    public $name = "";

    /** @var string $nickname */
    public $nickname = "";

    /** @var \app\Models\ChatRoomListUserStatus $status */
    public $status;

    /** @var \DateTime $registeredDate */
    public $registeredDate;

    /** @var string $note */
    public $note = "";

}
