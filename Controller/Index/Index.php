<?php declare(strict_types=1);

/**
 * @author tjitse (Vendic)
 * Created on 2019-10-21 11:19
 */

namespace Vendic\MysqlMqExample\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\MessageQueue\PublisherInterface;
use Psr\Log\LoggerInterface;
use Vendic\MysqlMqExample\Api\Data\SampleDataInterface;

class Index extends Action
{
    /**
     * @var PublisherInterface
     */
    protected $publisher;
    /**
     * @var SampleDataInterface
     */
    protected $sampleData;
    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(
        LoggerInterface $logger,
        SampleDataInterface $sampleData,
        PublisherInterface $publisher,
        Context $context
    ) {
        parent::__construct($context);
        $this->publisher = $publisher;
        $this->sampleData = $sampleData;
        $this->logger = $logger;
    }

    public function execute()
    {
        $this->sampleData->setData('Some random customer data for later processing ...');
        $this->publisher->publish('new_customer.created', $this->sampleData);
        $this->logger->debug('Addded message to queue');

        var_dump('Added message to queue');
    }
}
