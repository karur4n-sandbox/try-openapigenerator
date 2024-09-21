<?php
/**
 * Pet
 */
namespace app\Models;

/**
 * Pet
 */
class Pet {

    /** @var int $id ペットID番号*/
    public $id = 0;

    /** @var \app\Models\Category $category カテゴリー*/
    public $category;

    /** @var string $name 名前*/
    public $name = "";

    /** @var string[] $photoUrls 写真URL*/
    public $photoUrls = [];

    /** @var \app\Models\Tag[] $tags タグ*/
    public $tags = [];

    /** @var string $status ペット販売状況*/
    public $status = "";

}
