<?php
namespace Kav\Tasks;

class Task1
{
    /**
     * Всего картин
     */
    public const TOTAL_PICTURES = 80;
    /**
     * Выполнено фломастерами
     */
    public const FELT_PENS = 23;
    /**
     * Выполнено карандашами
     */
    public const PENCILS = 40;

    /**
     * Рассчитывает количество картин, написанных красками
     * @return int количество
     */
    public static function getPaints(): int
    {
        return self::TOTAL_PICTURES - self::FELT_PENS - self::PENCILS;
    }
}