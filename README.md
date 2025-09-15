# Setup

## See it fail in the tests
1. Run `composer start`
2. Set correct values in `phpunit.xml`
3. Run the tests (`composer test`) and see it fail (in MySQL)
4. Set values to Postgresql in `phpunit.xml`
5. Run the tests (`composer test`) and see it pass (in Postgresql)

## Check sorting strategies in the browser
1. Set `MySQL` values in `.env`
2. Run `composer start`
3. Check the sorting on the customer table
4. Set `postgres` values in `.env`
5. Run `composer start`
6. Check the sorting on the customer table

### Login
Email:
```
test@example.com
```

Password:
```
password
```
