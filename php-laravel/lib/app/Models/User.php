<?php
/**
 * User
 */
namespace app\Models;

/**
 * User
 */
class User {

    /** @var string $id ID番号*/
    public $id = "";

    /** @var string $name 名前*/
    public $name = "";

    /** @var \app\Models\ChatRoomListUserStatus $status */
    public $status;

    /** @var \DateTime $registeredDate */
    public $registeredDate;

}
