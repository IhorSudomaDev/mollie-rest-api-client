
# Mollie API

This api was created to be able to interact with the Mollie service.


## Installation

Install integration via composer.
Don`t forget to add needed repository to the project:

Bash command:
```bash
  composer require ihor-sudoma-dev/mollie-rest-api-client
```


## Usage/Examples

To use the API, you need the access token of the service itself.

Example code:

```php
$client = new MollieApiClient('Your access token');
```