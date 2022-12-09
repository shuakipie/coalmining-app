<?php

/*
PHPDoc Tutorial
---------------------------------------------
Function
Constant
Class
Interface
Trait
Class Constant
Property
Method

/**     Single line Doc Comment */

/** 
*       Multi Line Doc Block
*       [whitespace]
*       Description
*/

/*
Running PHPDoc
---------------------------------------------------
$ phpdoc -d path/to/my/project -f path/to/an/additional/file -t path/to/my/output/folder



28 Tags
------------------------------------------------
*/

/**
*   @api 	API Purpose  - Scripts used for public 
*   @author Karthik <mail2nkm@gmail.com>
*   @category Application/Particular Class Category
*	@copyright 2016 SWOT Techsolutions PVT Ltd
*	@deprecated 1.0 No Longer Used for Production
*	@example	example code/output here
*	@filesource	 include the current file in the parsing output.
*	@global	type global variables name description
*	@ignore  Structural Elements tagged with the @ignore tag will be not be processed.
*	@internal for internal workings of thie piece of software
* 
*	@license GPL, GNU, BSD, FreeBSD, MIT, LGPL
*	@license http://opensource.org/licenses/gpl-license.php GNU Public License
*	@link    url  description
*	@method  tag is used in situation where a class contains the __call() magic method and defines some definite uses.
*	@package PSR\Documentation\API
*	@param   Parameter Type Name Description
*	@param  mixed[] $array items  
*	@property  The @property tag allows a class to know which ‘magic’ properties are present.
*	@property-read read only
*	@property-write	write only
*	@return   integer indicates the no of items.
*	@see      http://example.com  documentation/demo of foo
*	@see      MyClass:setItems()
*	@since    version avbl  description
*	@source   [<start-line> [<number-of-lines>] ] [<description>]
*	@subpackage  $subpackage name
*	@throws      Type  Description
*	@todo       indicate development activities
*	@uses        Where the function will be using
*	@used-by     Where the function has using now
*	@var         Type Element Name    Description
*	@version    1.0.1
*/
