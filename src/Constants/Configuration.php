<?php

/*
 * Brokerage Bundle
 */

declare(strict_types=1);

namespace StocksApiBundles\BrokerageClient\Constants;

class Configuration
{
    const BROKERAGES = 'brokerages';

    /**
     * Brokerage Mapping.
     */
    const BROKERAGE_CONFIG_MAP = 'config';
    const BROKERAGE_CONFIG_API_MAP = 'api';
    const BROKERAGE_MAP_NAME = 'name';
    const BROKERAGE_MAP_CONTEXT = 'context';
    const BROKERAGE_MAP_DESCRIPTION = 'description';
    const BROKERAGE_MAP_ORDER_CLASSES = 'order_class_type';
    const BROKERAGE_MAP_ORDER_STATUSES = 'order_status_type';
    const BROKERAGE_MAP_ORDER_SIDE_TYPES = 'order_side_type';
    const BROKERAGE_MAP_ORDER_TYPES = 'order_type';
    const BROKERAGE_MAP_POSITION_SIDE_TYPES = 'position_side_type';
    const BROKERAGE_MAP_URL = 'url';
    const BROKERAGE_MAP_API_DOCUMENT_URL = 'api_document_url';
    const BROKERAGE_MAP_API_BASE = 'api_base';
    const BROKERAGE_MAP_PAPER_API_BASE = 'paper_api_base';
}
