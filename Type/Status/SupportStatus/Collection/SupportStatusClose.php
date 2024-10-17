<?php

declare(strict_types=1);

namespace BaksDev\Support\Type\Status\SupportStatus\Collection;

use BaksDev\Support\Type\Status\SupportStatus\SupportStatusInterface;
use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

#[AutoconfigureTag('baks.support.status')]
final class SupportStatusClose implements SupportStatusInterface
{
    public const string PARAM = 'closed';

    public function getValue(): string
    {
        return self::PARAM;
    }

    public static function priority(): int
    {
        return 20;
    }

    /** Проверяет, относится ли значение к данному объекту */
    public static function equals(string $param): bool
    {
        return self::PARAM === $param;
    }
}
