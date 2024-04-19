# BrightSign API #

This PHP library is a library for interacting with the BrightSign SOAP API.

It makes use of the [https://github.com/wsdl2phpgenerator/wsdl2phpgenerator](WSDL2PHP Generator) library to generate all the relevant files.

## Getting started ##

To get started, you need to know the location of the WSDL files of the service, you wish to use:

- Application Service WSDL file
- Content Upload Service WSDL file

When you've aquired these two locations, open a terminal, go to the project root folder and run the following command:

```shell
./console generate <Application Service WSDL> <Content Upload Service WSDL>
``` 

This will generate both the Services with methods and all parameters as objects in the `src/Entity` folder.

When this is done, you should test, whether all is set up and ready:

```shell
./console test <user login> <password> <account name>
``` 

This command will tell you, whether the login and connection worked.

## Common issues	

If you are having problem with "Error fetching http headers". Increase the socket time
```
ini_set('default_socket_timeout', 5000);
```


## Contribution

Feel free