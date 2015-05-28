### Doctrine命令

	Doctrine Command Line Interface version 2.5.0

	Usage:
	 command [options] [arguments]

	Options:
	 --help (-h)           Display this help message
	 --quiet (-q)          Do not output any message
	 --verbose (-v|vv|vvv) Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
	 --version (-V)        Display this application version
	 --ansi                Force ANSI output
	 --no-ansi             Disable ANSI output
	 --no-interaction (-n) Do not ask any interactive question

	Available commands:
	 help                             Displays help for a command
	 list                             Lists commands
	dbal
	 dbal:import                      Import SQL file(s) directly to Database.
	 dbal:run-sql                     Executes arbitrary SQL directly from the command line.
	orm
	 orm:clear-cache:metadata         Clear all metadata cache of the various cache drivers.
	 orm:clear-cache:query            Clear all query cache of the various cache drivers.
	 orm:clear-cache:result           Clear all result cache of the various cache drivers.
	 orm:convert-d1-schema            Converts Doctrine 1.X schema into a Doctrine 2.X schema.
	 orm:convert-mapping              Convert mapping information between supported formats.
	 orm:convert:d1-schema            Converts Doctrine 1.X schema into a Doctrine 2.X schema.
	 orm:convert:mapping              Convert mapping information between supported formats.
	 orm:ensure-production-settings   Verify that Doctrine is properly configured for a production environment.
	 orm:generate-entities            Generate entity classes and method stubs from your mapping information.
	 orm:generate-proxies             Generates proxy classes for entity classes.
	 orm:generate-repositories        Generate repository classes from your mapping information.
	 orm:generate:entities            Generate entity classes and method stubs from your mapping information.
	 orm:generate:proxies             Generates proxy classes for entity classes.
	 orm:generate:repositories        Generate repository classes from your mapping information.
	 orm:info                         Show basic information about all mapped entities
	 orm:mapping:describe             Display information about mapped objects
	 orm:run-dql                      Executes arbitrary DQL directly from the command line.
	 orm:schema-tool:create           Processes the schema and either create it directly on EntityManager Storage Connection or generate the SQL output.
	 orm:schema-tool:drop             Drop the complete database schema of EntityManager Storage Connection or generate the corresponding SQL output.
	 orm:schema-tool:update           Executes (or dumps) the SQL needed to update the database schema to match the current mapping metadata.
	 orm:validate-schema              Validate the mapping files.


### 用法
> 连接好数据库后执行下面命令

``` php application/doctrine ```  
``` php applicaiton/doctrine orm:schema-tool:create ``` // 创建表
