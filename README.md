# Magento 2.3 mysql queue sample module

1. Install the module
2. Run `php bin/magento setup:upgrade`
3. Tail the logs: `tail -f var/log/*`
4. Add a message to the queue by visiting `https://yourmagentoinstance.test/newcustomer`
5. Process the queue `php bin/magento queue:consumer:start new_customer.created --max-messages=1`

The logs now should display `[2019-10-21 09:39:43] main.DEBUG: Processed queue message... [] []`

### About Vendic
[Vendic - Magento 2](https://vendic.nl "Vendic Homepage") develops technically challenging e-commerce websites using Magento 2. Feel free to check out our projects on our website.

