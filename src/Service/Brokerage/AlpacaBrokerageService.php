<?php

/*
 * Stocks Api
 */

declare(strict_types=1);

namespace StocksApiBundles\BrokerageClient\Service\Brokerage;

use Doctrine\ORM\EntityManagerInterfac
use App\Entity\Account;
use App\Service\DefaultTypeService;
use App\Service\OrderService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AlpacaBrokerageService extends AbstractBrokerageService
{
    /**
     * @var AccountServiceInterface
     */
    private $accountService;

    /**
     * @var DefaultTypeServiceInterface
     */
    private $defaultTypeService;

    /**
     * @var OrderServiceInterface
     */
    private $orderService;

    /**
     * @var Request
     */
    private $request;

    /**
     * @var Response
     */
    private $response;

    public function __construct(
        AccountService $accountService,
        DefaultTypeService $defaultTypeService,
        OrderService $orderService
    ) {
        $this->accountService = $accountService;
        $this->defaultTypeService = $defaultTypeService;
        $this->orderService = $orderService;
    }

    public function getAccountInfo(Account $account): AccountInfoInterface
    {
        $url = $account->getApiUrl();
    }

    public function getOrders(Account $account): BrokerageOrderInterface
    {
    }
}
