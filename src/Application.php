<?php
declare(strict_types=1);

namespace Weida\JinritemaiOpen;

use Weida\JinritemaiCore\AbstractApplication;
use Weida\JinritemaiCore\Contract\WithAccessTokenClientInterface;
use Weida\JinritemaiCore\WithAccessTokenClient;

/**
 * Author: Weida
 * Date: 2023/11/5 12:41
 * Email: sgenmi@gmail.com
 */
class Application extends AbstractApplication
{
    protected string $cacheNamespace="weida:jinritemai";
    private WithAccessTokenClientInterface $client;

    /**
     * @param int|string $shopId
     * @param string $refreshToken
     * @return $this
     * @author Weida
     */
    public function withRefreshToken(int|string $shopId,string $refreshToken):static{
        $this->client = new WithAccessTokenClient(
            $this->getHttpClient(),
            $this->getAccessToken($shopId,$refreshToken)
        );
        return $this;
    }

    /**
     * @param int| string $shopId
     * @param string $accessToken
     * @return $this
     * @author Weida
     */
    public function withAccessToken(int|string $shopId,string $accessToken):static {
        $_at =  $this->getAccessToken($shopId,'');
        $_at->setToken($accessToken);
        $this->client = new WithAccessTokenClient(
            $this->getHttpClient(),
            $_at
        );
        return $this;
    }

    /**
     * @return WithAccessTokenClientInterface
     * @author Weida
     */
    public function getClient():WithAccessTokenClientInterface{
        return $this->client;
    }


}