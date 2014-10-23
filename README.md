# Woohoo Labs. Spec Generator

**Generate various specifications (e.g. Swagger Spec 2.0) in perfect sync with your real code via object-oriented PHP!**

## Introduction

This library aims to foster creating configurations and specifications which would be written in structured data formats
(like JSON, XML, YML). Not only these files can grow extremely long, but they can easily become a nightmare from a
maintenance point of view. For example, let's take the [Swagger 2.0](https://github.com/swagger-api/swagger-spec/blob/master/versions/2.0.md)
specification: the documentation of an API with only a handful of resources can easily go over one thousand of lines.
That's why it requires a great effort to have a good overview on the document.

Another problem is that the live software and its specification usually diverges from each other over time as the
maintaining staff is too busy/negligent/forgetful to synchronize them. Woohoo Labs. Spec Generator tries to
shorten the gap between them: the main idea is to generate documents supported by the glorious object-oriented features
right from your application's code! 

When talking about creating documentations, you could ask what the point is in writing these documents by hand,
when some of them (e.g. Swagger docs) could be generated by frameworks which use annotations for the definitions.
While this is a valid point, there are yet some major drawbacks of this approach (it is called reverse-engineering):
- **It is not forward-engineering:** Sometimes you need to design something before you ship it :)
- **Your specification/documentation will be fragmented:** there won't be any single place to look for these 
definitions. That's why if you need to change something in multiple places then it won't be easy.
- **You won't benefit from the capabilities of PHP:** You can't extend classes, can't read data from files or even
constants, can't have code completion from your IDE etc. This undermines real consistency.

## Features

- Support for Swagger 2.0 API documentation
- Different output formats (array, JSON, XML, YML)
- Specification can be cached for improved performance

## Basic Usage

## Advanced Usage

## License

The MIT License (MIT). Please see the [License File](https://github.com/woohoolabs/spec-generator/blob/master/LICENSE.md)
for more information.
