<?php
namespace AutoTest ;
class  A
{
    use X ;

}
class B
{
    use X ;

}

trait X
{
    public function hello()
    {
        echo "hello" ;
    }

}
