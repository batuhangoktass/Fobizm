<?php


class Comment extends  Model
{
    /**
     * @var BaseModel
     */
    private static $baseModel = null;

    /**
     * @return BaseModel
     */
    public static function getBaseModel(): BaseModel
    {
        if (is_null(self::$baseModel)) {
            self::$baseModel = new BaseModel("User", "users");
        }
        return self::$baseModel;
    }
}