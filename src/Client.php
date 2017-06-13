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

namespace BitcoinVietnam\ShapeShift;

use BitcoinVietnam\ShapeShift\Response;
use BitcoinVietnam\ShapeShift\Request;

/**
 * Class Client
 *
 * @package BitcoinVietnam\ShapeShift
 */
class Client
{
    const BASE_URL = 'https://shapeshift.io';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var Utils\Manager
     */
    private $utils;

    /**
     * Client constructor.
     *
     * @param string|null $apiKey
     */
    public function __construct($apiKey = null)
    {
        $this->apiKey = $apiKey;
        $this->utils = new Utils\Manager();
    }

    /**
     * @param string $pair
     * @return Response\Get\MarketInfo
     */
    public function getMarketInfo($pair)
    {
        return $this->utils->serializer()->deserialize(
            $this->utils->guzzle()->get(self::BASE_URL . '/marketinfo/' . strtolower($pair))->getBody()->getContents(),
            Response\Get\MarketInfo::class,
            'json'
        );
    }

    /**
     * @param string $pair
     * @return Response\Get\Rate
     */
    public function getRate($pair)
    {
        return $this->utils->serializer()->deserialize(
            $this->utils->guzzle()->get(self::BASE_URL . '/rate/' . strtolower($pair))->getBody()->getContents(),
            Response\Get\Rate::class,
            'json'
        );
    }

    /**
     * @param float $amount
     * @param string $withdrawal
     * @param string $pair
     * @param string|null $returnAddress
     * @param string|null $destTag
     * @param string|null $rsAddress
     * @return Response\Post\SendAmount
     */
    public function postSendAmount($amount, $withdrawal, $pair, $returnAddress = null, $destTag = null, $rsAddress = null)
    {
        $request = $this->utils->request()->post()->sendAmount()
            ->setAmount((float) $amount)
            ->setWithdrawal((string) $withdrawal)
            ->setPair((string) $pair)
            ->setReturnAddress($returnAddress)
            ->setDestTag($destTag)
            ->setRsAddress($rsAddress)
            ->setApiKey($this->apiKey);

        return $this->utils->serializer()->deserialize(
            $this->utils->guzzle()->post(
                self::BASE_URL . '/sendamount',
                ['json' => $this->utils->serializer()->toArray($request)]
            )->getBody()->getContents(),
            Response\Post\SendAmount::class,
            'json'
        );
    }
}