<?php

#[ExampleAttribute]
class Foo
{
    #[ExampleAttribute]
    public const FOO = 'foo';

    public function foo(#[ExampleAttribute] Type $bar) {}
}
 
$object = new #[ExampleAttribute] class () {};
 
$f1 = #[ExampleAttribute] function () {};

$f2 = #[ExampleAttribute] fn() => 1;