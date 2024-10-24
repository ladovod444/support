<?php
/*
 *  Copyright 2024.  Baks.dev <admin@baks.dev>
 *  
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is furnished
 *  to do so, subject to the following conditions:
 *  
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *  
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 */

declare(strict_types=1);

namespace BaksDev\Support\UseCase\Admin\New\Message;

use BaksDev\Support\Entity\Message\SupportMessageInterface;
use DateTimeImmutable;
use Symfony\Component\Validator\Constraints as Assert;

/** @see SupportMessage */
final class SupportMessageDTO implements SupportMessageInterface
{
    /** Внешний Id сообщения */
    #[Assert\NotBlank]
    private ?string $external = null;

    /** Никнейм */
    #[Assert\NotBlank]
    #[Assert\Length(max: 100)]
    private ?string $name = null;

    /** Текст сообщения */
    #[Assert\NotBlank]
    #[Assert\Length(max: 4096)]
    private ?string $message;

    #[Assert\NotBlank]
    private ?DateTimeImmutable $date;


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }

    public function getExternal(): ?string
    {
        return $this->external;
    }

    public function setExternal(string|int|null $external): void
    {
        if($external !== null){
            $this->external = (string) $external;
        }

    }

}
