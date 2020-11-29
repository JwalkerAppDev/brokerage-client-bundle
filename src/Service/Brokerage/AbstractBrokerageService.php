<?php

/*
 * Stocks Api
 */

declare(strict_types=1);

namespace StocksApiBundles\BrokerageClient\Service\Brokerage;

use Http\Client\HttpClient;
use Http\Message\RequestFactory;
use Psr\Log\LoggerInterface;

abstract class AbstractBrokerageService implements BrokerageInterface
{
	/**
	 * @var string
	 */
	private $baseUrl;

	/**
	 * @var HttpClient
	 */
	private $client;

	/**
	 * @var $requestFactory
	 */
	private $requestFactory;

	/**
	 * @var LoggerInterface
	 */
	private $logger;

	public function __construct(
		string $baseUrl,
		HttpClient $client,
		RequestFactory $requestFactory,
		LoggerInterface $logger
	) {
		$this->client = $client;
		$this->requestFactory = $requestFactory;
		$this->logger = $logger;
	}
}
