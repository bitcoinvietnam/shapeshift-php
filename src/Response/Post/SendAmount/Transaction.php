<?php
/**
 * Copyright (c) 2017 Bitcoin Viet Nam Co., Ltd.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to
 * do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 * THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace BitcoinVietnam\ShapeShift\Response\Post\SendAmount;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Transaction
 *
 * @package BitcoinVietnam\ShapeShift\Response\Post\SendAmount
 */
class Transaction
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("pair")
     */
    private $pair;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("withdrawal")
     */
    private $withdrawal;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("withdrawalAmount")
     */
    private $withdrawalAmount;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deposit")
     */
    private $deposit;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("depositAmount")
     */
    private $depositAmount;

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("expiration")
     */
    private $expiration;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("quotedRate")
     */
    private $quotedRate;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("apiPubKey")
     */
    private $apiPubKey;

    /**
     * @return string
     */
    public function getPair()
    {
        return $this->pair;
    }

    /**
     * @return string
     */
    public function getWithdrawal()
    {
        return $this->withdrawal;
    }

    /**
     * @return float
     */
    public function getWithdrawalAmount()
    {
        return $this->withdrawalAmount;
    }

    /**
     * @return string
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * @return float
     */
    public function getDepositAmount()
    {
        return $this->depositAmount;
    }

    /**
     * @return int
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @return float
     */
    public function getQuotedRate()
    {
        return $this->quotedRate;
    }

    /**
     * @return string
     */
    public function getApiPubKey()
    {
        return $this->apiPubKey;
    }
}